<?php

$pdo = new PDO("mysql:host = localhost; dbname=portal", "root","");

$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo "Connection Done!";

?>