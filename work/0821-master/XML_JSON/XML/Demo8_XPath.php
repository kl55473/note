<!DOCTYPE HTML>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<title>PHP Sample</title>
</head>
<body>
<?php
$doc = new DOMDocument();
$doc->Load('employees.xml');
$xpath = new DOMXPath($doc);//xml path（路徑）
$entries = $xpath->query("/employees/employee/@EmpType");//屬性:＠  query:查哪個地方
foreach ($entries as $entry) 
{
   echo "結果：" . $entry->nodeValue . "<br>";
}
?>

<!-- 
結果：Manager
結果：Sales
結果：Sales Analysist
結果：Contact
結果：Sales 
-->

</body>
</html>
