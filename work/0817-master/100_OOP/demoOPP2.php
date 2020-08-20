<?php

class CTest{
    public $Price = 100;
    public $dataBag;

    public function __set($k,$v){//當要設定沒宣告的變數時會跑
        echo "_set be called.<br>";
        $this -> dataBag = $k;
    }

    public function __get($k){//當要讀取沒宣告的變數時會跑
        echo "_get be called.<br>";
        return $this-> databag = $k;
    }

}
$obj = new CTest();
echo $obj -> Price ."<br>";
$obj -> location="Taipei";//當要設定沒宣告的變數時會跑
echo $obj -> location . "<br>";//當要讀取沒宣告的變數時會跑
?>