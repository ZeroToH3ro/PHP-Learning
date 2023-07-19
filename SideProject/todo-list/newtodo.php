<?php

try {
    $todos = json_decode(file_get_contents('./todos.json'), true, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}

if (isset($_POST['todo_name'])){
    $todoName = $_POST['todo_name'];
    $todos[$todoName] = ['completed' => false];
}

file_put_contents('./todos.json', json_encode($todos, JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT));

header('Location: index.php');