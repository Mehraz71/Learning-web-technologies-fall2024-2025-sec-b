<?php


session_start();

function getConnection(){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'employee');
  
    return $conn;
}

if ( isset($_POST['submit'])) {

    $empname = $_POST['empname'];
    $contactno = $_POST['contactno'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($empname) && !empty($contactno) && !empty($username) && !empty($password) ){
        $conn = getConnection();
        $sql =" INSERT INTO employee_registration (employee_name, contact_no, username, password) VALUES ('$empname','$contactno','$username','$password')";
      
        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }


    }




}






?>