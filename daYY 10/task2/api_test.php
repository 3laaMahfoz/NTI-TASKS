<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
if($_SERVER["REMOTE_ADDR"]=="127.0.0.1"){
    $data=["data"=>[["message"=>"wrong try to Get Data"]], "connection"=>false , "message"=>"wrong domain"];
    echo json_encode($data);
}
else{
    $d=[
        "data"=> [
            
            ["name" => "ALAA",
            "age" => 30,
            "city" => "EL MANSOURA"
        ],[
            "name" => "AMR",
            "age" => 35,
            "city" => "Los Angeles"
        ],
    ],
        "connection"=> true ,
        "message" => "Data retrieved successfully"
    ];
    echo json_encode($d);
}