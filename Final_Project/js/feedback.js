function submitFeedback() {
  console.log("Feedback function is called");

  let username = document.getElementById("username").value.trim();
  let email = document.getElementById("email").value.trim();
  let feedback = document.getElementById("user_feedback").value.trim();

  if (!username || !email || !feedback) {
    alert("All fields are required");
    document.getElementById("msg").innerHTML = "All fields are required.";
    return;
  }

  let json = { username: username, email: email, feedback: feedback };
  let data = JSON.stringify(json);

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/feedbackcontroller.php", true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send("feedback=" + encodeURIComponent(data));

  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      document.getElementById("msg").innerHTML =
        "Thank you " + this.responseText + " for your valuable feedback.";
    }
  };
}
