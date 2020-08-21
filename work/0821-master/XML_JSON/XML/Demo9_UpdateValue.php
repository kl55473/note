<?php
$xmlString = '<employees>
                   <employee EmpType="SalesManager">
                     <lastName>Cashman</lastName>
                     <firstName>Briant</firstName>
                   </employee>
                 </employees>';
$doc = new DOMDocument();
$doc->preserveWhiteSpace=false;//設定選項是否保留泛空白字元
$doc->loadXML($xmlString);
$root = $doc->documentElement;
$root->setAttribute("id", "001");

$xpath = new DOMXPath($doc);
$entries = $xpath -> query("/employees/employee[1]");
$entries[0] -> setAttribute("id","001");

$entries = $xpath -> query("/employees/employee[1]/lastName");
$entries[0] ->nodeValue = "Cashman 2";

$entries = $xpath -> query("/employees/employee[1]/@id");//以１為開始
$entries[0] ->nodeValue = "002";//以０開始

//刪除節點
$entries = $xpath -> query("/employees/employee[1]/firstName");
$entries[0] ->parentNode->removeChild($entries[0]);



header("Content-type: text/xml", true);
echo $doc->saveXML();

?>
