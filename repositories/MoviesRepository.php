<?php


class MoviesRepository extends Db
{
    public function create($data)
    {
        $sql = "
            INSERT INTO imdb.movies(id, title, description, main_actor, duration, rating, thumbnail)
            VALUES(NULL, :title, :description, :main_actor, :duration, :rating, :thumbnail)
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":title", $data["title"], PDO::PARAM_STR);
        $stmt->bindValue(":description", $data["description"], PDO::PARAM_STR);
        $stmt->bindValue(":main_actor", $data["main_actor"], PDO::PARAM_STR);
        $stmt->bindValue(":duration", $data["duration"], PDO::PARAM_INT);
        $stmt->bindValue(":rating", $data["rating"], PDO::PARAM_INT);
        $stmt->bindValue(":thumbnail", $data["thumbnail"], PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function getAllMovies()
    {
        $sql = "
            SELECT * FROM imdb.movies
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getByTitleOrDescription($topic)
    {
        $sql = "
            SELECT * FROM imdb.movies
            WHERE title LIKE CONCAT( '%', :topic, '%') OR description LIKE CONCAT( '%', :topic, '%')
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":topic", $topic, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "
            SELECT * FROM imdb.movies WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function update($data)
    {
        if (empty($data)) {
            return true;
        }
        $sql = "
            UPDATE imdb.movies
            SET 
                " . ($data["thumbnail"]) ? "thumbnail = :thumbnail" : "" . ",
                " . ($data["title"]) ? "title = :title" : "" . ",
                " . ($data["description"]) ? "description = :description" : "" . ",
                " . ($data["main_actor"]) ? "main_actor = :main_actor" : "" . ",
                " . ($data["duration"]) ? "duration = :duration" : "" . ",
                " . ($data["rating"]) ? "rating = :rating" : "" . "
            WHERE
                id = :id
        ";
        Debug::parseAndDie($sql);
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $data["id"], PDO::PARAM_INT);
        $stmt->bindValue(":title", $data["title"], PDO::PARAM_STR);
        $stmt->bindValue(":description", $data["description"], PDO::PARAM_STR);
        $stmt->bindValue(":main_actor", $data["main_actor"], PDO::PARAM_STR);
        $stmt->bindValue(":duration", $data["duration"], PDO::PARAM_INT);
        $stmt->bindValue(":rating", $data["rating"], PDO::PARAM_INT);
        $stmt->bindValue(":thumbnail", $data["thumbnail"], PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "
            DELETE FROM imdb.movies
            WHERE id = :id    
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}