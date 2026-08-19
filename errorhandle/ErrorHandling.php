<?php
function check(string $name){
    if(trim($name)== "" || !isset($name)){
        throw new Exception("InvalidInputException");
}

}
try{
    $inp=readline();
    check("$inp");
    echo"WELCOME $inp";

}
catch(Exception $e){
    echo "Error : ".$e->getMessage()."\n";
}

?>