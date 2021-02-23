<?php

class BlogController
{
    public function view() {
        $blog = new BlogModel();
        return $blog->view();
    }
}