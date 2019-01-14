<?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 8-1-2019
 * Time: 08:19
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<style>
    body {
        text-align: center;
    }
    .rood {
        border: red solid 5px;
    }
    .groen {
        border: green solid 5px;
    }
</style>
<body>
<?php
for($i = 1; $i<=9 ; $i++) {
    if ($i % 2==0) {
        $class = "class ='rood'";
    }
    else {
        $class = "class ='groen'";
    }
    echo "<img ".$class."src='img/aap".$i.".jpg'>";
}
?>

</body>
</html>
