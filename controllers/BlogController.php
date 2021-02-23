<?php

class BlogController extends BaseController
{
    public function view() {
        $blog = new BlogModel();
        return $blog->view();
    }
}