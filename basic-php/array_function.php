<?php 
    $fruits = ['mango', 'apple', 'orange'];
    # length of array
    echo count($fruits) . "\n";
    # search in array
    var_dump(in_array('mango', $fruits));
    # add new element in array
    $fruits[] = 'grabe';
    array_push($fruits, 'blue berry', 'straw berry');
    print_r($fruits);
    # remove from array
    array_pop($fruits);
    array_shift($fruits);
    print_r($fruits);
    # chunked array
    $chunker_array = array_chunk($fruits, 2);
    print_r($chunker_array);
    $a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
    print_r ($a);
    # merge two array
    $arr1 = [1,2,3,4,5];
    $arr2 = [6,7,8,9];
    $arr3 = [...$arr1, ...$arr2];
    print_r($arr3);
    # combine two array
    $a = ['green', 'blue', 'red'];
    $b = ['yellow','magenta', 'cyan'];
    $c = array_combine($a, $b);
    print_r($c);
    #keys value
    $keys = array_keys($c);
    print_r($keys);
?>