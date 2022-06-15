<?php

namespace App\Repositories;

use App\Interfaces\TodoRepositoryInterface;
use App\Models\Todo;

class TodoRepository extends BaseRepository implements TodoRepositoryInterface
{
    public function setModel()
    {
        return Todo::class;
    }
}
