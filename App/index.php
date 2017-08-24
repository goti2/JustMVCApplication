<?php

require_once __DIR__ . '/../vendor/autoload.php';


$config = []; //Заменить конфиг нормальным пакетом...
$di = new App\ServiceLocator();
$app = new \App\Application($di);




$di->set('Config', $config);

$di->set('TaskRepository', function() {
    return new \App\Repository\TaskRepositoryDumpData();
});


$app->start();
