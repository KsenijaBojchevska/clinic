<?php
require_once __DIR__ . "/consts.php";

function encrypt($text)
{
    return openssl_encrypt($text, "AES-128-ECB", ENCRYPTION_PASSWORD);
}

function decrypt($text)
{
    return openssl_decrypt($text, "AES-128-ECB", ENCRYPTION_PASSWORD);
}

function authOnly()
{
    if (!isset($_SESSION['email'])) {
        header("Location: " . APP_URL . "/patients/dashboard.php");
        die();
    }
}