<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

require_once __DIR__ . "/../includes/common.php";

$dbh = new PDO("pgsql:host=db"); 
print_r($dbh);
