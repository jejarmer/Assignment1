<?php

echo "Example after link: /index.php?first=Joshua&last=Jarmer&age=22";
echo "<br>";
$firstname = $_GET['first'];
$lastname = $_GET['last'];
$age = $_GET['age'];
$firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
if (empty($firstname) || empty($lastname) || empty($age)) {
    echo "missing data";
}
if (isset($_GET['first']) && isset($_GET['last'])&& isset($_GET['age'])) {
    $firstname = $_GET['first'];
    $lastname = $_GET['last'];
	$age = $_GET['age'];
	echo "<br>";
	if (!empty($firstname) && !empty($lastname) && !empty($age)){
		echo htmlspecialchars("Hello, my name is $firstname $lastname. ");
		echo htmlspecialchars("I am $age years old and ");
		if ($age >= 18){
		echo htmlspecialchars("I am old enough to vote in the United States. ");
		}
		else{
			echo htmlspecialchars("I am not old enough to vote in the United States. ");
			$yearsleft = 18-$age;
			$daysleft = 365*$yearsleft;
			echo htmlspecialchars("I will be able to vote in about $daysleft days. ");
		}
	}
	
    if (empty($firstname) || empty($lastname) || empty($age)) {
		echo "missing data";
	}
} 
else {
    echo "Not set!";
}
echo "<br><br>";
echo date("m/d/y");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

</body>

</html>
