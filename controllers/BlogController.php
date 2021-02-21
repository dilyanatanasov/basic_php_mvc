<?php

class BlogController
{
    public function get() {
        return BlogModel::getUserName();
    }
}