<?php
if (!isset($_SESSION['auth'])) {
    header('Location: /login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/favicon.png">
    <title>COSC 4806</title>
    <link rel="stylesheet" href="/public/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="nav-left">
                <a class="nav-brand" href="/home">COSC 4806</a>
            </div>
            <div class="nav-right">
                <a href="/home">Home</a>
                <a href="/about">About Me</a>
                <a href="#" style="pointer-events: none; opacity: 0.5;">Disabled</a>
            </div>
        </div>
    </nav>
