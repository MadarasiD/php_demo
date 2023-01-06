<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return values functions</title>
</head>
<body>

<?php 

function addNumbers( $number1, $number2 ) {

    $sum = $number1 + $number2;

    return $sum;

}

$result = addNumbers( 25, 55 );

echo $result;

echo "<br>";

$result = addNumbers( 58, $result );

echo "<br>";

echo $result;

?>
    
</body>
</html>