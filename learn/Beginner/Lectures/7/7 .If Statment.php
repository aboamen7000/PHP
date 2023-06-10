<!-- If Statment -->

<?php

// Method_1 : simple If statment

$my_age = 15;

if($my_age <= 20){
    echo "You are too young..";
}else{
    echo "You are old enough to enter this website, welcome..";
}


// Method_2 : Normal If statment
$temp = 42;

if ($temp > 25){
    echo "it's too hot";
} else {
    echo "it's too cold";
}


// Method_3 : Advance If statment
$Score = 85;

if ($Score > 85){
    echo "you are a clever you got more than ${Score}";
} elseif($Score <= 85 && $Score > 70) {
    echo "your score not bad : ${Score}";
}elseif($Score < 85 && $Score > 70) {
    echo "your score not bad : ${Score}";
}

?>