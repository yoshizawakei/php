<?php
$people = [
    [
        "name" => "Taro",
        "age" => 25,
        "sex" => "men"
    ],
    [
        "name" => "Jiro",
        "age" => 20,
        "sex" => "men"
    ],
    [
        "name" => "hanako",
        "age" => 16,
        "sex" => "woman"
    ]
];

foreach ($people as $people["name"], $people["age"], $people["sex"]) {
    echo $people["name"] . "(" . $people["age"] . "歳" . $people["sex"] . ")" ."<br>";
 }