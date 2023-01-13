<?php include "db.php";

if(isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];


$query = "INSERT INTO users( username,password )";
$query .= "VALUES ('$username', '$password')";

$result = mysqli_query($connection, $query);


if(!$result) {

    die('Query FAILED' . mysqli_error());

}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Login php</title>
</head>
<body>

<div class="container h-100 d-flex justify-content-center align-items-center vw-75">
    <div class="vh-100 d-flex justify-content-center align-items-center">

        <form action="login_create.php" method="post">

            <div class="form-group">

                <label for="username">Username</label>

                <input type="text" name="username" class="form-control">

            </div>

            <div class="form-group">

             <label for="password">Password</label>

                <input type="password" name="password" class="form-control">

            </div>

            <input type="submit" name="submit" value="submit" class="btn btn-primary mt-2">


        </form>

    </div>

</div>
    
</body>
</html>