<?php
session_start();

class Router
{
    public static function navigate() {
        Authentication::login();
        if (Authentication::isAuthenticated()) {
            Pager::load();
        } else {
            Pager::loadDefault();
        }
    }
}