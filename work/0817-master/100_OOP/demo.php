<?php

class CTest{
    static function hello(){
        echo "Hello!";
    }
}
//static 成員屬於類別，可以使用類別名稱加上 :: 解析運算子來存取

CTest::hello();//::可用來識別及區分不同範圍中使用的識別碼

// $obj=new CTest();
// $obj->hello();
?>