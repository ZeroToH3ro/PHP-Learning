<?php
$connection = require 'pdo.php';
$connection->removeNote($_POST['id']);
header('Location: index.php');