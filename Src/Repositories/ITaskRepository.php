<?php

namespace App\Repository;


interface ITaskRepository
{
    public function GetAllTasks();
    public function GetTasksByUser($userId);
}