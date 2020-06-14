<?php
$dbhost = "localhost";
$dbname = "dbalbum";
$dbuser = "root";
$dbpass = "";

$koneksi = new PDO("mysql:host=" . $dbhost ."; dbname=" . $dbname."", $dbuser , $dbpass);