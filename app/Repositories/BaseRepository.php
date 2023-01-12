<?php

namespace App\Repositories;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }
    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->model->all();
    }

    public function find($id)
    {
        // TODO: Implement find() method.
        return $this->model->find($id);
    }

    public function store($payload = [])
    {
        // TODO: Implement create() method.
        return $this->model->create($payload);
    }

    public function update($id, $payload)
    {
        // TODO: Implement update() method.
        $result = $this->find($id);
        if($result){
            $result->update($payload);
            return $result;
        }
        return fasle;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $result = $this->find($id);
        if($result){
            $result->delete();
            return true;
        }
        return false;
    }
}
