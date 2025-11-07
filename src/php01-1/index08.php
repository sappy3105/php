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

    foreach ($people as $person){
        echo $person["first_name"] . "(" . $person["age"] . "歳" . $person["gender"] . ")" . "<br>";
    }