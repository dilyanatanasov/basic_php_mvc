<?php
require_once "navigation.php";

if (isset($data) && !empty($data)) {
    switch ($_GET["action"]) {
        case "listALl":
            require_once "html/user/userList.php";
            break;
        case "update":
            require_once "html/user/userUpdate.php";
            break;
        default:
            require_once "html/user/userList.php";
            break;
    }
}

require_once "footer.php";
?>
