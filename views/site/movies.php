<?php
require_once "navigation.php";

if (isset($data) && !empty($data)) {
    switch ($_GET["action"]) {
        case "listALl":
            require_once "html/movieList.php";
            break;
        case "view":
            require_once "html/movieView.php";
            break;
        case "create":
            require_once "html/movieCreate.php";
            break;
        case "update":
            require_once "html/movieUpdate.php";
            break;
        case "delete":
            require_once "html/movieDelete.php";
            break;
        default:
            require_once "html/movieList.php";
            break;
    }
}

require_once "footer.php";
?>
