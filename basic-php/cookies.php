<?php 
    setcookie('name', 'Minh', time() + 86400 * 30);

    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }
?>