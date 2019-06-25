<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day1 Exercise File</title>
</head>

<body>


    <?php
    echo ' <h1>Hallo</h1> ';

    // ***Exercise 1***

    $fruit = array('Apple', 'Strawberry', 'Pineapple', 'Lemon');
    echo $fruit[2];

    // ***Exercise 2***

    $stock = array(
        'T-shirts' => 20,
        'Caps' => 10,
        'Shoes' => 5
    );
    echo $stock['Caps'] . '<br>';

    // ***Exercise 3***

    $stock['Caps'] += 5;
    echo $stock['Caps'] . '<br>';
    $stock['Shoes'] += 20;
    echo $stock['Shoes'] . '<br>';

    // ***Exercise 4***

    $contacts = array(
        'Ricardo' => array(
            'Tel' => '0677777777',
            'E-mail' => 'ricardo@gmail.com'
        ),
        'Michael' => array(
            'Tel' => '0606060606',
            'E-mail' => 'mj@gmail.com'
        ),
        'Emmanuel' => array(
            'Tel' => '0610101010',
            'E-mail' => 'manu@gmail.com'
        ),
    );

    echo $contacts['Ricardo']['Tel'] . '<br>';
    echo $contacts['Michael']['E-mail'] . '<br>';
    echo $contacts['Emmanuel']['Tel'] . '<br>';

    // ***Exercise 5***

    $hero_image = '';
    $hero_first_name = '';
    $hero_last_name = '';
    $hero_characteristics = array(
        'Attack' => 5,
        'Defense' => 8,
        'Charm' => 4,

    );


















    ?>

</body>

</html>