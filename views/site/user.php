<?php
require_once "navigation.php";

if (isset($data) && !empty($data)) {
    switch ($_GET["action"]) {
        case "listALl":
            require_once "html/user/userList.php";
            break;
        default:
            require_once "html/user/userList.php";
            break;
    }
}

require_once "footer.php";
?>
