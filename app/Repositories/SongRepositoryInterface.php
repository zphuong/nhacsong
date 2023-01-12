<?php

namespace App\Repositories;

interface SongRepositoryInterface
{
    public function show($id);
    public function store($payload);
}
