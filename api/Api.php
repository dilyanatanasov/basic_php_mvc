<?php
require_once dirname(dirname(__FILE__)). "/core/Authentication.php";
require_once dirname(dirname(__FILE__)). "/models/MoviesModel.php";

$_POST = json_decode(file_get_contents('php://input'), true);

class Api {
    function __construct() {
        if (!empty($_POST)) {
            if (
                !empty($_POST["token"]) &&
                !empty($_POST["action"]) &&
                !empty($_POST["data"])
            ) {
                $token = $_POST["token"];
                $action = $_POST["action"];
                $data = $_POST["data"];

                $authentication = new Authentication();
                if ($authentication->validToken($token)) {
                    echo $this->request($action, $data);
                } else {
                    echo json_encode("Unauthorized");
                }
            } else {
                echo json_encode("Unauthorized");
            }
        } else {
            echo json_encode("Unauthorized");
        }
    }

    private function request($action, $data) {
        $response;
        switch($action) {
            case "delete":
                $id = $data;
                $movie = new MoviesModel();
                $movieInstance = $movie->view($id);
                $movieInstance->delete();
                $response = json_encode([
                    "message" => "Successfully deleted"
                ]);
                break;
            default:
                $response = json_encode("No results");
                break;
        }
        return $response;
    }
}

$api = new Api();