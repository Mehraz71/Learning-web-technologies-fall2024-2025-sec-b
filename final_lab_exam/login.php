
<!DOCTYPE html>
<html lang="en">
 
<head>
    <title>Login</title>
    <script>
        function validateForm() {
            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;
            let errorMessage = document.getElementById('error-message');
 
          
            errorMessage.textContent = '';
 
            if (username === '' || password === '') {
                errorMessage.textContent = 'Both fields are required.';
                errorMessage.style.color = 'red';
                return false; 
            }
            return true; 
        }
    </script>
</head>
 
<body>
    <h1>Login</h1>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>
        <button type="submit">Login</button>
    </form>
 
    <p id="error-message"></p>
 
</html>

<?php
require_once('regcheck.php');

$username = $_POST['username'];
$password =$_POST['password'];

$conn = getConnection();
$sql = "SELECT username, password FROM employee_registration WHERE username = '$username'";
$result=mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    if($username == $row['username'] && $password == $row['password']){
        header('Location: home.php');
    }
} else {
    echo "Wrong Username or Password";
}





?>