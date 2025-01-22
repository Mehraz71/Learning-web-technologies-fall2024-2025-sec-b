function abc() {
  let lcnumber = document.getElementById("lcnumber").value.trim();

  if (!lcnumber) {
    document.getElementById("msg").innerHTML =
      "Enter Your valid License Number to Search";
    return;
  }
  let json = { lcnumber: lcnumber };
  let data = JSON.stringify(json);

  let xhttp = new XMLHttpRequest();

  xhttp.open("post", "../controller/showfineajax.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("searchfine=" + data);
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      try {
        let response = JSON.parse(this.responseText);
        console.log(response);

        if (response.error) {
          document.getElementById("msg").innerHTML = response.error;
          return;
        } else if (response.message) {
          document.getElementById("msg").innerHTML = response.message;
          return;
        }

        let tableBody = document.querySelector("#tbl tbody");
        tableBody.innerHTML = "";

        if (Array.isArray(response)) {
          response.forEach((fine) => {
            let tr = document.createElement("tr");

            let td1 = document.createElement("td");
            td1.innerHTML = fine.license_number;

            let td2 = document.createElement("td");
            td2.innerHTML = fine.phone;

            let td3 = document.createElement("td");
            td3.innerHTML = fine.area;

            let td4 = document.createElement("td");
            td4.innerHTML = fine.violation;

            let td5 = document.createElement("td");
            td5.innerHTML = fine.officer_name;

            let td6 = document.createElement("td");
            td6.innerHTML = fine.amount;

            let td7 = document.createElement("td");
            let payButton = document.createElement("button");
            payButton.innerHTML = "PAY";
            payButton.onclick = function () {
              let licenseNumber = fine.license_number;
              let amount = fine.amount;

              window.location.href = `../view/paymentajax.php?license_number=${licenseNumber}&amount=${amount}`;
            };
            td7.appendChild(payButton);

            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(td5);
            tr.appendChild(td6);
            tr.appendChild(td7);

            tableBody.appendChild(tr);
          });
        } else {
          document.getElementById("msg").innerHTML =
            "An unexpected error occurred while processing fines.";
        }
      } catch (error) {
        console.error("Error parsing JSON:", error);
        document.getElementById("msg").innerHTML =
          "An error occurred while processing the response.";
      }
    }
  };
}

function searchfine() {
  let lcnumber = document.getElementById("lcnumber").value.trim();

  if (!lcnumber) {
    document.getElementById("msg").innerHTML =
      "Enter a valid License Number to Search";
    return;
  }

  let json = { lcnumber: lcnumber };
  let data = JSON.stringify(json);
  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/showfineajax.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("searchfine=" + data);

  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      try {
        let response = JSON.parse(this.responseText);

        if (response.error) {
          document.getElementById("msg").innerHTML = response.error;
          return;
        } else if (response.message) {
          document.getElementById("msg").innerHTML = response.message;
          return;
        }

        let tableBody = document.querySelector("#tbl tbody");
        tableBody.innerHTML = "";

        response.forEach((fine) => {
          let tr = document.createElement("tr");

          let td1 = document.createElement("td");
          td1.innerHTML = fine.license_number;

          let td2 = document.createElement("td");
          td2.innerHTML = fine.area;

          let td3 = document.createElement("td");
          td3.innerHTML = fine.violation;

          let td4 = document.createElement("td");
          td4.innerHTML = fine.officer_name;

          let td5 = document.createElement("td");
          td5.innerHTML = fine.amount;

          tr.appendChild(td1);
          tr.appendChild(td2);
          tr.appendChild(td3);
          tr.appendChild(td4);
          tr.appendChild(td5);

          tableBody.appendChild(tr);
        });
      } catch (error) {
        console.error("Error parsing JSON:", error);
        document.getElementById("msg").innerHTML =
          "An error occurred while processing the response.";
      }
    }
  };
}

function efg() {
  let lcnumber = document.getElementById("lcnumber").value.trim();

  if (!lcnumber) {
    document.getElementById("msg").innerHTML =
      "Enter Your valid License Number to Search";
    return;
  }
  let json = { lcnumber: lcnumber };
  let data = JSON.stringify(json);

  let xhttp = new XMLHttpRequest();

  xhttp.open("post", "../controller/showfineajax.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("searchfine=" + data);
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      try {
        let response = JSON.parse(this.responseText);
        console.log(response); // Debug the response here

        if (response.error) {
          document.getElementById("msg").innerHTML = response.error;
          return;
        } else if (response.message) {
          document.getElementById("msg").innerHTML = response.message;
          return;
        }

        // If response is an array of fine details, dynamically create a table
        let tableBody = document.querySelector("#tbl tbody");
        tableBody.innerHTML = ""; // Clear existing rows

        // Assuming response is an array
        if (Array.isArray(response)) {
          // Only use forEach if response is an array
          response.forEach((fine) => {
            let tr = document.createElement("tr");
            let td1 = document.createElement("td");
            td1.innerHTML = fine.license_number;

            let td2 = document.createElement("td");
            td2.innerHTML = fine.area;

            let td3 = document.createElement("td");
            td3.innerHTML = fine.violation;

            let td4 = document.createElement("td");
            td4.innerHTML = fine.officer_name;

            let td5 = document.createElement("td");
            td5.innerHTML = fine.amount;

            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(td5);

            tableBody.appendChild(tr); // Append the new row to the table body
          });
        } else if (response.message) {
          document.getElementById("msg").innerHTML = response.message;
        }
      } catch (error) {
        console.error("Error parsing JSON:", error);
        document.getElementById("msg").innerHTML =
          "An error occurred while processing the response.";
      }
    }
  };
}
