<?php

namespace App\Controllers;


use App\IServiceLocator;

class MainController
{
    private $taskRepository;

    public function __construct(IServiceLocator $locator)
    {
        $this->taskRepository = $locator->get('TaskRepository');
    }

    public function JsonAction()
    {
        $tasks = $this->taskRepository->GetAllTasks();
        return json_encode($tasks);
    }

    public function ViewAction()
    {
        $tasks = $this->taskRepository->GetAllTasks();
        return $this->View('Test', [
            'var'=>'Данные переменной которую передали во view',
            'tasks' => $tasks
        ]);
    }







    private function View($template, array $variables)
    {
        extract($variables);
        ob_start();
        include_once realpath(__DIR__ . '/../Views/' . $template . '.php');
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}