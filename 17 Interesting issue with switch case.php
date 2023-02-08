<?php
$string = "8balls";
switch ($string){
    case "9balls";
        echo "Nine Balls";
        break;
    case "8";
        echo "8 balls";
        break;
    case "8balls";
        echo "Eight Balls";
        break;
}
echo "\n";
echo "\n";

$b = "10balls";
switch ($b){
    case (string) "5balls";
        echo "In this 5 Balls";
        break;
    case (string) "9";
        echo "In this Nine Balls";
        break;
    case (string) "10";
        echo " 10 Balls";
        break;
    case (string) "10balls";
        echo "In this has Ten Balls";
        break;

        default;
        echo "Not Match";
    
}