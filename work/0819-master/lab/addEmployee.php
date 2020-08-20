<?php
    if(isset($_POST["okButton"])){
        $firstName=$_POST["firstName"];
        $lastName=$_POST["lastName"];
        $cityId=$_POST["cityId"];
        $sql=<<<multi
        insert into employee(firstName,lastName,cityId) values ('$firstName','$lastName','$cityId')
        multi;
        //echo $sql;
        require_once("connect.php");
        mysqli_query($link,$sql);
        header("location:index.php");
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
        <form method="POST">
            <div class="form-group row">
                <label for="firstName" class="col-4 col-form-label">firstName</label> 
                <div class="col-8">
                    <input id="firstName" name="firstName" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastName" class="col-4 col-form-label">lastName</label> 
                <div class="col-8">
                    <input id="lastName" name="lastName" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">City</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="cityId" id="City_0" type="radio" class="custom-control-input" value="2"> 
                        <label for="City_0" class="custom-control-label">Taipei</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="cityId" id="City_1" type="radio" class="custom-control-input" value="4"> 
                        <label for="City_1" class="custom-control-label">TaiChung</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="cityId" id="City_2" type="radio" class="custom-control-input" value="6"> 
                        <label for="City_2" class="custom-control-label">TaiNan</label>
                    </div>
                </div>
             </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="okButton" type="submit" value="OK" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>