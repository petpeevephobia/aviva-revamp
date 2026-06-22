<?php
session_start();
if (isset($_GET['lang'])) {
    // Whitelist allowed languages to be safe
    $allowed = ['en', 'de'];
    if (in_array($_GET['lang'], $allowed)) {
        $_SESSION['lang'] = $_GET['lang'];
        // You can echo something back to debug
        echo "Language updated to: " . $_SESSION['lang'];
    }
}
?>