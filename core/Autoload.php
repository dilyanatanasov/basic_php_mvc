<?php

function autoload($class_name)
{
    require_once "controllers/UserLogin.php";
    require_once "configs/const.php";
    require_once "core/Pager.php";
    require_once "core/Router.php";

    if (preg_match('/Controller$/', $class_name)) {
        $folder = CONTROLLERS_PATH;
    } elseif (preg_match('/Model$/', $class_name)) {
        $folder = MODEL_PATH;
    } elseif (preg_match('/View$/', $class_name)) {
        $folder = VIEW_PATH;
    }

    if (!empty($folder)) {
        if (file_exists($folder . $class_name . '.php')) {
            require_once $folder . $class_name . '.php';
            return true;
        }
    }
}

class Autoload
{
    public static function run($class_name)
    {
        require_once "controllers/UserLogin.php";
        require_once "configs/const.php";
        require_once "core/Pager.php";
        require_once "core/Router.php";

        if (preg_match('/Controller$/', $class_name)) {
            $folder = CONTROLLERS_PATH;
        } elseif (preg_match('/Model$/', $class_name)) {
            $folder = MODEL_PATH;
        } elseif (preg_match('/View$/', $class_name)) {
            $folder = VIEW_PATH;
        }

        if (!empty($folder)) {
            if (file_exists($folder . $class_name . '.php')) {
                require_once $folder . $class_name . '.php';
                return true;
            }
        }
    }
}