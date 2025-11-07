<?php

$people = [
    [
    "first_name" => "Taro",
    "age" => 25,
    "gender" => "men"
    ],
    [
    "first_name" => "Jiro",
    "age" => 20,
    "gender" => "men"
    ],
    [
    "first_name" => "Hanako",
    "age" => 16,
    "gender" => "women"
    ]
];

foreach($people as $person){
    echo $person["first_name"] . "(" . $person["age"] . "歳" . $person["gender"] . ")" . "<br>";
}





// $people = [
//     "person1" => "Taro",
//     "person2" => "Jiro",
//     "person3" => "Saburo"
// ];

// foreach($people as $person => $name){
//     print $person . "は" . $name . "です" . "<br>";
// }



// $people = array("Taro", "Jiro", "Saburo");

// foreach($people as $person){
//     echo $person . "<br>";
// }



// $people = array(
//     "person1" => "Taro",
//     "person2" => "Jiro",
//     "person3" => "Saburo"
// );

// echo $people["person1"];

// $people = array("Taro", "Jiro", "Saburo");

// echo $people[0];


// var_dump($people);