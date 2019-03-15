<?php

//print_r($_POST);
extract($_POST);
if($name){
    $q = [
        "data" =>[
            "text"=>"success"
        ]
    ];

    echo json_encode($q);
}