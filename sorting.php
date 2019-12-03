<?php
require('./functions.php');
// sort() - simply sort an array.

// rsort(); - sort in reverse order.

// asort() - sort by ascending order. // will sort an array but it will keep the indexes of the array in place 

// arsort() - // will do the same as above but in a reverse order

// ksort() - will sort by the key

// krsort() - the same as above but in reverse order.

// natsort() - will sort by natural sort algorithm

// usort() - lets you to sort by a defined functions

// uksort() - lets you to sort by a defined functions but with the keys

// array_multisort() - sort multiple arrays side by side.

/** Example: natsort() */
// $files = ['img3.png','img6.png','img1.png','img4.png'];
// natsort($files);
// dd($files);


/** Example: usort() */
// $numbers = [4,4,10,1,52,89];

// usort($numbers, function($f, $s){

//     // if($f===$s) return 0;

//     // if($f > $s){
//     //     return 1;
//     // }else{
//     //     return -1;
//     // }

//     // Or
//     return $f <=> $s;
// });

// dd($numbers);

/** Example #2: usort() */

// $users = [
//     ['username'=>'Alex', 'reputation'=> 50, 'posts'=> 200],
//     ['username'=>'Or', 'reputation'=> 300, 'posts'=> 150],
//     ['username'=>'Netanel', 'reputation'=> 2, 'posts'=> 5],
//     ['username'=>'Idan', 'reputation'=> 1, 'posts'=> 6]
// ];

// usort($users, function($f, $s){
//     $scoreOne = $f['reputation'] + $f['posts'];
//     $scoreTwo = $s['reputation'] + $s['posts'];
//     // if to values equal check for highest reputation
//     if($scoreOne===$scoreTwo){
//         if($f['reputation'] > $s['reputation']){
//             return 0;
//         }else{
//             return 1;
//         }
//     }
//     return ($scoreOne > $scoreTwo) ? -1 : 1;
// });

// dd($users);


/** Example: array_multisort() **/
$numbers = [50,20,13,11,1];

array_multisort($numbers, SORT_DESC);