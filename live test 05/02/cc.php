<?php
$marks = 60;


function check_grade($marks) {
    if ($marks >= 60) {
        return "First Division";
    } elseif ($marks >= 45 && $marks < 60) {
        return "Second Division";
    } elseif ($marks >= 33 && $marks < 45) {
        return "Third Division";
    } else {
        return "Fail";
    }
}