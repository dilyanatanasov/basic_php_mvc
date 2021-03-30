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

    public function getAllCommentsForMovie($movie_id)
    {
        $sql = "
            SELECT UC.username, C.comment, C.created_at FROM imdb.movies M
            INNER JOIN imdb.comments C ON C.movie_id = M.id
            INNER JOIN imdb.user_credentials UC ON UC.id = C.user_id 
            WHERE M.id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $movie_id, PDO::PARAM_INT);
        $stmt->execute();
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
        $thumbnail = "";
        if (isset($data["thumbnail"]) && !empty($data["thumbnail"])) $thumbnail = "thumbnail = :thumbnail,";
        $sql = "
            UPDATE imdb.movies
            SET 
                title = :title,
                description = :description,
                main_actor = :main_actor,
                " . $thumbnail . "
                duration = :duration,
                rating = :rating
            WHERE
                id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $data["id"], PDO::PARAM_INT);
        $stmt->bindValue(":title", $data["title"], PDO::PARAM_STR);
        $stmt->bindValue(":description", $data["description"], PDO::PARAM_STR);
        $stmt->bindValue(":main_actor", $data["main_actor"], PDO::PARAM_STR);
        $stmt->bindValue(":duration", $data["duration"], PDO::PARAM_INT);
        $stmt->bindValue(":rating", $data["rating"], PDO::PARAM_INT);
        if (!empty($thumbnail)) $stmt->bindValue(":thumbnail", $data["thumbnail"], PDO::PARAM_STR);
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

    public function addComment($movie_id, $user_id, $comment)
    {
        $sql = "
            INSERT INTO imdb.comments(id, movie_id, user_id, comment)
            VALUES(NULL, :movie_id, :user_id, :comment)
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":movie_id", $movie_id, PDO::PARAM_INT);
        $stmt->bindValue(":user_id", $user_id, PDO::PARAM_INT);
        $stmt->bindValue(":comment", $comment, PDO::PARAM_STR);
        return $stmt->execute();
    }
}