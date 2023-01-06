<?php 

if(isset($_POST['submit'])){

    echo "yesss it works";

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

<form action="form.php" method="post">

    <input type="text" placeholder="Enter Username"><br>
    <input type="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">

</form>
    
</body>
</html>