<?php


class MoviesModel extends BaseModel
{
    private $moviesRepository;

    public function __construct()
    {
        $this->moviesRepository = new MoviesRepository();
    }

    public function create($data)
    {
        return $this->moviesRepository->create($data);
    }

    public function view($id)
    {
        return $this->moviesRepository->getById($id);
    }

    public function listByCategory($category)
    {
        return $this->moviesRepository->getByCategory($category);
    }

    public function listAll()
    {
        return $this->moviesRepository->getAll();
    }

    public function update($data)
    {
        return $this->moviesRepository->update($data);
    }

    public function delete($id)
    {
        return $this->moviesRepository->delete($id);
    }
}