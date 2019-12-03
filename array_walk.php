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

/** Example #1 **/
// array_walk($peoples, function(&$p, $i){
//     $p['full_name'] = "{$p['first_name']} {$p['last_name']}";
// });

// dd($peoples);

/** Example #2 **/
// function joinName(&$people, $index, $delimiter = ' '){
//     $people['fullname'] = "{$people['first_name']}{$delimiter}{$people['last_name']}";
//     // return $people;
// }

// array_walk($peoples, 'joinName', '@');

// dd($peoples);


/** Example #3 **/

$payload = [
    [
        'id' => '1.5',
        'body' => 'What a lovely day',
        'user' => [
            'id' => '123'
        ]
    ],
    [
        'id' => '2',
        'body' => 'What a lovely day',
        'user' => [
            'id' => '456'
        ]
    ],
];

array_walk_recursive($payload, function(&$value){
    if(!is_numeric($value)){
        return;
    }

    $value = (float) $value;

    if(floor($value)===$value){
        $value = (int) $value;
    }
});

dd($payload);