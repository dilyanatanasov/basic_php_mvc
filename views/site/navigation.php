<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="<?php echo APPLICATION_PATH?>views/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo APPLICATION_PATH?>views/js/comments.js">
    <link rel="stylesheet" type="text/css" href="<?php echo APPLICATION_PATH?>views/js/postData.js">
    <link rel="stylesheet" type="text/css" href="<?php echo APPLICATION_PATH?>views/js/sendRequestForComment.js">
</head>
<body>
<nav>
    <ul>
        <section class="logo">
            <a href="<?php echo APPLICATION_PATH?>index.php"><h1>rate me</h1></a>
        </section>
        <li><a href="<?php echo APPLICATION_PATH?>index.php?controller=movies&action=listAll">Movies</a></li>
        <li><a href="<?php echo APPLICATION_PATH?>index.php?controller=movies&action=create">Create</a></li>
        <li><a href="<?php echo APPLICATION_PATH?>index.php?controller=user&action=listAll">Users</a></li>
        <?php
        echo "<li>
                    <form action='" . APPLICATION_PATH . "index.php?login=true' method='post'>
                        <input type='submit' value='";
        echo (!empty($_SESSION["uid"])) ? "Logout" : "Login";
        echo "'>
                    </form>
                </li>";
        ?>
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
