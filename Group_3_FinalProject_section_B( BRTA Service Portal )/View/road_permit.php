<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="random.css" />
    <title>Road permit</title>
    <style>
            body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: white;
    }
    header {
      background-color: #066f22;
    
      color: white;
      padding: 40px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
    }
    header h1 {
      font-family: "Times New Roman", Times, serif;
      font-size: xx-large;
      margin: 0;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }
    #brtalogo {
      position: absolute; 
      top: 9px; 
      left: 90px; 
    }
    #brtalogo img {
      width: 60px; 
      height: auto; 
    }
    
    .navbar {
      background-color: coral;
      height: 45px;
    }
    #logout {
      position: absolute;
      top: 80px;
      right: 50px;
    }
    
    #logout img {
      height: 40px;
    
      width: 40px;
    }
    #logout img:hover {
      height: 42px;
    
      width: 42px;
    }
    #apply {
        position: absolute;
        top: 130px;
        right: 450px;
      }

      #apply fieldset {
        width: 90%; 
        background-color:rgb(247, 224, 182); 
        border: 2px solidrgb(117, 52, 171); 
        padding: 20px;
        border-radius: 8px; 
      }

      #apply table {
        width: 100%;
        margin: auto; 
        text-align: left;
        border-collapse: collapse;
      }

      #apply th {
        text-align: left;
        padding: 5px;
      }

      #apply td {
        padding: 5px;
      }

      #apply h3 {
        text-align: center;
        color:rgb(122, 38, 217);
      }

      #apply button {
        background-color:rgb(122, 38, 217); 
        color: white;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 5px;
      }

      #apply button:hover {
        background-color:rgb(168, 73, 232);
      }
      .navbar {
      background-color: coral;
      height: 45px;
    }
      #home {
      position: absolute;
      top: 85px;
      right: 180px;
    }
    #home img:hover {
      height: 40px;
    
      width: 40px;
    }
    #home img {
      height: 35px;
    
      width: 35px;
    }
    #profile {
      position: absolute;
      top: 85px;
      right: 120px;
    }
    #profile img:hover {
      height: 40px;
    
      width: 40px;
    }
    #profile img {
      height: 35px;
    
      width: 35;
    }
    </style>
<body>
  <header>
  <h1>BRTA Service Portal</h1>
  </header>
    <div id="brtalogo"><img src="../uploads/BRTA_Logo.png" /></div>
    <div class="navbar">
    <div id="apply">
    <fieldset>
    <h3>Road Permit Application Form</h3>
    <form method="post" action="../controller/addPermit.php" enctype="multipart/form-data" id="permitForm">
    <!-- <form action="../Controller/permit_process.php" method="POST" enctype="multipart/form-data"> -->
    <table>
            <tr>
                <th>Full Name:</th>
                <td><input type="text" id="name" name="name" required></td>
            </tr>
            <tr>
                <th>NID:</th>
                <td><input type="text" id="nid" name="nid" required>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <th><label for="phone">Phone:</label></th>
                <td>
                  <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" 
                    title="Enter a valid 10-digit phone number" required
                  >
                </td>
              </tr>
              <tr>
                <th>Address:</th>
                <td><input type="text" id="address" name="address" required>
            </tr>
            <tr>
                <th> Vehicle Type:</th>
                <td>
                  <select name="vehicletype">
                    <option value="car">Car</option>
                    <option value="bike">Bike</option>
                    <option value="truck">Truck</option>
                    <option value="bus">Bus</option>
                  </select>
                </td>
              </tr>
            <tr>
                <th>Vehicle Registration Number:</th>
                <td><input type="text" id="reg_num" name="reg_num" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><b>Route Details</b></td>
            </tr>
            
            <tr>
                <th>Stating Point:</th>
                <td><input type="text" id="start_point" name="start_point" required></td>
            </tr>
            <tr>
                <th>Ending Point:</th>
                <td><input type="text" id="end_point" name="end_point" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><b>Documents Upload</b></td>
            </tr>
            
            <tr>
                <th><label for="picture">Vehicle Registration Documents:</label></th>
                <td><input type="file" id="vehicleRegDoc" name="vehicleRegDoc" accept="image/*" required></td>
              </tr>
              <tr>
                <th><label for="picture">Insurance Certificate:</label></th>
                <td><input type="file" id="insuranceCert" name="insuranceCert" accept="image/*" required></td>
              </tr>
            
                <tr>
                    <td></td><td></td><td><button type="submit">Submit</button></td>
                </tr>
                
        </table>
    </form>
</fieldset>
</div>
<div id="profile">
        <img src="../uploads/profile.png" />
      </div>
      <div id="home"> <a href="../View/userHome.php"><img src="../uploads/home.png" /></div>
      <div id="logout">
        <a href="../View/logout.php"><img src="../uploads/logout.png"></a>
      </div>
  </div>
  <script>
    document.getElementById('permitForm').addEventListener('submit', function (e) {
        e.preventDefault(); 

        if (!validateForm()) return;

        function validateForm() {
            let name = document.getElementById('name').value.trim();
            let nid = document.getElementById('nid').value.trim();
            let email = document.getElementById('email').value.trim();
            let phone = document.getElementById('phone').value.trim();
            let address = document.getElementById('address').value.trim();
            let regNum = document.getElementById('reg_num').value.trim();
            let startPoint = document.getElementById('start_point').value.trim();
            let endPoint = document.getElementById('end_point').value.trim();

            if (!name || !nid || !email || !phone || !address || !regNum || !startPoint || !endPoint) {
                alert("All fields are required!");
                return false;
            }

            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address!");
                return false;
            }

            let phonePattern = /^[0-9]{10}$/;
            if (!phonePattern.test(phone)) {
                alert("Please enter a valid 10-digit phone number!");
                return false;
            }

            return true;
        }

        function submitForm() {
            if (!validateForm()) return;

            let formData = new FormData();
            formData.append('name', document.getElementById('name').value.trim());
            formData.append('nid', document.getElementById('nid').value.trim());
            formData.append('email', document.getElementById('email').value.trim());
            formData.append('phone', document.getElementById('phone').value.trim());
            formData.append('address', document.getElementById('address').value.trim());
            formData.append('vehicletype', document.querySelector('select[name="vehicletype"]').value);
            formData.append('reg_num', document.getElementById('reg_num').value.trim());
            formData.append('start_point', document.getElementById('start_point').value.trim());
            formData.append('end_point', document.getElementById('end_point').value.trim());
            formData.append('vehicleRegDoc', document.getElementById('vehicleRegDoc').files[0]);
            formData.append('insuranceCert', document.getElementById('insuranceCert').files[0]);

            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../controller/addPermit.php', true);

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let response = JSON.parse(this.responseText);
                    if (response.success) {
                        alert("Permit application submitted successfully!");
                        document.querySelector('form').reset();
                    } else {
                        alert("Failed to submit application: " + response.error);
                    }
                }
            };
            xhttp.send(formData);
        }

        document.querySelector('button[type="submit"]').onclick = function (e) {
            e.preventDefault();
            submitForm();
        };
    });
</script>

</body>
</html>
