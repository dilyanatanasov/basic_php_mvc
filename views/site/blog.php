<?php
require_once "navigation.php";
?>
    <header>
        <p>Blog</p>
    </header>
        <?php
        if (isset($data)) echo $data->username
        ?>
<?php
require_once "footer.php";
?>