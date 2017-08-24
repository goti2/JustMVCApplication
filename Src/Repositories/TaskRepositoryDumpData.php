<?php

namespace App\Repository;


use App\Data\Entity\TaskEntity;

class TaskRepositoryDumpData implements ITaskRepository
{
    public function GetAllTasks()
    {
        return [
            new TaskEntity("User1", "user1@email.com", "Description 1", "path/to/image1.png" ),
            new TaskEntity("User1", "user1@email.com", "Description 2", "path/to/image2.png" ),
            new TaskEntity("User2", "user2@email.com", "Description 3", "path/to/image3.png" ),
            new TaskEntity("User3", "user3@email.com", "Description 4", "path/to/image4.png" ),
            new TaskEntity("User3", "user3@email.com", "Description 5", "path/to/image5.png" ),
            new TaskEntity("User3", "user3@email.com", "Description 6", "path/to/image6.png" ),
            new TaskEntity("User3", "user3@email.com", "Description 7", "path/to/image7.png" )
        ];
    }

    public function GetTasksByUser($userId)
    {
        return [
            new TaskEntity("User1", "user1@email.com", "Description 1", "path/to/image1.png" ),
            new TaskEntity("User1", "user1@email.com", "Description 2", "path/to/image2.png" )
        ];
    }

}