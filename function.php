<?php 
    $y = 12;
    function register($name){
        # global variable
        global $y;
        $y += 1;
        echo $y . "\n";
        echo 'User register: ' . $name . "\n";
    };
    echo $y . "\n";
    register('Bard');

    $number = sum(3, 5);
    function sum($first, $second){
        return ($first + $second);
    }

    echo $number . "\n";

    $multiply = fn($first, $second) => $first * $second;
    echo $multiply(9, 13);
?>