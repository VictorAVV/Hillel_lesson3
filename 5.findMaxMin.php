<?php
//Написать пользовательскую функцию определения минимального и максимального числа среди чисел: 4, -2, 5, 19, -130, 0, 10. 
  
$myArray = [4, -2, 5, 19, -130, 0, 10];
//$myArray = [10];

echo 'max($myArray) ='.json_encode(max($myArray)).PHP_EOL;
echo 'min($myArray) ='.json_encode(min($myArray)).PHP_EOL;

function countArray($arr) {
    
    if (!is_array($arr)) {
        return null;
    }
    if (empty($arr)) {
        return 0;
    }
    
    $count = 0;
    foreach ($arr as $value) {
        $count++;
    }
    return $count;
}

function maxminElementInArray($arr){
    
    $count = countArray($arr);

    if ($count === null || $count === 0) {
        return null;
    }
    if ($count === 1) {
        $max = array_shift($arr);
        return array('max' => $max, 'min' => $max);
    }

    $max = $min = array_shift($arr);
   
    for ($i = 1; $i < $count-1; $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        } elseif ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }

    /* для ассоциативных массивов:
    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        } elseif ($value < $min) {
            $min = $value;
        }
    }*/
    
    return array('max' => $max, 'min' => $min);
}

echo 'Number of elements in array = '.countArray($myArray).PHP_EOL ;
echo 'Max and min elements in array = '.json_encode(maxminElementInArray($myArray)).PHP_EOL ;

?>