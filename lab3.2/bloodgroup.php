<?php
if (isset($_POST['submit'])) {
    $bg = $_POST['bloodgroup']; 


    if (empty($bg)) {
        echo "Blood group must be selected.";
    } else {
        echo "Selected Blood Group: " . $bg;
    }
}
?>
