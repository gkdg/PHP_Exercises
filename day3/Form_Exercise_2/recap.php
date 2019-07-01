<?php
$firstName = '';
$lastName = '';
if (isset($_GET['submitButton'])) {
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $confirmPassword = $_GET['passwordConfirmation'];
    $email = $_GET['email'];
    $newsLetter = $_GET['newsLetter'];
}
echo 'User: ' . $firstName . ' ' . $lastName . '<br>';
echo 'E-mail: ' . $email . '<br>';
echo 'Password: ' . $password . '<br>';
echo 'Password Confirmation: ' . $confirmPassword . '<br>';
echo 'News Letter Confirmation: ' . $newsLetter . '<br>';

if (strlen($email) > 8 && strlen($email) < 50 && strpos($email, '@') == true && $password == $confirmPassword) {
    echo 'Success!';
} else {
    echo 'There is something wrong!';
};

?>
