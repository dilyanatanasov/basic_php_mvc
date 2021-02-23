<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="/mvc/views/css/main.css">
</head>
<body>
<nav>
    <ul>
        <section class="logo">
            <a href="/mvc/index.php"><h1>ikt</h1></a>
        </section>
        <li><a href="/mvc/index.php?controller=blog">Blog</a></li>
        <li><a href="/mvc/index.php?controller=about">About</a></li>
        <li>
            <form action="/mvc/index.php" method="post">
                <input type="submit" value="Logout" name="logout">
            </form>
        </li>
    </ul>
</nav>
<main>
    <section class="cover">
        <section class="spinner">
            <span class="dot1"></span>
            <span class="dot2"></span>
        </section>
    </section>
    <section class="content">
