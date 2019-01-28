<?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 28-1-2019
 * Time: 08:43
 */
?>

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
    <title>Login Formulier</title>
    <style>
        *{
            padding: 0px 0px 0px 2px;
            margin:0.3% 0.3% 0 0.2%;
        }
        input{
            margin-bottom:0.5%;
        }
    </style>
</head>
<body>
<form action="op3.php" method="post">
    <p>E-mail</p>
    <input type="text" name="naam"><br>
    <p>Wachtwoord </p>
    <input required type="password" name="wachtwoord"><br>
    <input required type="submit" value=" Submit "><br><br>
    <?php
    $bool = false;
    $ww = $_POST["wachtwoord"];
    $naam = $_POST["naam"];
    if($naam === "piet@worldonline.nl"){
        if($ww === "doetje123"){
            $bool = true;
            echo "Welkom Piet.";
        } else {
            echo "Sorry, geen toegang!";
        }}
    else if($naam === "klaas@carpets.nl"){
        if($ww === "snoepje777"){
            $bool = true;
            echo "Welkom Klaas.";
        } else {
            echo "Sorry, geen toegang!";
        }
    }else if($naam === "truushendriks@wegweg.nl"){
        if($ww === "arkiearkie201"){
            $bool = true;
            echo "Welkom Piet.";
        } else {
            echo "Sorry, geen toegang!";
        }
    } else if ($naam === ""){
    } else {
        echo "Sorry, geen toegang!";
    }
    echo $bool;
    ?>
</form>
</body>
</html>
