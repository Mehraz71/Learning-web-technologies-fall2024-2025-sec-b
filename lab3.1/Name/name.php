<?php
    session_start();

    if(isset($_POST['submit'])){
        $name=$_POST['username'];
        if(!empty($name)){
            echo "<h1>$name</h1>";
        }
        else{
            echo "Enter Username ";
        }

     
       

    }
    
?>