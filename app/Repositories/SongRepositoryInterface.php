<?php

namespace App\Repositories;

interface SongRepositoryInterface
{
    public function getFile($file);
    public function create($payload);
}
