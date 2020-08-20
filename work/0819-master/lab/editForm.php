<?php
if(isset($_POST["cancleButton"])){
    header("location:index.php");
}
if(!isset($_GET["id"])){
    die("id not found");
}
$id=$_GET["id"];
if(! is_numeric($id))
    die("id not a number");


    //echo $sql;
    require_once("connect.php");
    
    //var_dump($row);

    if(isset($_POST["okButton"])){
        $firstName=$_POST["firstName"];
        $lastName=$_POST["lastName"];
        $cityId=$_POST["cityId"];
        $sql=<<<multi
            update employee set firstName='$firstName',lastName='$lastName',cityId='$cityId' where employeeId='$id';
        multi;
        mysqli_query($link,$sql);
        header("location:index.php");
    }
    else{
        $sql=<<<multi
    select * from employee where employeeId = $id
    multi;
        $result=mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
        <form method="POST" action="editForm.php?id=<?= $row["employeeId"] ?>">
            <div class="form-group row">
                <label for="firstName" class="col-4 col-form-label">firstName</label> 
                <div class="col-8">
                    <input id="firstName" name="firstName" type="text" value="<?=$row["firstName"]?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-4 col-form-label">lastName</label> 
                <div class="col-8">
                    <input id="lastName" name="lastName" type="text" value="<?=$row["lastName"]?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">City</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="cityId" id="City_0" type="radio" class="custom-control-input" value="2"
                        <?=$row["cityId"]==2?"checked":""?> > 
                        <label for="City_0" class="custom-control-label">Taipei</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="cityId" id="City_1" type="radio" class="custom-control-input" value="4"
                        <?=$row["cityId"]==4?"checked":""?>> 
                        <label for="City_1" class="custom-control-label">TaiChung</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="cityId" id="City_2" type="radio" class="custom-control-input" value="6"
                        <?=$row["cityId"]==6?"checked":""?>> 
                        <label for="City_2" class="custom-control-label">TaiNan</label>
                    </div>
                </div>
             </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="okButton" type="submit" value="OK" class="btn btn-primary">Submit</button>
                    <button name="cancleButton" type="submit" value="CANCLE" class="btn btn-primary">Cancle</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>