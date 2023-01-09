<?php 

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if($connection) {
    echo "We are connected";
} else {
    die("Database connection fail");
}

$query = "SELECT * FROM users";


$result = mysqli_query($connection, $query);


if(!$result) {

    die('Query FAILED' . mysqli_error($link));

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

    <?php 
    
    while($row = mysqli_fetch_assoc($result)) {

        ?>

        <pre>

        <?php

        print_r($row);

        ?>

        </pre>

        <?php

    }
    
    ?>
       

    </div>

</div>
    
</body>
</html>