<?php
namespace Todo\Storage\Contracts;
use Todo\Models\Task;

interface  TaskStorageInterface
{
    public function store(Task $task);
    public function all();
    public function get($id);
    public function update(Task $task);
}