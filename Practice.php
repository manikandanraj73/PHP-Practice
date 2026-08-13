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

$isTrue=true;
var_dump($isTrue);
?>