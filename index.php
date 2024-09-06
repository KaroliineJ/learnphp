<?php

class Box {
    public function __construct(){
    echo "Box was created\n";
    }
    public function __set($name){
        return 'cool value';

    }
    public function __set($name, $value){
        var_dump($name, $value);

    }
    public function __destruct(){
        echo "Box was destroyed\n";
    }
    public function __invoke(...$args){
        var_dump($args);
    }
}



$box = new Box();
$box->name = 'karoliine';
var_dump($box->);
var_dump($box);



?>

