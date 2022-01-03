<?php
//print_r($_POST);
$name = $_POST['username'];
$email= $_POST['email'];
$pass = $_POST['password'];

if(trim($name) === "") {
    echo "Ві не ввели имя пользователя";
} elseif (strlen(trim($name)) <= 3) {
    echo "Такого имени не существует";
} elseif (trim($email) === "" || trim($pass) === "" || trim($_POST['message']) === "") {
    echo "Ведите все дание";
} else {
    $pass = md5($_POST['password']);
    echo "<h1>Все данные</h1><p>$name</p><p>$email</p><p>$pass</p><p>$_POST[message]</p>";
    header('Location: /about.php');
    die();
}