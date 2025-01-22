function dhakafare() {
  let json = { fare: "dhakabusfare" };
  let data = JSON.stringify(json);

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/fare_controller_ajax.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("showfare=" + data);

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

        if (Array.isArray(response)) {
          let tableBody = document.querySelector("#tbl tbody");
          tableBody.innerHTML = "";

          if (response.length === 0) {
            document.getElementById("msg").innerHTML = "No fines found.";
          } else {
            response.forEach((fare) => {
              let tr = document.createElement("tr");

              let td1 = document.createElement("td");
              td1.innerHTML = fare.start_point;

              let td2 = document.createElement("td");
              td2.innerHTML = fare.end_point;

              let td3 = document.createElement("td");
              td3.innerHTML = fare.fare;

              tr.appendChild(td1);
              tr.appendChild(td2);
              tr.appendChild(td3);

              tableBody.appendChild(tr);
            });
          }
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

function ctgfare() {
  let json = { fare: "ctgbusfare" };
  let data = JSON.stringify(json);

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/fare_controller_ajax.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("showfare=" + data);

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

        if (Array.isArray(response)) {
          let tableBody = document.querySelector("#tbl tbody");
          tableBody.innerHTML = "";

          if (response.length === 0) {
            document.getElementById("msg").innerHTML = "No fines found.";
          } else {
            response.forEach((fare) => {
              let tr = document.createElement("tr");

              let td1 = document.createElement("td");
              td1.innerHTML = fare.start_point;

              let td2 = document.createElement("td");
              td2.innerHTML = fare.end_point;

              let td3 = document.createElement("td");
              td3.innerHTML = fare.fare;

              tr.appendChild(td1);
              tr.appendChild(td2);
              tr.appendChild(td3);

              tableBody.appendChild(tr);
            });
          }
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

function intercityfare() {
  let json = { fare: "intercityfare" };
  let data = JSON.stringify(json);

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/fare_controller_ajax.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("showfare=" + data);

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

        if (Array.isArray(response)) {
          let tableBody = document.querySelector("#tbl tbody");
          tableBody.innerHTML = "";

          if (response.length === 0) {
            document.getElementById("msg").innerHTML = "No fines found.";
          } else {
            response.forEach((fare) => {
              let tr = document.createElement("tr");

              let td1 = document.createElement("td");
              td1.innerHTML = fare.start_point;

              let td2 = document.createElement("td");
              td2.innerHTML = fare.end_point;

              let td3 = document.createElement("td");
              td3.innerHTML = fare.fare;

              tr.appendChild(td1);
              tr.appendChild(td2);
              tr.appendChild(td3);

              tableBody.appendChild(tr);
            });
          }
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
