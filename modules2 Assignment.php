<?php
function calculate_commission($tuition)
{
    return $tuition < 7000 ? "Invalid data" : ($tuition < 10000 ? $tuition * 0.15 : ($tuition < 20000 ? $tuition * 0.2 :$tuition * 0.25));
}

$tuition = 10000;
$commission = calculate_commission($tuition);

if ($commission === "Invalid data") {
    echo "Invalid data";
} else {
    echo "Commission: $" . $commission;
}

?>



<?php

