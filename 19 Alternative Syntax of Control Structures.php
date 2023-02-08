<?php

$n = 13;

if ($n%2==0){
    echo "Even Number";
}else{
    echo "Odd Number";
}

echo PHP_EOL;
echo PHP_EOL;

if ($n%2==0): // alternative if else syntex
    echo "Even Number";
    echo PHP_EOL;
    echo "Some Tect";
else:
    echo "Odd Number";
    echo PHP_EOL;
    echo "Some Text++";
endif;
echo PHP_EOL;
echo PHP_EOL;

switch ($n%2 ==0):
    case 0;
    echo "Even Number";
    break;
    default:
    echo "Odd Number";
endswitch;