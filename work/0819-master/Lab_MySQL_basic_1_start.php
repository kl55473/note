<?php
header("content-type:text/html; charset=utf-8");

// 0. 請先建立 Class 資料庫 （SetupDB/setup_class.txt）


// 1. 連接資料庫伺服器
 $link = @mysqli_connect("localhost", "root", "root" , "class",8889) or die(mysqli_connection_error());
// var_dump($link);
//print_r($link);
  $result = mysqli_query($link, "set names utf8");
// mysqli_select_db($link, "class");//選擇的資料庫

// 2. 執行 SQL 敘述
$commandText = "select * from students";
$result = mysqli_query($link, $commandText);
//var_dump($result);

// $row = mysqli_fetch_assoc($result);
// $row = mysqli_fetch_assoc($result);
// $row = mysqli_fetch_assoc($result);
// var_dump($row);
// 3. 處理查詢結果
while ($row = mysqli_fetch_assoc($result))//一次抓一行資料
{
  echo "ID：{$row['cID']}<br>"; //陣列要加大括號
  echo "Name：{$row['cName']}<br>";
  echo "<HR>";
}

// 4. 結束連線
// mysqli_close($link);

echo "<br />-- Done --";
?>
