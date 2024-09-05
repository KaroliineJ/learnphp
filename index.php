<?php

$array = [1,2,3,4];
array_push($array, 5,6,7);
$array[] = 6;
$array[4] = 64748;
var_dump($array);

function hello($name){
    echo "hello $name\n";
}

hello('karoliine');
hello();