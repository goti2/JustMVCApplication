<?php

namespace App\Data\Entity;


class TaskEntity
{
    public $username;
    public $email;
    public $description;
    public $image;

    public function __construct($username, $email, $description, $image)
    {
        $this->username = $username;
        $this->email = $email;
        $this->description = $description;
        $this->image = $image;
    }
}