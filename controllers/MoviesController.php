<?php


class MoviesController extends BaseController
{
    private $moviesModel;

    function __construct() {
        $this->moviesModel = new MoviesModel();
    }

    public function create() {
    }

    public function view() {
        $data = false;
        if (!empty($_GET["movie_id"])) {
            $data = $this->moviesModel->view($_GET["movie_id"]);
        }
        return $data;
    }

    public function listAll() {
        return $this->moviesModel->listAll();
    }

    public function update() {
    }

    public function delete() {
    }
}