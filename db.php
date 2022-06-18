<?php

require_once __DIR__ . "/consts.php";

try {
    $pdo = new PDO("mysql:host=localhost; dbname=clinic;", "root", "");
} catch (PDOException $e) {
    header("Location: dashboard.php");
    die();
}