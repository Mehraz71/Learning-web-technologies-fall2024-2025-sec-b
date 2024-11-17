<?php

$array = [2,10,5,25,6,17,20,14,266];

$search = 257;

$found = false;

for ($i = 0; $i<count($array); $i++){

if ($array[$i] == $search){
    echo "Element $search found at index $i.<br>";
    $found = true;
    break;

}


}


if (!$found) {
    echo "Element $search not found in the array.<br>";
}





?>