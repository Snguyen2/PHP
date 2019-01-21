<?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 21-1-2019
 * Time: 08:55
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Beasties</title>
</head>
<body>
<style>
    p{
        font-weight:bold;
    }
    #submit {
        margin: 0.4% 0 0 0.2%;

    }
    .Aa {
        float:right;
    }
    img{
        height:210px;
        width:210px;
        padding: 10px 10px 0 0;
    }
</style>
<p>Dieren! </p>
<form action="op2.php" method="post">
    <input type="checkbox" name="Hond">Hond<br>
    <input type="checkbox" name="Kat">Kat<br>
    <input type="checkbox" name="Aap">Aap<br>
    <input type="checkbox" name="Vis">Vis<br>
    <input type="checkbox" name="Beer">Beer<br>
    <input type="checkbox" name="Cavia">Cavia<br>
    <input type="checkbox" name="Paard">Paard<br>
    <input type="checkbox" name="Stier">Stier<br>
    <input type="checkbox" name="Koe">Koe<br>
    <input type="checkbox" name="Ezel">Ezel<br>
    <input type="checkbox" name="Kip">Kip<br>
    <input type="checkbox" name="Draak">Draak<br>
    <input type="checkbox" name="Alles">Alles<br>

    <input type="submit" value="Submit" id="submit"><br><br>
</form>
<?php
$hond = $_POST["Hond"];
$kat = $_POST["Kat"];
$aap = $_POST["Aap"];
$vis = $_POST["Vis"];
$beer = $_POST["Beer"];
$cavia = $_POST["Cavia"];
$paard = $_POST["Paard"];
$stier = $_POST["Stier"];
$koe = $_POST["Koe"];
$ezel = $_POST["Ezel"];
$kip = $_POST["Kip"];
$draak = $_POST["Draak"];
$alles = $_POST["Alles"];

if($hond == on){
    echo '<img src="img/hond.jpg">';//
    $hond = "";
}
if($kat == on) {
    echo '<img src="img/kat.jpg">';
    $kat = "";
}
if($aap == on){
    echo '<img src="img/aap.jpg">';
    $aap = "";
}
if($vis == on){
    echo '<img src="img/vis.jpg">';
    $vis = "";
}
if($beer == on){
    echo '<img src="img/beer.jpg">';
    $beer = "";
}
if($cavia == on){
    echo '<img src="img/cavia.jpg">';
    $cavia = "";
}
if($paard == on){
    echo '<img src="img/paard.jpg">';
    $paard = "";
}
if($stier == on){
    echo '<img src="img/stier.jpg">';
    $stier = "";
}
if($koe == on){
    echo '<img src="img/koe.jpg">';
    $koe = "";
}
if($ezel == on){
    echo '<img src="img/ezel.jpg">';
    $ezel = "";
}
if($kip == on){
    echo '<img src="img/kip.jpg">';
    $kip = "";
}
if($draak == on){
    echo '<img src="img/draak.jpg">';
    $draak = "";
}
if($alles == on){
echo '<img src="img/hond.jpg">','<img src="img/kat.jpg">','<img src="img/aap.jpg">','<img src="img/vis.jpg">','<img src="img/beer.jpg">','<img src="img/cavia.jpg">',
'<img src="img/paard.jpg">','<img src="img/stier.jpg">','<img src="img/koe.jpg">','<img src="img/ezel.jpg">','<img src="img/kip.jpg">','<img src="img/draak.jpg">';
$alles = ""; }
?>
</body>
</html>
