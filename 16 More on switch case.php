<?php
// রিটার্ব্রেলিটি মেইন্টেইন করে সুইস কেইস দিয়ে if else বদল কাজ করার নিয়ম 
$n = 12;
$r = $n % 2;

switch (true){
    case (0 == $r && $n>0);
        echo "$n is a positive even number";
        break;
    case (1 == $r && $n>0);
        echo"$n is a positive odd number";
        break;
    case (0 == $r && $n<0);
        echo "$n is a negative even number";
        break;
    case (-1 == $r && $n<0);
        echo "$n is a negative odd number";
        break;
}