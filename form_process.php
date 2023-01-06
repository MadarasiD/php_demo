<?php 

if(isset($_POST['submit'])){

    $name = array("Dani", "Madarasi", "Péter", "Karád", "Tom");

    $minimum = 5;
    $maximum = 10;

 $username = $_POST['username'];
 $password = $_POST['password'];

 if(strlen($username) < $minimum ) {

    echo "<h1>Username has to be longer than five!</h1>";

 }

 if(strlen($username) > $maximum ) {

    echo "<h1>Username cannot be longer than ten!</h1>";

 }

 if(in_array($username, $name)){

    echo "Sorry, you are not allowed";

 } else {

    echo 'Welcome';

 }
 

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<form action="form_process.php" method="post">

    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">

</form>
    
</body>
</html>