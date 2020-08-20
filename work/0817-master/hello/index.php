<?php 
    // var_dump($_POST)
    session_start();
    if(isset($_POST["btnOK"])){
        $_SESSION["person"]=$_POST["txtUserName"];
        //header("location:hello.php");
        //exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="hello.php">
    Your name:
    <input type="text" name="txtUserName">
    <input type="submit" name="btnOK" value="enter">
    </form>
</body>
</html>