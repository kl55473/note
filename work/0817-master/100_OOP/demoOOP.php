<?php

class Animal{
    public $weight = 1;
    public function __construct($weightvalue = 1){
        $this -> weight = $weightvalue;
        echo "Object create <br>";
    }
    public function __destruct(){
        echo "Object destoty <br>";
    }
    public function makeNoise(){
        echo "Animal:...<br>";
    }
}

echo "FLAG1 <br>";
$obj = new Animal();
echo "FLAG2 <br>";
$obj -> makeNoise();
//$obj -> weight = 10;
echo $obj -> weight,"<br>";
$obj -> location="Taipei <br>";
echo $obj -> location;
$obj2=$obj;
$obj = null;
echo "flag3 <br>";
$obj2 = null;
echo "flag4 <br>";
?>