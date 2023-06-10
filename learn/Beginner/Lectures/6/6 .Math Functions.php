<!-- Math Functions -->

<?php

// ABS : Absolute Value (Remove Native Values)
$ABS = -5;
echo "ABS Result : " . abs($ABS) . "<br>"; // 5

// ceil : float/double (return number up to the nearest Integer => 5.8 => 6)
$CEIL = 5.8;
echo "CEIL Result : " . ceil($CEIL) . "<br>";; // 6

// round : float/double (return number  the nearest Integer 6)
$ROUND = 5.8;
echo "Round Result : " . round($ROUND) . "<br>";; // 6

// floor : float/double (return number down to the nearest Integer => 5.8 => 6)
$FLOOR = 4.8;
echo "FLOOR Result : " . floor($CEIL) . "<br>";; // 4

// sqrt : integer (return square root of a number => 9 => 3)
$SQRT = 9;
echo "SQRT Result : " . sqrt($SQRT) . "<br>";; // 3

// pow :  (return the power of another number => (2x3)2*2*2 => 8)
$POW_1 = 2;
$POW_2 = 3;
echo "POW Result : " . pow($POW_1,$POW_2) . "<br>";; // 8

// rand :  (Generate a random numbers => (1,10) => 5)
$RAND = rand(1,10);
echo "RAND Result : " .$RAND . "<br>";; // ?

// min :  (get the minimum values between numbers min(1,5,100)=> 1)
$MIN = min(1,5,100);
echo "MIN Result : " .$MIN . "<br>";; // 1

// max :  (get the maximum values between numbers max(1,5,100)=> 100)
$MAX = max(1,5,100);
echo "MAX Result : " .$MAX . "<br>";; // 100

?>