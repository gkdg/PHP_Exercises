<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<form action="" method="POST">
		<input type="email" name="email" placeholder="your e-mail">
		<input type="submit" name="submit">
	</form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	if (strpos($email, '@'))
		echo "Valid email, symbol found at " . strpos($email, '@');
}

/*
	 EXERCISE 1 :

		Write a PHP script that checks if an email address contains the @ symbol.
		If yes, display: "Valid email, symbol found at X". Otherwise display "Invalid email".

		To do your tests, you can create a "can" variable of the type $ mail = "simon@gmail.com";
	*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/**
	 EXERCICE 2 :

		Write a PHP script that removes all slashes from this string:
		$movies = "/Star Wars/Fight Club/Intouchables/Night Call//";
 **/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

$movies = "/Star Wars/Fight Club/Intouchables/Night Call//";
echo str_replace('/', ' ', $movies);

/**
	 EXERCICE 3 :

		Write a PHP script that replaces the word "random" with the word "beautiful" in this sentence:

		$sentence = "This is a random sentence";
 **/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';
$sentence = "This is a random sentence";
echo str_replace('random', 'beautiful', $sentence);

/**
	 EXERCICE 4 :

		Write a PHP script that displays the last word of a sentence using 2 functions:
			explode () and count ()
		
		You can use the previous sentence to test : $sentence = "This is a random sentence";
 **/
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';
$sentence = "This is a random sentence";
$array = explode(' ', $sentence);
var_dump($array[(count($array)) - 1]);

?>