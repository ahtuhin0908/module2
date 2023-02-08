<?php

$marks=1010;

if($marks <33){
    echo "Fail";
}elseif ($marks >=33 && $marks <40){
    echo "Gread D";
}elseif ($marks >=40 && $marks <50){
    echo "Gread C";
}elseif($marks >=50 && $marks <60){
    echo "Gread B";
}elseif($marks >=60 && $marks <70){
    echo "Gread A-";
}elseif ($marks >=70 && $marks <80){
    echo"Gread A";
}elseif($marks >=80 && $marks <100){
    echo "Gread A+";
}elseif("100" == $marks){
    echo "Goldren A+";
}else{
    echo "Something is wrong";
}

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

// ternary operator...


$mark = 39;

$result = ($mark <40) ? "Gread F" : (($mark >= 40 && $mark <50) ? "Gread B" : (($mark >=50 && $mark <60) ? "Gread A" : "Gread A+"));
echo $result;
