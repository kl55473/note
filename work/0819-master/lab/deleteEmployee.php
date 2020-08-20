<?php
if(!isset($_GET["id"])){
    die("id not found");
}
$id=$_GET["id"];
if(! is_numeric($id))
    die("id not a number");

$sql=<<<multi
    delete from employee where employeeId = $id
    multi;
    require_once("connect.php");
    mysqli_query($link,$sql);
    header("location:index.php");
?>