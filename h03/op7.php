<?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 14-1-2019
 * Time: 11:59
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kapperzaak</title>
    <style>
    </style>
</head>
<body>
<table>
    <?php
    $kappersagenda = array("9:45","10:30");
    print("De volgende momenten zijn nog beschikbaar:<ul>");
        foreach($kappersagenda as $agenda => $tijd) {
        if($afspraak == "") {
        print("<li>".$tijd."</li>");
        }
        }
?>
</table>
</body>
</html>