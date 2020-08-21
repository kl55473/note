<?php
//$scoreList=[100,95,50,90];
$scoreList=array(100,95,50,90);
$viewModel =[];
foreach($scoreList as $score){
    $student = (object)["score" => $score,"style"=>"pass"];
    if($score <60){
        $student ->style ="fail";
    }
    $viewModel[] = $student;
}

// $obj = (object)["firstNae"=>"Jeremy" , "lastName" => "Lin"];
// echo $obj->lastName;
// exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail{
            color:red;
        }
    </style>
</head>
<body>
    <ul>
    <?php foreach($viewModel as $student){?>
        <li class="<?= $student->style ?>">
            <?=$student->score?>
        </li>
    <?php }?>
    </ul>
    
</body>
</html>