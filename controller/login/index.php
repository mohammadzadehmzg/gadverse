<?php
require_once "./app/database.php";

$db = new DATABASE();

//print_r($db->connection());
$bytes = random_bytes(20);
//var_dump(bin2hex($bytes));
if (isset($_POST['loginSubmission'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $isLogin = $db->login($username, $password);
    if ($isLogin) {
        header('location: ' . $BaseUrl . '/dashboard');
    } else {
        $message = "نام کاربری یا کلمه عبور اشتباه است!";
    }
}


require_once "./view/login/index.php";