<?php
session_start();

if (isset($_POST['submit'])) {
  
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $pass = trim($_POST['pass']);
    $cpass = trim($_POST['cpass']);
    $usertype = $_POST['usertype'];

    
    if (!empty($id) && !empty($name) && !empty($pass) && !empty($cpass) && !empty($usertype)) {
        
        if ($pass == $cpass) {
            
            $_SESSION['user_data'] = [
                'ID' => $id,
                'Name' => $name,
                'Pass' => $pass,
                'Usertype' => $usertype,
            ];
            $_SESSION['xyz'] = true;

            
            echo "<h1>Registration Success!</h1>";
            echo "<a href='login.php'>Next</a>";  

            
            $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
            $txt = "ID: " . $id . "\n" . "Name: " . $name . "\n" . "User Type: " . $usertype . "\n";
            fwrite($myfile, $txt);
            fclose($myfile);

            
        } else {
        
            echo "Error: The passwords do not match. Please try again.";
        }
    } else {
      
        echo "All fields are required.";
    }
}
?>
