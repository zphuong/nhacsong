<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function getAll();
    public function find($id);
    public function store($payload = []);
    public function update($id, $payload);
    public function delete($id);
}
