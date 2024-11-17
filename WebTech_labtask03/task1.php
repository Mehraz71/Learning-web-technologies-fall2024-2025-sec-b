<?php 
echo '<h1>Hello</h1>';


function area ($num1,$num2){

    $area= $num1 * $num2;
    return $area;

}

echo 'Area = ', area(5,3) ,'<br>';

function perimeter($num1,$num2){
    $p= 2*($num1+$num2);
    return $p;

}
echo 'Perimeter', perimeter(5,3),'<br>';
?>
