<?php


class UserController extends BaseController
{
    private $userModel;

    function __construct() {
        $this->userModel = new UserModel();
    }

    public function listAll() {
        return $this->userModel->listAll();
    }

    public function delete() {
        if (!empty($_POST) && !empty($_POST["delete_id"])) {
            $id = $_POST["delete_id"];
            $this->userModel->delete($id);
        }
        header("Location: index.php?controller=user&action=listAll");
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function view()
    {
        // TODO: Implement view() method.
    }

    public function update()
    {
        if (!empty($_POST) && !empty($_POST["update"])) {
            $this->userModel->update($_POST);
            header("Location: index.php?controller=user&action=listAll");
        } else {
            return $this->userModel->view($_POST["user_id"]);
        }
    }
}