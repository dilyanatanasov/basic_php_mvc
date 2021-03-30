<?php


class MoviesModel extends BaseModel
{
    private $moviesRepository;

    function __construct()
    {
        $this->moviesRepository = new MoviesRepository();
    }

    public function create($data)
    {
        return $this->moviesRepository->create($data);
    }

    public function comment($movie_id, $user_id, $comment)
    {
        return $this->moviesRepository->addComment($movie_id, $user_id, $comment);
    }

    public function view($id)
    {
        return $this->moviesRepository->getById($id);
    }

    public function listAll()
    {
        return $this->moviesRepository->getAllMovies();
    }

    public function listAllComments($movie_id)
    {
        return $this->moviesRepository->getAllCommentsForMovie($movie_id);
    }

    public function search($topic)
    {
        return $this->moviesRepository->getByTitleOrDescription($topic);
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