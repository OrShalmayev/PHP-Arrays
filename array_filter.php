<?php

require('./functions.php');

// /** Example #1 */
// $users = [
//     ['username' => 'alex', 'score'=> 0],
//     ['username' => 'ashely', 'score'=> 0],
//     ['username' => 'or', 'score'=> 50],
//     ['username' => 'idan', 'score'=> 12]
// ];

// $filteredUsers = array_filter($users, function($u, $i){
    
//     //Option #1 
//     // if($u['score'] > 10){
//     //     return true;
//     // }

//     // Option #2
//     // return $u['score'] > 10;

//     // Option #3
//     return $i === 0;

// }, ARRAY_FILTER_USE_BOTH);

// dd($filteredUsers);




/** Example #2 */
$scores = [2,3,20, null, false, 0, 202];

// will return all positive values and will omit all falsy values.
$filteredScores = array_filter($scores);
dd($filteredScores);