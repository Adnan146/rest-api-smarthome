<?php

$data = [
    "status" => true,
    "data" =>[[
        "suhu" => random_int("10", "30")
       
    ]]
];

header("content-type: application/json");
echo json_encode($data);
