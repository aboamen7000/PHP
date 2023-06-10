<!-- For Loop -->

<?php

// Basic for loop
// for (start; end; state){
//}

//Method_1(Increment) : Declare a variable outside the for loop function, Integers
$i = 0;
for (;$i <= 5; $i++){
    echo $i . " Times<br>";
}

//Method_2(Increment) : Declare a variable inside the for loop function, Integers

for ($i = 0;$i <= 5; $i++){
    echo $i . " Times<br>";
}


//Method_3(Increment) : Looping through Arrays
$color = ['Red','Blue','Black','White','Yellow'];
$times = 0;
for(;$times < count($color); $times++){
    // echo $color[$times] . "<br>";
    echo $color[$times] . " | ";
}


//Method_4 : Nested for loop
for($i = 1; $i <= 3; $i++){
    for($j = 1; $j <= 3; $j++){
        echo $i ." | " . $j ."<br>";
    }
}

//Method_5(Decrement) : use for loop, with decreament
for ($i = 6;$i >= 1; $i--){
    echo $i . " Times<br>";
}

?>