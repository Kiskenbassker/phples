<?php

/**
My experiments with http://php720.com/ lessons
*/

// Strings
//echo mb_substr("Привет это же я!!!", 7, 10);

// Arrays

$arr = array("st1"=>"Vasya", "st2"=>"Petya", "st3"=>"Grisha", "st4"=>"Vitya", "st5"=>"Kolya", "st6"=>"Serezha");
$arr1 = array("Lena", "Alina", "Maria", "Larisa", "Natasha");

$new_arr = array_slice($arr, 1, 3);

$arr_merged = array_merge($new_arr, $arr1);
print("<pre>");
print_r($arr_merged);
print("</pre>");

/*print("Unsorted:<br/>");
print("<pre>");
print_r($arr);
print("</pre>");*/

//echo(implode(", ", $arr));
//extract($arr);
//var_dump($st5);

/*echo(current($arr).'<br/>');
echo(next($arr).'<br/>');
echo(prev($arr).'<br/>');*/

/*krsort($arr);

print("Sorted:<br/>");
print("<pre>");
print_r($arr);
print("</pre>");*/

?>