<?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 23-1-2019
 * Time: 09:58
 */

$user = "database";
$pass = "school";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=database;port=8889', $user, $pass);
    foreach ($dbh->query('SELECT * from cursist') as $row) {
    }
    $db = null;
}  catch (PDOException $e) {
        print "ERROR!: " . $e->getMessage() . "<br/>";
        die();
    }
    ?>