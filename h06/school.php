<?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 23-1-2019
 * Time: 09:58
 */

$user = "schooluser";
$pass = "Sang12345";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school;port=3306', $user, $pass);
    foreach($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

