<!-- Switcher -->

<?php

$day = "Friday";

switch ($day) {
    case "Saturday":
        echo "this is not monday, its ($day)";
        break;

    case "Sunday":
        echo "this is Sunday";
        break;

    case "Monday":
        echo "this is monday";
        break;

    case "Monday":
        echo "this is monday"; 
        break;

    default:
        echo "it's neither Sunday";
        break;
}


$age = "19";

switch ($age) {
    case "19":
        echo "we found your age in our Services : {$age}";
        break;

    case "29":
        echo "we found your age in our Services : {$age}";
        break;

    case "30":
        echo "we found your age in our Services : {$age}";
        break;

    default:
        echo "your age not found on our server : {$age}";
        break;
}
?>