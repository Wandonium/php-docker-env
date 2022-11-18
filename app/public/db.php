<?php
$pdo = new PDO('mysql:dbname=kwta;host=mysql', 'kwta_user', 'kwta@123', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];