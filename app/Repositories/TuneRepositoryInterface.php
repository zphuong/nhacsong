<?php

namespace App\Repositories;

use App\Models\Tune;
use App\Repositories\RepositoryInterface;


interface TuneRepositoryInterface extends RepositoryInterface
{
    public function getAll();
    public function find($id);
    public function create($payload =[]);
    public function update($id, $payload);
    public function delete($id);
}
