<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

   
    $errors = [];

   
    if (empty($day) || $day < 1 || $day > 31) {
        $errors[] = "Day must be between 1 and 31.";
    }


    if (empty($month) || $month < 1 || $month > 12) {
        $errors[] = "Month must be between 1 and 12.";
    }

    
    if (empty($year) || $year < 1953 || $year > 1998) {
        $errors[] = "Year must be between 1953 and 1998.";
    }

    if (empty($errors)) {
      
        echo "Date of Birth is valid: $day/$month/$year";
    } else {
        
        echo "The following errors occurred:<br>";
        foreach ($errors as $error) {
            echo "- $error<br>";
        }
    }
} else {
    
    echo "Please submit the form.";
}
?>
