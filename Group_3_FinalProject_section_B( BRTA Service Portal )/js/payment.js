function payment() {
  let lcnumber = document.getElementById("lcnumber").value.trim();
  let amount = document.getElementById("amount").value.trim();
  let account_number = document.getElementById("account_number").value.trim();
  let bankName = document.getElementById("bankName").value.trim();
  let bankPin = document.getElementById("bankPin").value.trim();

  if (!lcnumber || !amount || !account_number || !bankName || !bankPin) {
    document.getElementById("msg").innerHTML = "All fields are required.";
    return;
  }

  let json = {
    lcnumber: lcnumber,
    amount: amount,
    account_number: account_number,
    bankName: bankName,
    bankPin: bankPin,
  };
  let data = JSON.stringify(json);
  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/payment_controller_ajax.php", true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send("payment=" + data);

  // xhttp.onreadystatechange = function () {
  // if (this.readyState === 4 && this.status === 200) {
  // document.getElementById("msg").innerHTML =
  // "Thank You " + this.responseText + " for your payment.";
  //}
  //};

  xhttp.onload = function () {
    try {
      const response = JSON.parse(this.responseText);

      if (response.status === "success") {
        document.getElementById("msg").innerHTML = response.message;
      } else if (response.status === "error") {
        document.getElementById("msg").innerHTML = response.errors
          ? response.errors.join("<br>")
          : response.message;
      }
    } catch (error) {
      console.error("Error parsing JSON:", error);
      document.getElementById("msg").innerHTML =
        "An unexpected error occurred.";
    }
  };
}
