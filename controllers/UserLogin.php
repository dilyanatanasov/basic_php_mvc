<?php

class UserLogin
{
    public static function Authenticate(): bool {
        if (!empty($_POST)) {
            if (!empty($_POST["username"]) && !empty($_POST["password"])) {
                if ($_POST["username"] === "dilyan" && $_POST["password"] === "1234") {
                    $_SESSION["uid"] = 1;
                    return true;
                }
            }
            if (!empty($_POST["logout"])) {
                $_SESSION = [];
                session_destroy();
                return false;
            }
            return false;
        } else {
            return false;
        }
    }

    public static function isAuthenticated(): bool {
        return (isset($_SESSION) && !empty($_SESSION) && $_SESSION["uid"]);
    }
}