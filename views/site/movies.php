<?php
require_once "navigation.php";

if (isset($data) && !empty($data)) {
    switch ($_GET["action"]) {
        case "listALl":
            require_once "html/movie/movieList.php";
            break;
        case "view":
            require_once "html/movie/movieView.php";
            break;
        case "create":
            require_once "html/movie/movieCreate.php";
            break;
        case "update":
            require_once "html/movie/movieUpdate.php";
            break;
        case "delete":
            require_once "html/movie/movieDelete.php";
            break;
        default:
            require_once "html/movie/movieList.php";
            break;
    }
}

require_once "footer.php";
?>
