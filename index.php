<?php

class Box {
    public static $count = 0;
    public $id;
    public function __construct(){
        $this->id = self::$count++;
    }   
    public static function setCount(){
        //var_dump($this->id);
        var_dump(static::$count);
    }
 }
class MetalBox extends Box{

}
MetalBox::name();

?>

