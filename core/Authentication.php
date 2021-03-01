<?php

class Authentication
{
    public static function login(): bool {
        if (!empty($_GET["login"]) && $_GET["login"] === "true") {
            $_SESSION = [];
            session_destroy();
            return true;
        } else {
            return false;
        }
    }

    public static function authenticate(): bool {
        if (!empty($_POST)) {
            if (!empty($_POST["username"]) && !empty($_POST["password"])) {
                if ($_POST["username"] === "dilyan" && $_POST["password"] === "1234") {
                    $_SESSION["uid"] = 1;
                    return true;
                }
            }
            return false;
        } else {
            return false;
        }
    }

    public static function register(): bool {
        if (!empty($_GET["register"]) && $_GET["register"] === "true") {
            return true;
        } else {
            return false;
        }
    }
}