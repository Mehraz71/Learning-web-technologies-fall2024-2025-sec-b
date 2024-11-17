<?php

$rows = 3;


$number = 1; 
$char = 'A'; 


for ($i = 1; $i <= $rows; $i++) {
 
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    

    for ($k = $i; $k < $rows; $k++) {
        echo "  "; 
    }

  
    for ($n = 1; $n <= $i; $n++) {
        echo $number . " ";  
        $number++; 
    }

    
    for ($l = 1; $l <= $i; $l++) {
        echo $char . " ";  
        $char++;  
    }

   
    echo "<br>";
}
?>
