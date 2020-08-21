<?php
$doc = new DOMDocument();
$doc->load("employees.xml");
$doc->save("/Applications/MAMP/htdocs/0821-master/XML_JSON/XML/employees_bak.xml");//將xml另存建立在哪裡
echo "<br>-- Done --";
?>
