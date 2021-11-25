<?php
    $dbuser = "root";
    $dbpass = "";
    error_reporting(0);
    $connection = new PDO('mysql:host=localhost;dbname=secure_coding', $dbuser, $dbpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>