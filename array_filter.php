<?php

require('./functions.php');

$users = [
    ['username' => 'alex', 'score'=> 0],
    ['username' => 'ashely', 'score'=> 0],
    ['username' => 'or', 'score'=> 50],
    ['username' => 'idan', 'score'=> 12]
];

$filteredUsers = array_filter($users, function($u){
    if($u['score'] > 10){
        return true;
    }
});

dd($filteredUsers);