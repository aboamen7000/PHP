<!-- Variables and data types -->


<?php

// String Variable
$name = "IA";
echo "My Name is : " . $name . "<br>";
echo "Finished<br>";

// Integer Variable
$age = 25;
echo "My Age is : " .$age . "<br>";

// Floating // Double (Variable)
$price = 10.25;
echo "The Price is : " .$price  . "$<br>";

// Boolean Variable (True, False) Condition
$Alive = True;
echo "The Status of the server : " .$Alive  . "<br>";
// Advanced Lvl of Boolean condtion, Using Tenary Operator
//(Condition ? true : false) ;
echo "The Status of the server : " .($Alive ? "On" : "Off") . "<br>";


// Array Variable
$Fruits = array("Banana","Apple","Orange");
echo "Fruits : ";
print_r($Fruits);
echo "<br>";

// Null Variable
$nothing = null;
echo "Nothing : " .$nothing . "<br>";

?>
