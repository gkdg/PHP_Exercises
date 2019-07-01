<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $firstName = '';
    $lastName = '';
    $email = '';
    $password = '';
    $confirmPassword = '';
    $newsLetter = '';
    $agreement = '';
    $submit = '';

    if (isset($_POST['submitButton'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['passwordConfirmation'];
        $newsLetter = $_POST['newsLetter'];
        $agreement = $_POST['agreement'];
        $submit = $_POST['submitButton'];
    }


    if ($submit == 'submit') {
        if (strlen($email) > 8 && strlen($email) < 50 && strpos($email, '@') == true && $password == $confirmPassword) {
            echo '<h2>Success!</h2>';
        } else {
            echo '<h2>There is something wrong!</h2>';
        };
    }
    ?>

    <form action="" method="POST">
        <input type="text" name="firstName" placeholder="first name" value="<?php echo $firstName ?>" required>
        <input type="text" name="lastName" value="<?php echo $lastName ?>" placeholder="last name" required>
        <input type="email" name="email" value="<?php echo $email ?>" placeholder="e-mail">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="passwordConfirmation" placeholder="password confirmation">
        <input type="submit" value="submit" name="submitButton">
        <h3>
            Subscribe to the newsletter
            <input type="checkbox" name="newsLetter" value="true">
        </h3>
        <h3>
            I accept the conditions of use of the product
            <input type="checkbox" name="agreement" value="true" required>
        </h3>
    </form>

    <?php
    echo 'User: ' . $firstName . ' ' . $lastName . '<br>';
    echo 'E-mail: ' . $email . '<br>';
    echo 'Password: ' . $password . '<br>';
    echo 'Password Confirmation: ' . $confirmPassword . '<br>';
    echo 'News Letter Confirmation: ' . $newsLetter . '<br>';
    echo 'Agreement: ' . $agreement . '<br>';
    echo 'Submit: ' . $submit . '<br>';

    ?>

</body>

</html>
<!-- 
- Exercise : 

    -- Part 1 :
        Create two pages:
        - signin.php: User registration page, with the following fields:
            - Name
            - First name
            - E-mail
            - Password
            - Confirmation of password
            - Checkbox "Subscribe to the newsletter"

        - recap-signin.php: Page showing the summary of the information entered. -->