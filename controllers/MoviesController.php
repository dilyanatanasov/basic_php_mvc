<?php


class MoviesController extends BaseController
{
    private $moviesModel;
    private $uploadManager;

    function __construct()
    {
        $this->moviesModel = new MoviesModel();
        $this->uploadManager = new UploadManager();
    }

    public function create()
    {
        if (!empty($_POST["create"])) {
            $fileName = $this->uploadManager->uploadImg();
            if (!$fileName) {
                echo "Error on upload";
            }
            $_POST["thumbnail"] = $fileName;

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
        if (!empty($_POST) && !empty($_POST["search"])) {
            return $this->moviesModel->search($_POST["search"]);
        } else {
            return $this->moviesModel->listAll();
        }
    }

    public function update()
    {
        if (!empty($_POST["update"])) {
            if (!empty($_FILES["fileToUpload"]["error"])) {
                $fileName = $this->uploadManager->uploadImg();
                if (!$fileName) {
                    echo "Error on upload";
                } else {
                    $_POST["thumbnail"] = $fileName;
                }
            }

            $this->moviesModel->update($_POST);
            header("Location: index.php?controller=movies&action=view&movie_id=" . $_GET["movie_id"]);
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