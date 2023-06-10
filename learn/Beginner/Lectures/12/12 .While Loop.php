<!-- While Loop -->

<?php

// while (condition){
//}

// Method_1 : Basic While Loop

$i = 1;
while ($i <= 5){
    echo $i ." ";
    $i++;
}

// Method_2 : Looping Through an Array

$fruits = ['Banana',"Apple","Orange"];
$index = 0;

while ($index < count($fruits)){
    echo $fruits[$index] ." ";
    $index++;
}

// Method_3 : Looping With Condition Checker


$num = 1;

while ($num <=10){
    
    echo $num ." ";
    // method Break the whole function
    if($num == 5){
        break;
    }

    ////////////////////////////---//////

    // method Ignore the specific number
    if($num == 6){
        $num++;
        continue; // ignoring the currently function {condition}
    }

    echo $num . " ";
    $num++;
}

?>