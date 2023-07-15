<?php
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = 'minh21052002@@';
    const DB_NAME = 'php_dev';

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($conn -> connect_error){
        die('Connection fail' . $conn ->connect_error);
    }

    echo 'Connecting Database Successfully';

?>