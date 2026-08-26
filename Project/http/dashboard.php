<?php
echo"Welcome Dashboard page.........\n";
header("Content-Type: application/json");
echo json_encode(["Status"=>"Success","Message"=> "Login Success"]);

?>