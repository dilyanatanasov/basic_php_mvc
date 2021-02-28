<?php

class BlogController extends BaseController
{
    private $blogModel;
    private $blogId;

    function __construct() {
        $this->blogModel = new BlogModel();

        $this->blogId = (!empty($_GET["blog_id"])) ? $_GET["blog_id"] : "";
    }

    public function view() {
        return $this->blogModel->view($this->blogId);
    }

    public function list() {
        return $this->blogModel->list();
    }
}