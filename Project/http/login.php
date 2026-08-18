<?php
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

if(isset($_POST["name"]) && isset( $_POST["pass"])){
    $name = $_POST["name"];
    $password = $_POST["pass"];
    $flag=false;
    foreach($users as $user){
    if(in_array($name,$user,true) && in_array($password,$user,true)){
    $flag=true;

    }
    };
    echo $flag?"Login Success":"Invalid Credential";
}
else{
    echo "login failed";
}
?>