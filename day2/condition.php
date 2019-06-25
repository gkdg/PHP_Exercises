<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 5 Hero</title>
</head>

<body>

    <?php

    $hero_image = 'https://i.ebayimg.com/images/g/fSkAAOSwVA5aJnIq/s-l1600.jpg';
    echo '<img src=' . $hero_image . '>';
    $hero_first_name = 'Roronoa';
    $hero_last_name = 'ZORO';
    echo '<h1>' . $hero_first_name . ' ' . $hero_last_name . '</h1>';
    $hero_characteristics = array(
        'Attack' => 12,
        'Defense' => 8,
        'Charm' => 4,
        'Sword-Style' => 9,
    );
    echo 'Attack: ' . $hero_characteristics['Attack'] . '<br>';
    echo 'Defense: ' . $hero_characteristics['Defense'] . '<br>';
    echo 'Charm: ' . $hero_characteristics['Charm'] . '<br>';
    echo 'Sword-Style: ' . $hero_characteristics['Sword-Style'] . '<br>';
    ?>
    <?php
    if ($hero_characteristics['Attack'] > 9)
        echo '<div>
        <strong> Congrats! </strong> Your character is ready to fight!
        </div>';
    elseif ($hero_characteristics['Attack'] < 5) {
        echo '<div>
        <strong>Wait!</strong>Your character is too weak!
        </div>';
    };
    echo '<hr>';

    foreach ($hero_characteristics as $key => $value) {
        echo $key . ' : ' . $value . '<br>';
    };


    ?>

    </div>
    <div>

    </div>

</body>

</html>