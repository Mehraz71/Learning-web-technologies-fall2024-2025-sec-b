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
            document.getElementById("msg").innerHTML = "No fares found.";
          } else {
            response.forEach((fare) => {
              if (
                !fare?.id ||
                !fare?.start_point ||
                !fare?.end_point ||
                !fare?.fare
              ) {
                alert("Some fields in the fare data are missing or invalid!");
                return;
              }
              let tr = document.createElement("tr");

              let td1 = document.createElement("td");
              td1.innerHTML = fare.id;

              let td2 = document.createElement("td");
              td2.innerHTML = fare.start_point;

              let td3 = document.createElement("td");
              td3.innerHTML = fare.end_point;

              let td4 = document.createElement("td");
              td4.innerHTML = fare.fare;

              let td5 = document.createElement("td");

              let updatebutton = document.createElement("button");
              updatebutton.innerHTML = "Edit";
              updatebutton.onclick = function () {
                update(fare);
              };
              td5.appendChild(updatebutton);

              tr.appendChild(td1);
              tr.appendChild(td2);
              tr.appendChild(td3);
              tr.appendChild(td4);
              tr.appendChild(td5);

              tableBody.appendChild(tr);
            });
          }
        }
      } catch (error) {
        console.error("Error parsing JSON:", error);
        document.getElementById("msg").innerHTML =
          "An error occurred while processing the response.";
      }
    }
  };
}

function chittagong() {
  let json = { fare: "chittagong" };
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
              if (
                !fare?.id ||
                !fare?.start_point ||
                !fare?.end_point ||
                !fare?.fare
              ) {
                alert("Some fields in the fare data are missing or invalid!");
                return;
              }
              let tr = document.createElement("tr");

              let td1 = document.createElement("td");
              td1.innerHTML = fare.id;

              let td2 = document.createElement("td");
              td2.innerHTML = fare.start_point;

              let td3 = document.createElement("td");
              td3.innerHTML = fare.end_point;

              let td4 = document.createElement("td");
              td4.innerHTML = fare.fare;

              let td5 = document.createElement("td");

              let updatebutton = document.createElement("button");
              updatebutton.innerHTML = "Edit";
              updatebutton.onclick = function () {
                update(fare);
              };
              td5.appendChild(updatebutton);
              tr.appendChild(td1);
              tr.appendChild(td2);
              tr.appendChild(td3);
              tr.appendChild(td4);
              tr.appendChild(td5);

              tableBody.appendChild(tr);
            });
          }
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
          tableBody.innerHTML = ""; // Clear existing rows

          if (response.length === 0) {
            document.getElementById("msg").innerHTML = "No fines found.";
          } else {
            response.forEach((fare) => {
              if (
                !fare?.id ||
                !fare?.start_point ||
                !fare?.end_point ||
                !fare?.fare
              ) {
                alert("Some fields in the fare data are missing or invalid!");
                return;
              }
              let tr = document.createElement("tr");
              let td1 = document.createElement("td");
              td1.innerHTML = fare.id;

              let td2 = document.createElement("td");
              td2.innerHTML = fare.start_point;

              let td3 = document.createElement("td");
              td3.innerHTML = fare.end_point;

              let td4 = document.createElement("td");
              td4.innerHTML = fare.fare;

              let td5 = document.createElement("td");

              let updatebutton = document.createElement("button");
              updatebutton.innerHTML = "Edit";
              updatebutton.onclick = function () {
                update(fare);
              };
              td5.appendChild(updatebutton);

              tr.appendChild(td1);
              tr.appendChild(td2);
              tr.appendChild(td3);
              tr.appendChild(td4);
              tr.appendChild(td5);

              tableBody.appendChild(tr);
            });
          }
        }
      } catch (error) {
        console.error("Error parsing JSON:", error);
        document.getElementById("msg").innerHTML =
          "An error occurred while processing the response.";
      }
    }
  };
}

function update(fare) {
  let id = fare.id;
  let start_point = fare.start_point;
  let end_point = fare.end_point;
  let amount = fare.fare;
  window.location.href = `../view/updateFare.php?id=${id}&start_point=${start_point}&end_point=${end_point}&amount=${amount}`;
}
