<?php

namespace App;


interface IServiceLocator
{
    public function set($name, $dependency);
    public function get($name);
    public function has($name);
}