<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing params functions</title>
</head>
<body>

<?php 

function greeting( $message ) {

    echo $message;
    echo "<br>";
    echo "<br>";

}

greeting("Szia, Hogy vagy?");

?>

<?php 

function calculate( $number1, $number2 ) {

    $sum = $number1 * $number2;

    echo $sum ;
   

}
calculate( 48, 348 );

?>



    
</body>
</html>