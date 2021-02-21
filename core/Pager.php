<?php

class Pager
{
    public static function load(?string $page = "welcome")
    {
        $controller = false;
        if (!empty($_GET)) {
            if (!empty($_GET["controller"])) {
                switch ($_GET["controller"]) {
                    case "blog":
                        $page = "blog";
                        $controller = new BlogController();
                        break;
                    default:
                        $page = "404";
                        break;
                }
            }

            $data = "";
            if (!empty($_GET["action"])) {
                $name = $_GET["action"];
                switch ($_GET["action"]) {
                    case "get":
                        $data = $controller->$name();
                        break;
                    default:
                        break;
                }
            }
        }
        return require_once VIEW_PATH . $page . ".php";
    }

    public static function loadDefault($page = "login") {
        return require_once VIEW_PATH . $page . ".php";
    }
}