<?php
header("Content-Type: application/json");
$users=[
        [
            "userName"=>"mani",
            "password"=> "mani123",
        ],
         [
            "userName"=>"ram",
            "password"=> "ram123",
        ]
    ];

    if($_SERVER["REQUEST_METHOD"]!=="POST"){
        exit("Invalid Request");
    }
    $name = trim($_POST["name"]??"");
    $password = trim($_POST["pass"]??"");

if($name==="" || $password=== ""){
    exit("All fields are required");
}
    $flag=false;
    foreach($users as $user){
    if(in_array($name,$user,true) && in_array($password,$user,true)){
    $flag=true;

    }
    };

    if($flag){
        echo json_encode(["Status"=>"Success","Message"=> "Login Success"]);
    }
    else{
        http_response_code(401);
        echo json_encode(["Status"=>"Failed","Message"=> "Failed to Login"]);
    }
?>