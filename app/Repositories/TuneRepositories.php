<?php

namespace App\Repositories;
use App\Models\Tune;
use App\Repositories\TuneRepositoryInterface;

class TuneRepositories extends BaseRepository implements TuneRepositoryInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Tune::class;
    }

    public function getAll()
    {
        // TODO: Change the autogenerated stub
        return parent::getAll();
    }

    public function create($payload = [])
    {
        // TODO: Change the autogenerated stub
        return parent::create($payload);
    }
}