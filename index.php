<?php

// Task 1: Looping with Increment using a Function
function evenNumber($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

evenNumber(2, 20, 2);
echo PHP_EOL;

function evenNumberWhileLoop ($start,$end,$step){
    $i = $start;
    while ($i<=$end){
        if($i%2==0){
            echo $i . " ";
            $i +=$step;
        }
    }
}
evenNumberWhileLoop (2, 20, 2);
echo PHP_EOL;

function evenNumberDoWhileLoop ($start,$end,$step){
    $i = $start;
    do {
        if ($i % 2 == 0){
            echo $i . " ";
        }
        $i += $step ;
    }
    while ($i <= $end);
}

evenNumberDoWhileLoop(2, 20, 2);
echo PHP_EOL;

// Task 2: Skip Multiples of 5 
function numberPrint (){
    for ( $number=1 ; $number <=50 ; $number ++) {
        if ($number == 5 ){
            continue ;
        } 
        echo $number. " " ;
    }
}
numberPrint ();
echo PHP_EOL;
// Task 3: Break on Condition

function fiboNumberPrint (){
    $num1 = 0;
    $num2 = 1 ;
    for ( $number=1 ; $number <=10 ; $number ++) {
        echo $num1. " " ;
        $num = $num1 + $num2 ;
        if ($number >100 ){
          break ;
        } 
        $num1 = $num2;
        $num2 = $num;
    }
}
fiboNumberPrint ();
// Task 4: Fibonacci Series printing using a Function
echo PHP_EOL;
echo PHP_EOL;
function fiboPrint ($end){
    $num1 = 0;
    $num2 = 1 ;
    for ( $number=1 ; $number <=$end ; $number ++) {
        echo $num1. " " ;
        $num = $num1 + $num2 ;
        // if ($number >100 ){
        //   break ;
        // } 
        $num1 = $num2;
        $num2 = $num;
    }
}
fiboPrint (15);