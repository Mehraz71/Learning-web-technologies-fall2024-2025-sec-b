function senddata() {
  let first_owner_name = document.getElementById("first_owner_name").value;
  let first_owner_fname = document.getElementById("first_owner_fname").value;
  let first_owner_dob = document.getElementById("first_owner_dob").value;
  let first_owner_address = document.getElementById(
    "first_owner_address"
  ).value;
  let first_owner_phone = document.getElementById("first_owner_phone").value;
  let first_owner_nid = document.getElementById("first_owner_nid").value;
  let first_owner_photo = document.getElementById("first_owner_photo").files[0];

  let second_owner_name = document.getElementById("second_owner_name").value;
  let second_owner_fname = document.getElementById("second_owner_fname").value;
  let second_owner_dob = document.getElementById("second_owner_dob").value;
  let second_owner_email = document.getElementById("second_owner_email").value;
  let second_owner_address = document.getElementById(
    "second_owner_address"
  ).value;
  let second_owner_phone = document.getElementById("second_owner_phone").value;
  let second_owner_nid = document.getElementById("second_owner_nid").value;
  let second_owner_photo =
    document.getElementById("second_owner_photo").files[0];
  let vehicle_registration = document.getElementById(
    "vehicle_registration"
  ).value;
  let vehicle_tax_token = document.getElementById("vehicle_tax_token").value;

  if (
    !first_owner_name ||
    !first_owner_fname ||
    !first_owner_dob ||
    !first_owner_address ||
    !first_owner_phone ||
    !first_owner_nid
  ) {
    alert("Please fill out all fields for the first owner.");
    return;
  }
  if (
    !second_owner_name ||
    !second_owner_fname ||
    !second_owner_dob ||
    !second_owner_email ||
    !second_owner_address ||
    !second_owner_phone ||
    !second_owner_nid
  ) {
    alert("Please fill out all fields for the second owner.");
    return;
  }

  let json = {
    first_owner_name: first_owner_name,
    first_owner_fname: first_owner_fname,
    first_owner_dob: first_owner_dob,
    first_owner_address: first_owner_address,
    first_owner_phone: first_owner_phone,
    first_owner_nid: first_owner_nid,

    second_owner_name: second_owner_name,
    second_owner_fname: second_owner_fname,
    second_owner_dob: second_owner_dob,
    second_owner_email: second_owner_email,
    second_owner_address: second_owner_address,
    second_owner_phone: second_owner_phone,
    second_owner_nid: second_owner_nid,

    vehicle_registration: vehicle_registration,
    vehicle_tax_token: vehicle_tax_token,
  };

  console.log("Form Data:", json);
  console.log(
    "First Owner Photo:",
    first_owner_photo ? first_owner_photo.name : "No photo selected"
  );
  console.log(
    "Second Owner Photo:",
    second_owner_photo ? second_owner_photo.name : "No photo selected"
  );

  let formData = new FormData();

  formData.append("owner", JSON.stringify(json));

  if (first_owner_photo)
    formData.append("first_owner_photo", first_owner_photo);
  if (second_owner_photo)
    formData.append("second_owner_photo", second_owner_photo);

  for (let pair of formData.entries()) {
    console.log(pair[0] + ": " + pair[1]);
  }

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../controller/ownr_change_controller_ajax.php", true);

  xhttp.send(formData);

  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      alert(this.responseText);
      document.getElementById("msg").innerHTML = this.responseText;
    }
  };
}
