<?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 21-1-2019
 * Time: 08:52
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dynamische Website</title>
</head>
<body>
<style>
    input{
        margin:0.2% 90% 0.5% 0%;
    }
</style>
<form action="op1.php" method="post">
    Name: <input required type="text" name="name"><br>
    E-mail: <input required type="text" name="email"><br>
    Wachtwoord <input required type="password" name="wachtwoord"><br>
    Adres <input required type="text" name="adres"><br>
    <input type="submit" value="Verzend"><br>
<?php
$name = ($_POST["name"]);
$email = ($_POST["email"]);
$wachtwoord = strlen($_POST["wachtwoord"]);
$adres = ($_POST["adres"]);
$a = false;
if($name == "" || $name == " "){
    $a = false;
} else {
    $a = true;
}
if($a = true) {
    echo "Hallo " . $name . "<br>";
    echo "Uw email is: " . $email . "<br>";
    echo "Uw wachtwoord is " . $wachtwoord . " cijfers lang.<br>";
    echo "Uw adres" . $adres;
} else {
    $a = false;
}
?>
</form>
</body>
</html>