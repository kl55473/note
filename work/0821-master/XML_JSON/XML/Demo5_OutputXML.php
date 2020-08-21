<?php
$doc = new DOMDocument();
$doc->load("employees.xml");

header("Content-type: text/xml", true);
echo $doc->saveXML();//將内部xml文檔放入一个字符串
?>
