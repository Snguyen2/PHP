<pre><?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 7-1-2019
 * Time: 09:09
 */
?>

    <!DOCTYPE html>
<html>
<head>
<title>Kerstboom</title>
    <style>
        body {
            text-align:center;
        }
    </style>
</head>
<body>
<?php
for($i=0;$i<=9;$i++) {
    for($s =0;$s<$i;$s++) {
        echo "* ";
    }
    echo "<br>";
}
?>
</body>
</html>