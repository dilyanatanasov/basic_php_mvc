<?php
require_once "navigation.php";
?>

    <header>
        <p>Welcome <?php if (isset($_SESSION) && !empty($_SESSION)) echo $_SESSION["full_name"];?></p>
    </header>

<?php
require_once "footer.php";
?>