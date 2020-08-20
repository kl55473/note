<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");
while (!feof($f))
{
	$line = fgets($f);//取一行資料
	$sData .= Trim($line) . "<br>";
}
fclose($f); //關閉檔案
echo $sData;

?>
