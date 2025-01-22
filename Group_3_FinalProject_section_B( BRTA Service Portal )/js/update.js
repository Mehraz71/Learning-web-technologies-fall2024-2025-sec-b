function update() {
  let action = "update";
  let id = document.getElementById("id").value;
  let start_point = document.getElementById("start_point").value;
  let end_point = document.getElementById("end_point").value;
  let amount = document.getElementById("fare").value;
  if (
    !id ||
    !start_point ||
    !end_point ||
    !amount ||
    isNaN(amount) ||
    amount <= 0
  ) {
    alert(
      "Please ensure all fields are filled correctly. Fare must be a valid number greater than 0."
    );
    return;
  }

  let json = {
    action: action,
    id: id,
    start_point: start_point,
    end_point: end_point,
    amount: amount,
  };
  let data = JSON.stringify(json);

  let xhttp = new XMLHttpRequest();
  xhttp.open("post", "../controller/update_fare_controller_ajax.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("mydata=" + data);
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert("Update Successful");
      document.getElementById("msg").innerHTML = this.responseText;
    }
  };
}

function remove() {
  let action = "remove";
  let id = document.getElementById("id").value;
  let start_point = document.getElementById("start_point").value;
  let end_point = document.getElementById("end_point").value;
  let amount = document.getElementById("fare").value;

  if (
    !id ||
    !start_point ||
    !end_point ||
    !amount ||
    isNaN(amount) ||
    amount <= 0
  ) {
    alert(
      "Please ensure all fields are filled correctly. Fare must be a valid number greater than 0."
    );
    return;
  }

  let json = {
    action: action,
    id: id,
    start_point: start_point,
    end_point: end_point,
    amount: amount,
  };
  let data = JSON.stringify(json);

  let xhttp = new XMLHttpRequest();
  xhttp.open("post", "../controller/update_fare_controller_ajax.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("mydata=" + data);

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert("Delete Successful");
      document.getElementById("msg").innerHTML = this.responseText;
    }
  };
}
function back() {
  window.location.href = "../view/admin_fare_view_ajax.php";
}

function add() {
  let action = "add";
  let id = document.getElementById("id").value;
  let start_point = document.getElementById("start_point").value;
  let end_point = document.getElementById("end_point").value;
  let amount = document.getElementById("fare").value;

  if (
    !id ||
    !start_point ||
    !end_point ||
    !amount ||
    isNaN(amount) ||
    amount <= 0
  ) {
    alert(
      "Please ensure all fields are filled correctly. Fare must be a valid number greater than 0."
    );
    return;
  }

  let json = {
    action: action,
    id: id,

    start_point: start_point,
    end_point: end_point,
    amount: amount,
  };
  let data = JSON.stringify(json);

  let xhttp = new XMLHttpRequest();
  xhttp.open("post", "../controller/update_fare_controller_ajax.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("mydata=" + data);

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert("ADD Successful");
      document.getElementById("msg").innerHTML = this.responseText;
    }
  };
}
