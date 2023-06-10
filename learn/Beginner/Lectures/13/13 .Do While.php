<!-- Do-While Loop -->

<?php
// do{
// codes
//}
// while (condition);

// Method_1 : Basic Do-While Loop
$i = 1;

do{
    echo $i . " ";
    $i++; // Static incrment by +1
    // $i = $i + 1; // Custome value to increment
    // $i+=1; // Custome value to increment
}while($i <= 5);


// Method_2 : Looping ThroughAn Array
$fruits = ["Banana","Mango","Orange"];
$i = 0;

do{
    echo $fruits[$i] . " | ";
    $i++; // Static incrment by +1
}while($i < count($fruits));


// Method_3 : Looping with a condition Checker

$num = 1;

do{
    echo $num . " ";

    if($num == 5){
        break;
    }

    $num++;
}while($num <= 100);
?>