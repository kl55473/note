<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：","<br>";
foreach ($season as $key => $value){
	echo $key, "=>", $value, "<br>";
}//編號型陣列

?>