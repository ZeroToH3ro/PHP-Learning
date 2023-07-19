<?php

try {
    $todos = json_decode(file_get_contents('./todos.json'), true, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
$todoName = $_POST['todo_name'];

$todos[$todoName]['completed'] = isset($_POST['status']);
try {
    file_put_contents('./todos.json', json_encode($todos, JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT));
} catch (JsonException $e) {
}
header('Location: index.php');