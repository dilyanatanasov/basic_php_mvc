<?php
session_start();

class Router
{
    public static function navigate() {
        UserLogin::Authenticate();
        if (UserLogin::isAuthenticated()) {
            Pager::load();
        } else {
            Pager::loadDefault();
        }
    }
}