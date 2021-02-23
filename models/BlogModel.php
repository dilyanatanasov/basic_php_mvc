<?php

class BlogModel extends BaseModel
{
    public function view()
    {
        $stmt = $this->conn->prepare("SELECT * FROM credentials");
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function list()
    {
        // TODO: Implement list() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}