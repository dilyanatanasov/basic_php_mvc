<?php


class MoviesController extends BaseController
{
    private $moviesModel;

    public function __construct()
    {
        $this->moviesModel = new MoviesModel();
    }

    public function create($data)
    {
        return $this->moviesModel->create($data);
    }

    public function view($id)
    {
        return $this->moviesModel->view($id);
    }

    public function listByCategory($category)
    {
        return $this->moviesModel->listByCategory($category);
    }

    public function listAll()
    {
        return $this->moviesModel->listAll();
    }

    public function update($data)
    {
        return $this->moviesModel->update($data);
    }

    public function delete($id)
    {
        return $this->moviesModel->delete($id);
    }
}