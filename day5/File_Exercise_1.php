<?php

/*
		1. Create a PHP script that will display the contents of a message.txt file, located in the same 
		folder as this script.

		2. View the contents of the transform_to_table.txt file in an HTML table.
	*/




//1.
// Create a file, populate it and display it
$file_handle = fopen('message.txt', 'w');
$file_content = 'Some random text';
fwrite($file_handle, $file_content);
echo $file_content . '<br>';
fclose($file_handle);

// Display the file
$file_get = fopen('users.txt', 'r');
while (!feof($file_get)) {
	$line = fgets($file_get);
	echo $line . '<br>';
}

//2.

$htmlFile = fopen('transform_to_table.txt', 'r');

echo $htmlFile;

while (!feof($htmlFile)) {
	$line = fgets($htmlFile);
	echo '<td>' . $line . '</td>';
}
