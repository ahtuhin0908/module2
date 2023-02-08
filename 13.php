<?php
// $condition1 = true;
// $condition2 = true;
// $condition3 = true;

// if ( $condition1 && $condition2 && $condition3 ){
//     echo "it`s ok";
// }elseif($condition1 && $condition2){
//     echo " no 3 False";
// }elseif($condition1){
//     echo "NO 2 & No 3 False";
// }else{
//     echo"All are False";
// }


$person1 = 'Tuhin';
$person2 = 'Arif';
$person3 = 'babul';

if ($person1 && $person2 && $person3){
    echo "All Person are Available";
} elseif ($person1 && $person2){
    echo "($person3) not Available";
}elseif($person1){
    echo "Only ($person1) is Available";
}else {
    echo "Host Not Found";
}


/*
$pe = 'tuhin';
$per = 'arif';
$pers = 'babul';

if ($pe && $per && $pers){
    echo "all person available";
}elseif ($pe && $per){
    echo "person 3 not available";
}elseif ($pe){
    echo "person 1 available";
}else {
    echo "host not found";
}
*/

echo "\n";

$t1 = 12;
$t2 = 10;

$totall = $t1 + $t2;
$minus = $t1 - $t2;
$devaide = $t1 / $t2;
$quality = $t1 * $t2;

echo "The Sum of Number $t1 and $t2 is $totall \n";

echo "The equation of Number $t1 and $t2 is $minus \n";

echo "The Sum of Number $t1 and $t2 is $devaide\n";

echo "The Sum of Number $t1 and $t2 is $quality\n";