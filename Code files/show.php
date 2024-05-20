<?php

$pdo = new PDO("mysql:host = localhost; dbname=portal", "root","");
$sql = "SELECT * FROM student";
$stmt = $pdo->query($sql);
$data = $stmt->fetchAll();
?>