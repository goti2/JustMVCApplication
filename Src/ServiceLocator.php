<?php

namespace App;


class ServiceLocator implements IServiceLocator
{
    private $collection = [];

    public function set($name, $dependency)
    {
        $this->collection[$name] = $dependency;
        return $this;
    }

    public function get($name)
    {
        if($this->has($name) === false)
        {
            throw new \Exception("Dependency ${name} not found");
        }

        $dependency = $this->collection[$name];

        if($dependency instanceof \Closure)
        {
            return $dependency();
        }
        else
        {
            return $dependency;
        }
    }

    public function has($name)
    {
        return isset($this->collection[$name]);
    }
}