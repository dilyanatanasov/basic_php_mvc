<?php

class BlogModel extends BaseModel
{
    private $blogRepository;

    function __construct() {
        $this->blogRepository = new BlogRepository();
    }

    public function view($id)
    {
        return $this->blogRepository->getById($id);
    }

    public function list()
    {
        // TODO: Implement list() method.
    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}