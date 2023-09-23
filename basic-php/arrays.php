<?php
    define('HOST', 'localhost');
    echo HOST . "\n";

    $numbers = [1,2,3,4,5];

    $fruits = array('apple', 'organge', 'banana');

    $colos = [
        1 => 'blue',
        2 => 'red',
        3 => 'green',    
    ];

    echo json_encode($numbers) . "\n";

    var_dump(json_encode($colos));

    $people = [
        [
            "first_name" => "john",
            "last_name"  => "doe",
            'email' => 'john@gmail.com'
        ],
        [
            "first_name" => "david",
            "last_name"  => "mark",
            'email' => 'david@gmail.com'
        ],
        [
            "first_name" => "joseph",
            "last_name"  => "dick",
            'email' => 'dick@gmail.com'
        ],
    ];
    var_dump($people);
    
    echo $people[1]['email'];
?>