<?php

class UserModel extends BaseModel
{
    private $userRepository;

    function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function create($data)
    {
        return $this->userRepository->create($data);
    }

    public function view($id)
    {
        return $this->userRepository->getById($id);
    }

    public function listAll()
    {
        return $this->userRepository->getAll();
    }

    public function update($data)
    {
        return $this->userRepository->update($data);
    }

    public function delete($id)
    {
        return $this->userRepository->delete($id);
    }
}