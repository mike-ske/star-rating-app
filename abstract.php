<?php

// AN array of 
$arr = ['4', 'd', '4', '2', '1', 'd', '5', '3', '2'];

$resultArr = ['4' => 2, 'd' => 2, '2' => 2, '1' => 1, '5' => 1, '3' => 1 ];

// get array elemnts
$arr2 = array();
$arr2[] = asort($arr);
$arrayVal = array_count_values($arr2);



for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i] >= $arrayVal) {
       $arr1 = ;
    }
}