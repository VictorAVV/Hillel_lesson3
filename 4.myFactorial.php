<?php
//Написать пользовательскую функцию вычисления факториала числа.

$myNumber = 10;

function factorial($number) {
    
    if (!is_int($number) || $number < 0) {
        return null;
    }
    
    if ($number == 0 || $number == 1) {
        return 1;
    } 
    if ($number == 2) {
        return 2;
    }
    
    $factorial = 2;
    for ($i = 3; $i <= $number; $i++){
        $factorial *= $i;
    }
    
    return $factorial;
}

if (($myFibonaci = factorial($myNumber)) == null) {
    echo "Please, enter correct number!";
} elseif ($myFibonaci == INF) {
    echo "Factorial of the number $myNumber is too large. Please, enter a smaller number!";
} else {
    echo "Factorial: $myNumber! = ".number_format($myFibonaci, 0, ',', ' ') ;
}

?>