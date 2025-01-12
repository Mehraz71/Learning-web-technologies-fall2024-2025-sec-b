<?php
require_once('regcheck.php');
session_start();
$conn = getConnection();

?>

<html>
<html>
<head>
    
    <title>Update</title>
</head>
<body><form>
    <h1>Enter ID To Search Employee</h1>
    <input type="number" name="id">

    <input type="submit" name="submit" value="Search">

</form>
    
</body>
</html>
<?php
$id =$_POST['id'];

$conn = getConnection();
$sql = "SELECT * FROM employee_registration WHERE employee_ID = '$id'";
$result=mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    echo "Username: " . $row['username'];
    
} else {
    echo "Wrong Username or Password";
}

?>