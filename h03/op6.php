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
    <title>Zwemclub</title>
    <style>
        *{
            maring:0;
        }
        td,table{
            width:20%;
            border:solid black 1px;
            font-size:16px;
        }
        .a {
            background-color:#a0a0ff;
        }
    </style>
</head>
<body>
<table>
    <?php
    $ledenaantal = array(25,32,11,23);

    $ledenaantal[0];
    $ledenaantal[1];
    $ledenaantal[2];
    $ledenaantal[3];

    echo "<tr><td class='a'>De spartelkuikens</td><td>$ledenaantal[0]</td></tr>";
    echo "<tr><td class='a'>De waterbuffels</td><td>$ledenaantal[1]</td></tr>";
    echo "<tr><td class='a'>Plonsmderin</td><td>$ledenaantal[2]</td></tr>";
    echo "<tr><td class='a'>Bommetje</td><td>$ledenaantal[3]</td></tr>";
    ?>
</table>
</body>
</html>

