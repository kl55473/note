<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    .mystyle {
        color: red;
    }
</style>
<?php
    $scorelist = array(100,90,80,70,33);
?>
    <ul>
    <?php for($i=1;$i<=3;$i++){?>
        <li><?= $i?></li>
    <?php } ?>
    </ul>

    <hr>
    <ul>
        <?php
            for($i=1;$i<=3;$i++){
                echo "<li>$i</li>";
            }
        ?>
    </ul>

    <hr>
    <ul>
        <?php foreach($scorelist as $key => $score){ if($score>=60){?>
            <li><?= $key, "=>", $score?></li>
        <?php } else{ ?>
        <li class="mystyle"><?= $key, "=>", $score?></li>
        <?php } }?>
    </ul>

    <hr>
    <ul>
        <?php foreach($scorelist as $score){?>
            <li class = "<?= ( ($score <60) ? "mystyle" : "") ?>"> 
            <?= $score?>
            </li>
        <?php }?>
    </ul>
</body>
</html>