<?php

function largestNumber($num1,$num2,$num3){
    if ($num1 >= $num2 && $num1 >= $num3 ){
        echo $num1.'is the largest number ';
    }

    else if ($num2 >= $num1 && $num2 >=$num3){
    echo ' '.$num2.' is the largest';}

    else {
        echo ' '.$num3.' is the largest ';
    }

    }


echo 'Check the largest number :',largestNumber(1,20,5);

?>