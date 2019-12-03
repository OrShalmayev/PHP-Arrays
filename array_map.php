<?php
require('./functions.php');

$peoples = [
    [
        'id'=>1,
        'first_name'=> 'Or',
        'last_name'=>'Shalmayev',
        'email'=> 'or@gmail.com'
    ],
    [
        'id'=>2,
        'first_name'=> 'idan',
        'last_name'=>'Gosalker',
        'email'=> 'idan@gmail.com'
    ],
    [
        'id'=>3,
        'first_name'=> 'netanel',
        'last_name'=>'Bar-David',
        'email'=> 'netanel@gmail.com'
    ],
    [
        'id'=>4,
        'first_name'=> 'Rahamim',
        'last_name'=>'Rahamimov',
        'email'=> 'rahamim@gmail.com'
    ],
    [
        'id'=>5,
        'first_name'=> null,
        'last_name'=> null,
        'email'=> 'rahamim@gmail.com'
    ],
];

/**
  Task
 * we want to create an entire new array that have a key named fullname
 * 
 *  
 */

/** Option #1 **/  
    // foreach ($peoples as &$p) {
    //     # run through each array in the peoples array and perfom modification
    //     # note we using '&' - by reference to actualy change the specific array.
    //     $p['full_name'] = "{$p['first_name']} {$p['last_name']}";
    // }

    // dd($peoples);

    /** Option #2 **/  
$ages = [26, 25, 24, 26];
$peoples2 = array_map(function($p, $i) use($ages){
    var_dump($i);
    if(is_null($p['first_name']) || is_null($p['last_name'])){
        return $p;
    }
    $p['age'] = $ages[$i];
    $p['full_name'] = "{$p['first_name']} {$p['last_name']}";
    return $p;
}, $peoples, array_keys($peoples));

dd($peoples2);
