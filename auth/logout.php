<?php
require_once __DIR__ . "/../autoload.php";
session_destroy();

header("Location: " . APP_URL . "/patients/dashboard.php");