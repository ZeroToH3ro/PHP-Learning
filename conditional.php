<?php 
    $time = date('H');

    echo $time . "\n";

    if($time <= 12){
        echo "Good morning";
    } else if ($time > 12 && $time <= 18){
        echo "Good afternoon";
    } else {
        echo "Good night";
    }

    echo "\n";

    $post = ['First Post'];
    if(!empty($post)){
        echo $post[0];
    } else {
        echo 'No post found';
    }
    echo "\n";
    $fav_color = 'red';

    switch ($fav_color){
        case 'red':
            echo 'sorry, I like blue more!';
            break;
        case 'blue':
            echo 'not like to much';
            break;
        default:
            echo 'bye';
            break;
    }

?>