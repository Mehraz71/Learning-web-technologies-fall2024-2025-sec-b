//task03
<?php

function oddeven ($number){

if ($number % 2 == 0) {
    echo $number.'  The Number is even <br>';
}
else{
    echo $number.'  The number is odd <br>';

}

}
$input=7;
oddeven($input);



?>