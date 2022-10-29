<?php

$rifat = 80;
function printvalue(){
    $a = 80;
    global $a;
    echo"The value of your variable is $a</br>";
}
echo$rifat;
printvalue();

function tshirt($arolagbe){
    static$tshirt = 9;
    $tshirt +=$arolagbe;
    echo$tshirt."</br>";
tshirt(1);
tshirt(2);
tshirt(3);
}

// Array
$watch=[
    'col' => "Black</br>",
    'brand'  =>"rolex",
    

];
echo'<pr>';
print_r($watch['col']);
echo'</pr>';

$watch =[
    'col' => "Black",
    'brand'  =>"rolex",
    'rifat'   =>[
        'col'=>"black",
        'favfood'=>"mach,vath",
        'hobby'  =>"boxing</br>",
    ],
  

];
echo'<pr>';
print_r($watch['rifat']['hobby']);
echo'</pr>';


$password = "0987654321";
echo md5($password);
echo"</br>";
echo sha1($password);
echo"</br>";
$rifat= password_hash($password,PASSWORD_BCRYPT);
echo password_hash($password,PASSWORD_BCRYPT);
var_dump(password_verify('0987654321',$rifat));
echo"</br>";



$rifat ="i love my bike</br>";
echo strtoupper($rifat);


$rifat ="I LOVE MY BIKE</br>";
echo strtolower($rifat);

$str = "marbo aikne lash porbe shoshane</br>";
 printf("welcome %s",ucwords($rifat));

$name = "sommossaki";
echo strrev($name),"</br>";


$rifat= "never give up</br>";
echo strpos($rifat,"up</br>");
if(strpos($rifat,"give") &&  strpos($rifat,"who")){
    echo "yes</br>";
}else{
    echo"no</br>";
}
$rifat= "never give up</br>";
        echo stripos($rifat,"jumps");

$rifat= "never give up</br>";
echo substr($rifat,0,10).'.....</br>';  

$rifat ="i do my business very well</br>";

$other_peopel ="you are bad in business";
$mymind="its okey";

echo str_replace("you",$other_peopel,$rifat,$mymind);


$password ="tumr janadorkarnai";
echo trim($password,"  </br>");
$rifat= "never give up</br>";
echo strlen($rifat)."</br>";
echo str_word_count($rifat);
echo"</br>";





 
  