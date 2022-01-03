<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['subject']);
unset($_SESSION['message']);

unset($_SESSION['error_username']);
unset($_SESSION['error_email']);
unset($_SESSION['error_subject']);
unset($_SESSION['error_message']);

function redirect () {
    header('Location: /contact.php');
}
$user_name = htmlspecialchars(trim($_POST['username']));
$from = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$_SESSION['username'] = $user_name;
$_SESSION['email'] = $from;
$_SESSION['subject'] = $subject;
$_SESSION['message'] = $message;

if (strlen($user_name) <= 1) {
    $_SESSION['error_username'] = "Ведите корестное имя";
    redirect ();
} elseif (strlen($from) < 5 || strpos($from, "@") === false) {
    $_SESSION['error_email'] = "Вы вели некорректный email";
    redirect ();
} elseif (strlen($subject) <= 5) {
    $_SESSION['error_subject'] = "Тема собщение не мение 5 символов";
    redirect ();
} elseif (strlen($message) <= 15) {
    $_SESSION['error_message'] = "Собщение не мение 15 символов";
    redirect ();
} else {
    print_r($message);
    redirect ();
}
