<?php 
    #for loop
    for($x=0; $x <= 10; $x++){
        echo $x . "\n";
    }
    #while loop
    $x = 1;

    while($x <= 15){
        echo $x . "\n";
        ++$x;
    };

    $posts = ['first port', 'second post', 'third post'];

    for($x=0, $xMax = count($posts); $x < $xMax; $x++){
        echo $posts[$x] . " ";
    }

    echo "\n";

    foreach($posts as $post){
        echo $post . " ";
    }
    
    echo "\n";

    foreach($posts as $index => $value){
        echo $index . " - " . $value . "\n";
    }

    $people = [
        "first_name" => "john",
        "last_name"  => "doe",
        'email' => 'john@gmail.com'
    ];

    foreach($people as $key => $value){
        echo $key . " - " . $value . "\n";
    }

?>