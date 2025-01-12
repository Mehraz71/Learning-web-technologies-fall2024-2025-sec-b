function nullvalidation() {
  let empname = document.getElementById("empname").value;
  if (empname == "") {
    document.getElementById("msg").innerHTML = "Please type your name!";
  }
}

function ajax() {
  let empname = document.getElementById("empname").value;
  let contactno = document.getElementById("contactno").value;
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  if (empname == "" && contactno == "" && username == "" && password == "") {
    alert("All fields are required!");
  } else {
  }
}
