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



//task02 vat task

function vat ($price){
    $vat = $price * 0.15;
    $PriceWithVat = $vat+$price;
    return $PriceWithVat;

}
$price = 100;
echo 'Price = ',$price,'TK','<br>';
echo 'Price with VAT = ',vat(100),'<br>';


//task03
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