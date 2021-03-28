<?php


class UserRepository extends Db
{
    public function create($data) {
        $sql = "
            INSERT INTO imdb.user_credentials(id, username, first_name, last_name, password)
            VALUES(NULL, :username, :first_name, :last_name, :password);
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":username", $data["username"], PDO::PARAM_STR);
        $stmt->bindValue(":first_name", $data["first_name"], PDO::PARAM_STR);
        $stmt->bindValue(":last_name", $data["last_name"], PDO::PARAM_STR);
        $stmt->bindValue(":password", $data["password"], PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function getById($id) {
        $sql = "
            SELECT * FROM imdb.user_credentials WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getByUsernameAndPassword($username, $password) {
        $sql = "
            SELECT * FROM imdb.user_credentials WHERE username = :username AND password = :password
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":username", $username, PDO::PARAM_STR);
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getAll() {
        $sql = "
            SELECT * FROM imdb.user_credentials
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update($data) {
        $sql = "
            UPDATE imdb.user_credentials
            SET
                username = :username,
                first_name = :first_name,
                last_name = :last_name,
                access = :access
            WHERE
                id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":username", $data["username"], PDO::PARAM_STR);
        $stmt->bindValue(":first_name", $data["first_name"], PDO::PARAM_STR);
        $stmt->bindValue(":last_name", $data["last_name"], PDO::PARAM_STR);
        $stmt->bindValue(":access", $data["access"], PDO::PARAM_INT);
        $stmt->bindValue(":id", $data["id"], PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "
            DELETE FROM imdb.user_credentials WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}