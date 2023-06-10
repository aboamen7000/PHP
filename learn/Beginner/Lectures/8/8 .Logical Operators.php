<!-- Logical Operators -->

<?php

// $permission == false or (!$permission)

$age = 19;
$permission = null;

// Method_1 :if statment with logical operator..
if($age >= 20) {
    $permission == true;
    if($permission == true){
        echo "You allowed to access this website..!";
    }else{
        echo "u soo young to get access this website..";
    }
}
else{
    $permission == false;
    if(!$permission){
        echo "u soo young to get access this website..";  
    }
}


// Method_2 :if statment with logical operator..
if ($age == "25" || $age == "21"){
    echo "u soo older enough to get access this website..<br>your age : ${age}"; 
}

// Method_3 :if statment with logical operator..
if ($age != "21"){
    echo "u are not 21<br> cause your currently age : ${age}"; 
}else{
    echo "u are 21"; 
}
?>