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
        $id = $_GET["user_id"];
        $this->userModel->delete($id);
        header("Location: index.php?controller=user&action=listAll");
    }
}