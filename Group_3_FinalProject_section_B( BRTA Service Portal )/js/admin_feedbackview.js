function feedback() {
  let xhttp = new XMLHttpRequest();
  xhttp.open("GET", "../controller/admin_feedback_controller_ajax.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let feedbackData = JSON.parse(this.responseText);

      const tableBody = document.querySelector("#feedbackTable tbody");
      tableBody.innerHTML = "";

      if (feedbackData.length === 0) {
        tableBody.innerHTML =
          "<tr><td colspan='3'>No feedback available</td></tr>";
        return;
      }

      feedbackData.forEach((item) => {
        const row = document.createElement("tr");
        row.innerHTML = `
          <td>${item.username}</td>
          <td>${item.email}</td>
          <td>${item.feedback}</td>
          
        `;
        tableBody.appendChild(row);
      });
    }
  };
}
