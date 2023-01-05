<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accociative array</title>
</head>
<body>

<?php 

$number = array(10, 20, 49);

echo $number[2] . "<br>";

$names = array("first_name" => "Madarasi", "last_name" => "Dani");

print_r($names);

echo "<br>";

echo $names['first_name'] . " " . $names["last_name"];

?>
    
</body>
</html>