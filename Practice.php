<?php
// $name = "Manikandan";
// echo "hi $name \n";
// for($i=1;$i<=10;$i++){
//     echo $i ."\n";
// }


// echo"Enter the number :";
// $age = readline();
// if($age < 18){
// echo"<";
// }
// elseif($age > 18){
//     echo ">";}
//     elseif($age == 18){
//     echo "18";}

// var_dump("0" > 0);
// var_dump("0" == 0);

// var_dump("m" > 0);
// var_dump("m" == 0);

// echo"Enter Number : ";
// $num = readline();

// if(is_numeric($num) && $num >0) {
//     for($i = 1; $i <=10; $i++) {
//         echo "$i X $num = ".$num*$i."\n";
//     }

// }
// else{
//     echo "Enter the Numbers only";
// }

// $languages=["c","cpp","java","php"];
// for($i= 0; $i<count($languages); $i++){
//     echo($languages[$i]);
// }
// $languages[]= "python";
// echo($languages[4]);

// $nums=[1,2,3,4];
// for($i=0;$i<count($nums);$i++){
//     if($nums[$i]===3){
//         continue;
//     }
//     echo $nums[$i]."\n";
// }

$employee=[
    "name"=>"mani",
    "age"=>22,
    "mStatus"=>false,
    "height"=>5.8
];
// echo"\n$employee[name]\n";
// echo"$employee[age]\n";
// echo"$employee[mStatus]\n";
// echo"$employee[height]";

// foreach($employee as $k=>$v){
//     if($v===false){
//       $v="'false'";
//     }
//     echo "$k = $v\n";
// }

$booking=[
    "movieName"=>"Citizen",
    "Date"=>"15/08/2026",
    "price"=>200,
    "seats"=>["A1","A2"]
];
// foreach ($booking as $key => $value) {
//     if($key=="seats"){
//         $st="";
//         for($i= 0;$i<count($value);$i++){
//  
        //  $st .= "[$value[$i]] ";
//         }
//         $value=$st;
//     }
//     echo"$key = $value\n";
// }
$nums=[1,2,3,4,9,8];

for ($i= 0; $i<count($nums)-1; $i++){
    for ($j= $i+1; $j<count($nums); $j++){
    if($nums[$i] < $nums[$j]){
    $temp=$nums[$i];
    $nums[$i] = $nums[$j];
    $nums[$j] = $temp;
    }
}
}
// foreach($nums as $num){
//     echo"$num\n";
// }
$sentence= "hello guys how are u";
$arr=explode(" ",$sentence);
// foreach($arr as $value){
// echo"$value\n";
// }

// while (true){
// $random_value= rand(1,10);
// echo"Enter the Number b/w 1 - 10 : ";
// $inp=readline();
// if($inp== $random_value){
//     echo "Won !....";
//     break;
// }
// echo"Miss try again correct ans is $random_value \n";        
// }

// print_r($arr);
// STRING BUILT-IN FUNCTIONS
// $name="Manikandan ";
// echo"$name\n";
// echo"length: ".strlen($name)."\n";
// echo"upper: ".strtoupper($name)."\n";
// echo"lower: ".strtolower($name)."\n"; 
// echo"trim: ".trim($name)."\n"; 
// echo"replace: ".str_replace("kandan","sh Pandey",$name)."\n"; 
// echo"position find: ".strpos($name,"kandan")."\n"; 
// echo"sub str: ".substr($name,0,4)."\n"; 

// ARRAY BUILT-IN FUNCTIONS
// $a=["a","b","c"];
// echo"implode: ".implode(", ",$a)."\n"; 
// echo"count: ".count($a)."\n"; 
// echo"in - array: ".in_array("b",$a)."\n"; 
// echo"array key exists: ".array_key_exists("seats",$booking)."\n"; 
// array_pop($a);
// print_r($a);
// $b=["d","e","f","a"];
// $c=array_merge($a,$b);
// echo"array merge: ".print_r($c)."\n"; 
// $unique=array_unique($c);
// echo"uniqu: ";print_r($unique);

// MATH BUILT-IN FUNCTIONS
// echo "absolute : ".abs(-10.5)."\n";
// echo "round : ".round(10.6)."\n";
// echo "ceil always upward : ".ceil(10.2)."\n";
// echo "floor always dounward : ".floor(10.6)."\n";
// echo "max : ".max(10.6,10,20)."\n";
// echo "min : ".min(10.6,10,-10,-1)."\n";
// echo "gettype : ".gettype("hii")."\n";
// echo "is string : ".is_string("hii")."\n";
// echo "is int : ".is_int("hii")."\n";
// echo "is array : ".is_array($booking)."\n";
// echo "is boolean : ".is_bool(false)."\n";
// echo "is float : ".is_float(1.5)."\n";
// echo "is null : ".is_null(null)."\n";

// DATE TIME
// echo"date : ".date("d-m-Y")."\n";
// echo"time : ".time()."\n";
// echo"str to date : ".strtotime("17 August 2026")."\n";
// $date=strtotime("17 August 2026");
// echo"date using timestamp : ".date("d-m-Y",$date)."\n";

// function add($a,$b){
//     return $a+$b;
// }


// $add = function ($a,$b){
//     return $a+$b;
// };
// echo"Answer: ".$add(2,3);

// $add=fn($a)=>$a*2;

// echo"result : ".$add(47);
?>