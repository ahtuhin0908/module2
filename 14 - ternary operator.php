<?php
// ternary operator code in php

$n = 10;

// others code
/*
if(12==$n){
    echo "Twelve";
}elseif(10==$n){
    echo "Ten";
}else{
    echo "A Number";
}
*/

echo "\n";

//ternary operator
$n = 10;

$numberInWord = (12 == $n) ? "Twelve" : "A Number";
echo $numberInWord;



// $num = 101;
// $result = ($num == 10) ? "Equal to 10" : "Not equal to 10";
// echo "$result\n";

echo "\n";
if ($n % 2 == 0){
    echo "Even Number";
}else{
    echo "Odd Number";
}

echo "\n";


$result = ($n % 2 == 0) ? "Even Number" : "odd Number";
echo $result;

echo "\n";
echo "\n";

$t = 17;
$nO = (12 == $t) ? "Twelve" : ((10 == $t) ? "Ten" : ((11 == $t) ? "Eleven": ((14 == $t) ? "Forteen" : "A Number")));
echo $nO;

echo "\n";
echo "\n";

$l = 130;

$result = ($l % 2 == 0) ? "Even Number" : (($l % 2 == 1) ? "odd Number" : "fhfbh");
echo $result;