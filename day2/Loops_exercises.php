<?php

/*
	- Exercise 1 :
		
		Based on the character exercise, display all his caracteristics using a loop.

	*/

$hero_characteristics = array(
	'Attack' => 12,
	'Defense' => 8,
	'Charm' => 4,
	'Sword-Style' => 9,
);

foreach ($hero_characteristics as $key => $value) {
	echo $key . ' : ' . $value . '<br>';
};

/*
	- Exercise 2 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85")
	    Write a script that will : 
	    1. Sort by value
	    2. Sort by key in descending order
	    3. Use a loop to calculate the total of his spendings.

	*/
$shopping = array(
	'Salad' => 1.03,
	'Tomato' => 2.3,
	'Oignon' => 1.85,
	'Red Cabbage' => 0.85,
);
echo asort($shopping) . '<br>';
echo var_dump($shopping) . '<br>';
echo krsort($shopping);
echo var_dump($shopping);
$total = 0;
foreach ($shopping as $key => $value) {
	echo $key . '<br>';
	$total += $value;
	echo $total . '<br>';
}
echo '<hr>';

/*
	- Exercise 3 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 2 etc.

		Do it by using a for AND a while loop
	*/
$arro = [];
$a = 0;
while ($a <= 20) {
	$arro[] = $a;
	$a++;
};
echo var_dump($arro);
echo '<hr>';


/*
	-Exercise 4 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/
$newArray = [];

for ($i = 0; $i < 21; $i++) {
	$newArray[] = $i * 2;
};
echo var_dump($newArray);
echo '<hr>';
/*
	-Exercise 5 :
		Create a random numerical array.
		Find the smallest value.
		Find the greatest value.
	*/
$randomNumbs = [];

for ($i = 0; $i < 11; $i++) {
	$randomNumbs[] = rand(-100, 100);
};
echo var_dump($randomNumbs);
echo '<hr>';
echo 'Smallest number: ' . min($randomNumbs) . '<br>';
echo 'Biggest number: ' . max($randomNumbs);
echo '<hr>';


$max = $randomNumbs[0];
$maxPos = 0;
$min = $randomNumbs[0];
$minPos = 0;
foreach ($randomNumbs as $key => $value) {
	if ($value > $max) {
		$max = $value;
		$maxPos = $key;
	};
	if ($value < $min) {
		$min = $value;
		$minPos = $key;
	};
};
echo 'Smallest number is: ' . $min . '<br>';
echo 'Biggest number is: ' . $max . '<br>';
echo '<hr>';
echo 'The position of smallest number is:' . array_search($min, $randomNumbs) . '<br>';
echo 'Biggest number is: ' . array_search($max, $randomNumbs) . '<br>';
echo '<hr>';
echo 'The position of smallest number is:' . $minPos . '<br>';
echo 'Biggest number is: ' . $maxPos . '<br>';
