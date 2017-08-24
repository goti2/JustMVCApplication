<?php

namespace App;


class Application
{
    private $DI;

    public function __construct(IServiceLocator $locator)
    {
        $this->DI = $locator;
    }

    public function start()
    {
        try
        {
            $ctrName = filter_input(INPUT_GET, 'ctr', FILTER_SANITIZE_STRING);
            $actName = filter_input(INPUT_GET, 'act', FILTER_SANITIZE_STRING);

            $controllerName = ucfirst($ctrName) . 'Controller';
            $actionName = ucfirst($actName) . 'Action';

            $controllerPath = __DIR__ . '/Controllers/' . $controllerName . '.php';

            if(is_file($controllerPath))
            {
                $ControllerType = 'App\\Controllers\\' . $controllerName;

                $reflectionClass = new \ReflectionClass($ControllerType);
                $reflectionMethod = $reflectionClass->getMethod($actionName);

                if($reflectionClass->hasMethod($actionName) && $reflectionMethod->isPublic())
                {
                    $controller = new $ControllerType($this->DI);
                    echo call_user_func([$controller, $actionName]);
                }
            }
            else
            {
                throw new \Exception("Controller not found", 404);
            }
        }
        catch (\Exception $exception)
        {
            echo 'Error: ' . $exception->getMessage();
        }
    }
}