<?php
if (isset($_POST['submit'])) {


$gender=($_POST['gender']);

   
    if ($gender === null) {
        echo "<h1>Please select your gender</h1>";
    } else {
        echo "<h1>Gender selected: $gender</h1>";
    }
}
?>
