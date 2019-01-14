<?php
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
    <title>PHP</title>
</head>
<body>
<?php
//for($i = 1; $i<=10 ; $i++) {
//   echo "<img src='img/aap".$i.".jpg'>";
//}

$bomen = array("img_0050.jpg", "lillypilly1.jpg", "Maranchery_Biyyam_Kayal_kandal.jpg");

foreach($bomen as $boom) {
    echo "<img src='img/bomen/".$boom."'>";
}

?>

</body>
</html>

