<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
-- Exercise 1 :

Write a recursive function that will:
- Take an integer (for xple $x) and display it.
- If $x is less than 50, display all numbers from $x to 50
*/

function display($x)
{
    if ($x < 30) {
        echo $x . '<br>';
        $x++;
        display($x);
    }
}
echo display(10) . '<br>';

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
-- Exercise 2 :

Write a recursive function that will calculate the multiplication of two numbers using only the addition.

*/
function multip($x, $y)
{
    if () {
        # code...
    }
    $res = $x + $x
}

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3 : 

Write a recursive function that will calculate the factorial of a number.
The factorial of 5 is 5! and equals to    5! = 5 * 4 * 3 * 2 * 1.
The factorial of 5 is therefore equal to 120 (5! = 120).
Here is the equation of a factorial: n! = n * (n - 1) * ... * 3 * 2 * 1
*/
