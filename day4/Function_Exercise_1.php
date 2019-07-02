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
		<input type="number" name="n1">
		<input type="number" name="n2">
		<input type="submit" name="submit">
	</form>
</body>

</html>

<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

function mutiply2()
{
	return 3 * 6;
}
function mutiply($x, $y)
{
	return $x * $y;
}
echo 'Exercise 1.1: ' . mutiply2() . '<br>';
echo 'Exercise 1.2: ' . mutiply(5, 6) . '<br>';

if (isset($_POST['submit'])) {
	$number1 = $_POST['n1'];
	$number2 = $_POST['n2'];
	if ($number1 && $number2) {
		echo 'Exercise 1.3: ' . mutiply($number1, $number2);
	} else {
		echo 'Please provide two number!';
	}
}

/*
-- Exercise 1 :
	
	1.1
	Write a PHP script which multiply two numbers
	Example : 2*4 = 8

	1.2
	Write a function which :
	    - Take 2 numbers in parameters
	    - Returns the result of the multiplication of the two numbers
	    
	1.3
	Create a form that:
	- Allows to enter 2 numbers
	- Get the result of the multiplication of these 2 numbers
		(use the function created in 1.2)
	- Warning, it is necessary to manage the case where the user does not enter the two numbers.
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
- Exercise 2

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    The first number is larger (if the first number is larger than the second number)
    The first number is smaller (if the first number is smaller than the second number)
    The two numbers are identical (if the two numbers are equal)

*/

function comparison($x, $y)
{
	if ($x > $y) {
		echo 'The first number is larger';
	} elseif ($x < $y) {
		echo 'Second number is larger';
	} elseif ($x = $y) {
		echo 'The two numbers are identical';
	}
}
echo comparison(5, 8) . '<br>';
echo comparison(8, 5) . '<br>';
echo comparison(8, 8) . '<br>';

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Create an array of John's expenses.
	    - Calculates the sum of John's expenses over the year

	3.2
	Write a function that will:
	- Take an expense array as input
	- Calculate the sum of the expenses of the table
	- return this sum

*/
$expenses = array(
	'rent' => 35,
	'food' => 10,
	'fun' => 20,
);
$totalExpense = 0;
foreach ($expenses as $key => $value) {
	$totalExpense += $value;
}

function expenseCalc($array = [])
{
	$total = 0;
	foreach ($array as $key => $value) {
		$total += $value;
	}
	return $total . '€';
}

echo '3.1 Total:  ' . $totalExpense . '€' . '<br>';
echo '3.2 Function Total: ' . expenseCalc($expenses) . '<br>';

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

/*
-- Exercice 4

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to 
right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/
function palindromChecker($string)
{
	$stringArray = str_split($string, 1);
	$newArray = [];
	for ($i = count($stringArray) - 1; $i > -1; $i--) {
		array_push($newArray, $stringArray[$i]);
	}
	$reverseWord = implode('', $newArray);
	if ($string == $reverseWord) {
		echo 'The word is palindrome';
	} else {
		echo 'The word is not palindrome';
	}
}
$word = 'what';
$word2 = 'xanax';
echo palindromChecker($word) . '<br>';
echo palindromChecker($word2);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

/*
-- Exercice 5

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/
function prime($x)
{
	if ($x % 2 != 0) {
		echo 'It is not a prime number';
	} else {
		echo 'It is a prime number';
	}
}
echo prime(5) . '<br>';
echo prime(6);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*

-- Exercice 6
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/
function htmlImages($src)
{
	return '<img src=' . $src . '>';
}
$src = 'luffy.png';
echo htmlImages($src);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercice 7
Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/
function multi($x, $y = 2)
{
	return $x * $y;
}
echo multi(10, 2) . '<br>';
echo multi(4);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 8 </p>';

/*
-- Exercice 8 :
	Write a PHP function that return the reverse(mirror) of an array.
*/

function reverse($array = [])
{
	$reverseArray = [];
	for ($i = count($array) - 1; $i > -1; $i--) {
		array_push($reverseArray, $array[$i]);
	}
	return $reverseArray;
}
$exampleArray = ['a', 'b', 'c', 'd'];
var_dump(reverse($exampleArray));

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 9</p>';

/*	
-- Exercise 9
Write a function 'countWords($text)' that:
    - takes a string of characters in argument ($text)
    - calculate the number of words in the $text string
    - return the result
Hint: use a function that allows you to split a sentence into words (already seen in class)

*/
function countWords($string)
{
	$array = [];
	$array = explode(' ', $string);
	$sum = count($array);
	return $sum;
}

$text = 'Hello world whats up ?';
echo countWords($text);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 10 </p>';

/*
-- Exercice 10 :
Repeat the previous exercise and write a countEachWords($test) function that:
    - takes a string of characters in argument ($text)
    - for each word present in $text, calculate how many times this word appears
    - return the result as an associative array

For example : "this is a random sentence, it is totally random".
Expected result :
    array( "this" -> 1, 
            "is" -> 2,
            "a" -> 1,
            "random" -> 2
			....... );
*/

$random = "this is a random sentence, it is totally random";

function countEachWords($string)
{
	$array = [];
	$array = explode(' ', $string);
	$eachWordArray = [];
	foreach ($array as $key => $value) {
		if (isset($eachWordArray[$value])) {
			$eachWordArray[$value] = 1;
		} else {
			$eachWordArray[$value] += 1;
		}
	}
	return $eachWordArray;
}

echo '<pre>';
var_dump(countEachWords($random));
echo '</pre>';
echo '<br>';
