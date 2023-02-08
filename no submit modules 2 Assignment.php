<?php

$tuition = 21000; //(float)readline("Enter the tuition fee: ");

// /$commission = $tuition < 7000 ? "Invalid data" : ($tuition < 10000 ? $tuition * 0.15 : ($tuition < 20000 ? $tuition * 0.2 :$tuition * 0.25));

$commission = $tuition < 7000 ? "Invalid Data" : ($tuition >= 20000) ? 0.25 * $tuition : ($tuition >= 10000) ? 0.2 * $tuition : ($tuition >= 7000) ? 0.15 * $tuition :  :☻2 0;


echo "The commission is $" . $commission;
