<!-- For Each -->

<?php

// $fruits = ["Bannana","Apple","Orange","Mango"];

// // Method_1 : Looping through an array
foreach($fruits as $fruit){
    // echo $fruit . " | " ;
    echo $fruit ."<br>" ;
}

// Method_2 : Associative Array
$student = [

//     // we need to use for loop
//     // ["name"=>"IA",
//     // "age"=>"25",
//     // "Score"=>"90",],

//     // ["name"=>"IA",
//     // "age"=>"25",
//     // "Score"=>"90",],


//     // we can use for each
//     //key=> value
    "name" => "IA",
    "age"=> 25,
    "Score"=> 90
];

foreach($student as $key => $value){
    echo $key ." : " .$value ."<br>";
}


// Method_3 : Looping through a string
$name = "Ibrahim"; // I | b | r | a | h | i | m
foreach(str_split($name) as $letter){
    echo $letter . " | ";
}
?>