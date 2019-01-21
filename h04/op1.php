<?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 15-1-2019
 * Time: 08:39
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Functies</title>
</head>
<body>
<style>
    input{
        margin-right:89.6%;
        padding:0px;
        float:right;

    }
    #submit {
        margin-top:1%;
    }
</style>
<form action="op1.php" method="post">
    Celcius naar Fahrenheit<input type="text" name="waarde"><br>
    <?php //celcius/Fahrenheit
    $c = $_POST["waarde"];
    if($c==""){
        $a=false;
    } else {
        $a=true;
    }
    if($a==true) {
        $f = ($c * 9 / 5) + 32;
        echo $c . " °C = " . $f . " °F<br><br>";
    }
    ?>
    Is het deelbaar door 3?<input type="text" name="getal"><br>
    <?php //is het getal deelbaar door 3
    $getal = $_POST["getal"];
    if($getal==""){
        $b=false;
    } else {
        $b=true;
    }
    if($b == true) {
        $deelbaardoor = 3;
        if ($getal % $deelbaardoor == 0) {
            echo $getal . " is deelbaar door " . $deelbaardoor . ".<br><br>";
        } else {
            echo $getal . " is niet deelbaar door " . $deelbaardoor . ".<br><br>";
        }
    }
    ?>
    Tekst omgekeerd<input type="text" name="tekst"><br>
    <?php //tekst is omgekeerd
    $tekst = ($_POST["tekst"]);
    if($tekst=="") {
        $d=false;
    } else {
        $d=true;
    }
    if($d==true) {
        echo strrev($tekst);
        echo "<br><br>";
    }
    ?>
    <input id ="submit" type="submit" value="Bereken">
</form>
</body>
</html>
