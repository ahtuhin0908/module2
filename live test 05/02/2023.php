<?php
$marks = 45;
if ($marks >= 60) {
        echo "First Division";
    } elseif ($marks >= 45 && $marks < 60) {
        echo "Second Division";
    } elseif ($marks >= 33 && $marks < 45) {
        echo "Third Division";
    } else {
        echo"Fail";
    }


 