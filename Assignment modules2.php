<?php

$tuition = 190000; 


$commission = $tuition < 7000 ? "Invalid data" : ($tuition < 10000 ? $tuition * 0.15 : ($tuition < 20000 ? $tuition * 0.2 : $tuition * 0.25));

if ("Invalid data" == $commission){
    echo "invalid data";
} else {
    echo "The commission is $" . $commission;
}
