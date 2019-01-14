<?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 8-1-2019
 * Time: 08:20
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Busreis</title>
    <style>
        body {
            text-align:center;
        }
    </style>
</head>
<body>
<?php
$bedrag = 10;
$leeftijd = 10;
if($leeftijd>65){
    $bedrag = $bedrag *0.5;
}
if($leeftijd<=12) {
    $bedrag = $bedrag * 0.5;
}
if($leeftijd<3){
    $bedrag = 0;
}
echo "U bent ",$leeftijd," jaar oud<br>";
echo "Het bedrag is: ", $bedrag, " euro";
?>
<br><br>
<?php
$bedrag = 10;
$leeftijd = 2;
if($leeftijd>65){
    $bedrag = $bedrag *0.5;
}
if($leeftijd<=12) {
    $bedrag = $bedrag * 0.5;
}
if($leeftijd<3){
    $bedrag = 0;
}
echo "U bent ",$leeftijd," jaar oud<br>";
echo "Het bedrag is: ", $bedrag, " euro";
?>
<br><br>
<?php
$bedrag = 10;
$leeftijd = 65;
if($leeftijd>65){
    $bedrag = $bedrag *0.5;
}
if($leeftijd<=12) {
    $bedrag = $bedrag * 0.5;
}
if($leeftijd<3){
    $bedrag = 2;
}
echo "U bent ",$leeftijd," jaar oud<br>";
echo "Het bedrag is: ", $bedrag, " euro";
?>
<br><br>
<?php
$bedrag = 10;
$leeftijd = 12;
if($leeftijd>65){
    $bedrag = $bedrag *0.5;
}
if($leeftijd<=12) {
    $bedrag = $bedrag * 0.5;
}
if($leeftijd<3){
    $bedrag = 2;
}
echo "U bent ",$leeftijd," jaar oud<br>";
echo "Het bedrag is: ", $bedrag, " euro";
?>
</body>
</html>




















