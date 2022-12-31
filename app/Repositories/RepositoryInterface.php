<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function getAll();
    public function find($id);
    public function create($payload = []);
    public function update($id, $payload);
    public function delete($id);
}
