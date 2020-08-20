<?php


$s = "0123456789";
$pos=strpos($s,"12");
echo $pos;

if($pos !== false){ //！＝＝ 形態和內容都不同
    echo "found: $pos";
}
else{
    echo "not found";
}
?>