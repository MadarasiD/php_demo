<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope</title>
</head>
<body>

<?php 

$x = "outside"; // global

function convert() {
global $x;

$x = "inside"; // local

}

echo $x;

echo "<br>";

convert();

echo $x;

echo "<br>";

echo $x;


?>
    
</body>
</html>