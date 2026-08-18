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


if($_SERVER["REQUEST_METHOD"]==="POST"&&!empty($_POST["name"])&&!empty($_POST["age"])&&!empty($_POST["city"])){
$name= $_POST["name"];
$age=$_POST["age"];
$city=$_POST["city"];
echo"Welcome ".$name."\n<br>";

echo"AGE : ".$age."\n<br>";
echo"CITY : ".$city."\n<br>";
}
else{
    echo"fill the all details";
}
?>


