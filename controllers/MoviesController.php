<?php


class MoviesController extends BaseController
{
    private $moviesModel;

    function __construct()
    {
        $this->moviesModel = new MoviesModel();
    }

    public function create()
    {
        if (!empty($_POST["create"])) {
            $this->moviesModel->create($_POST);
            header("Location: index.php?controller=movies&action=listAll");
        } elseif (isset($_GET["action"]) && $_GET["action"] === "create") {
            return true;
        }
        return false;
    }

    public function view()
    {
        if (!empty($_GET["movie_id"])) {
            return $this->moviesModel->view($_GET["movie_id"]);
        }
        return false;
    }

    public function listAll()
    {
        return $this->moviesModel->listAll();
    }

    public function update()
    {
        if (!empty($_POST["update"])) {
            $this->moviesModel->update($_POST);
            header("Location: index.php?controller=movies&action=listAll");
        } elseif (!empty($_GET["movie_id"])) {
            return $this->moviesModel->view($_GET["movie_id"]);
        }
    }

    public function delete()
    {
        if (!empty($_GET["movie_id"])) {
            $this->moviesModel->delete($_GET["movie_id"]);
            header("Location: index.php?controller=movies&action=listAll");
        }
        return false;
    }
}