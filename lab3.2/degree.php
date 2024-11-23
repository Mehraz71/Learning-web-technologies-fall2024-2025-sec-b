<?php
if (isset($_POST['submit'])) {
    
    if (empty($_POST['degree'])) {
        echo "No degree was selected.";
    } else {
        $degrees = $_POST['degree']; 

  
        if (count($degrees) < 2) {
            echo "At least two degrees must be selected.";
        } else {
            echo "Selected degrees are: " . implode(", ", $degrees);
        }
    }
}
?>
