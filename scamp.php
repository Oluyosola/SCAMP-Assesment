<?php
function Fibonacci($number){
$firstNumber = 0;//firstNumber sets to Zero
$secondNumber = 1;//secondNumber sets to one
echo $firstNumber.' '.$secondNumber.' ';

for($i = 2; $i < $number; $i++){
 
    $thirdNumber = $firstNumber + $secondNumber;
 
    echo $thirdNumber.' ';
 
    $firstNumber = $secondNumber;
    $secondNumber = $thirdNumber;
    
 
    }
}


echo Fibonacci(15)//prints addition of 15numbers in fibonnaci sequence starting from 0 amd 1;
?>