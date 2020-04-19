<?php

require 'vendor/autoload.php';

use Todo\Models\Task;
use Todo\Storage\MySqlDatabaseTaskStorage;

try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=todo;charset=utf8', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}

//$tasks = $db->prepare('SELECT * FROM tasks');
//$tasks->execute();
//$tasks->setFetchMode(PDO::FETCH_CLASS, Task::class);

$storage = new MySqlDatabaseTaskStorage($db);

//$task = new Task();
//$task->setDescription('Погулять с собачкой');
//$task->setComplete(false);
//$task->setDue(new DateTime('+1 days'));

//var_dump($task);
$task = $storage->get(2);
$task->setDescription('Дать прикурить');
$task->setComplete(true);
$task->setDue(new DateTime('+5 days'));

var_dump($storage->update($task));
