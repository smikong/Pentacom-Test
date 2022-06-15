<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoStoreRequest;
use App\Http\Resources\TodoResource;
use App\Interfaces\TodoRepositoryInterface;

class TodoController extends Controller
{
    private $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepositoryInterface)
    {
        $this->todoRepository = $todoRepositoryInterface;
    }

    public function index()
    {
        $todos = $this->todoRepository->allPaginated(['user']);

        return TodoResource::collection($todos);
    }

    public function store(TodoStoreRequest $request)
    {
        $todo = $this->todoRepository->create($request->validated());

        return new TodoResource($todo);
    }
}
