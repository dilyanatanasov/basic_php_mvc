<?php

class BlogController extends BaseController
{
    private $blogId;

    function __construct() {
        $this->blogId = (!empty($_GET["blog_id"])) ? $_GET["blog_id"] : "";
    }

    public function view() {
        $blog = new BlogModel();
        return $blog->view($this->blogId);
    }
}