<?php
$n = 12;
$r = $n % 2;

switch ($r){
    case 0:
        echo "{$n} is an even number \n";
        break;
    default;
        echo "{$n} is an odd number\n";
}

echo "\n";

$colour = 'blue';
switch ($colour){
    case 'blue';
        echo "Blue is our favourite Coloure";
        break;
     case 'green';
        echo "Green is our favourite Coloure";
        break;
    case 'red';
        echo "Red is not my favourite coloure";
        break;
    default;
        echo "This coloure is ok\n";
}
echo "\n";
echo "\n";

$color = 'blue';
switch($color){
    case 'red';
    case 'green';
        echo ucwords($color)." is our favourite coloure";
        break;
    case 'blue';
        echo "Blue is my more than favourite coloure";
        break;
    case 'yewllo';
        echo "Yewllo is not favourite coloure";
        break;
    default:
        echo "This coloure is ok";

}
echo "\n";
echo "\n";

if('red' == $color || 'green' || $color){
    echo "$color";
}