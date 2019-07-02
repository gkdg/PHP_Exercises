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
		<input type="text" name="string">
		<br>
		<input type="submit" name="plane" value="plane">
		<br>
		<input type="submit" name="lowerCase" value="lowerCase">
		<br>
		<input type="submit" name="capital" value="capital">
		<br>
		<input type="submit" name="firstCapital" value="firstCapital">
		<br>
		<input type="submit" name="retreive" value="retreive">
		<br>
		<input type="submit" name="hyphen" value="hyphen">
	</form>
	<div>

	</div>
</body>

</html>
<?php
$text = '';
if (isset($_POST['plane'])) {
	$text = $_POST['string'];
	echo $text;
};
if (isset($_POST['lowerCase'])) {
	$text = $_POST['string'];
	echo strtolower($text) . '<br>';
};
if (isset($_POST['capital'])) {
	$text = $_POST['string'];
	echo strtoupper($text) . '<br>';
};
if (isset($_POST['firstCapital'])) {
	$text = $_POST['string'];
	echo ucfirst($text) . '<br>';
};
if (isset($_POST['retreive'])) {
	$text = $_POST['string'];
	$array = explode('.', $text);
	var_dump($array);
	$pos = strpos($text, ',');
	echo substr($text, $pos) . '<br>';
};
if (isset($_POST['hyphen'])) {
	$text = $_POST['string'];
	if (strpos($text, ' ') == false) {
		echo 'Enter at least two words';
	} else {
		echo str_replace(' ', '-', $text);
	}
}



/*

	1. Create an HTML form with a text field in a PHP script. The form will point to the same page.

	2. Create a `submit` button that sends the string input, and displays in a <div> this string in uppercase.

	3. Create a second `submit` button, which displays the string entered in lowercase

	4. Similarly, a submit to add a capital letter to each word
	
	5. And again a submit to add a capital letter, but only at the beginning of the chain.

	6. Now create a submit that will display the string only up to the '.' (point) not included
	  - Use the `explode` function for that.
	  - Now use the `strpos` and` substr` function to produce the same result.

	Bonus: Finally, create a submit that displays the first two words of the string entered, 
	separated by a hyphen ("-") If there are not enough words, display the message 
	"Enter at least two words"
*/
