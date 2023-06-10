<!-- GET And POST Request -->

<?php

// Html Form

echo '
<form method="GET" action="">
<label for="name">Name :</label>
<input type="text" name="name" id="name"></input>
<br><br>
<label for="email">email :</label>
<input type="email" name="email" id="email"></input>
<br><br>
<input type="submit" value="Submit"/>
</form>
';

// Process form Submission

// If statment
// if(Condition){
// ture
//}else
//{
//    false
//}

// Rettrieving Data from $_POST
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Dsiplay Submited Data
    echo "<h1> Submitted Data {POST}:</h1>";
    echo "Name :" . $name ."<br>";
    echo "Email :" . $email ."<br>";
}

// Rettrieving Data from $_GET
if (isset($_GET['name'])){
    
    $param1 = $_GET['name'];

    // Dsiplay Submited Data
    echo "<h1> Submitted Data {GET}:</h1>";
    echo "Name :" . $param1 ."<br>";

}

?>