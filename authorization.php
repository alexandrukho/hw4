<?php
require_once 'errors.php';
session_start();
require_once 'db_connect.php';
/*
$login = htmlspecialchars(trim($_POST['login']));
$pwd = htmlspecialchars(trim($_POST['pwd']));
$link = mysqli_connect('localhost', 'root', '', 'auth') or die("ERROR: " . mysqli_error($link));

$query = "SELECT * FROM auth.users WHERE auth.users.login = '$login' AND auth.users.password = md5('$pwd')";
$result = mysqli_query($link, $query) or die("ERROR: " . mysqli_error($link));
if (mysqli_num_rows($result) != 0) {
    $options = [
        'cost' => 11,
        'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
    ];
    $pwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
    setcookie('id', $login, time() + 3600*24*7);
    setcookie('pwd', $pwd, time() + 3600*24*7);

} else {
    echo "Неправильный логин или пароль";
}*/
$stmt = $pdo->prepare("SELECT id, pwd FROM authentication WHERE login = :login");
$stmt->execute([':login' => $_POST['login']]);
$user = $stmt->fetch();
$selectHash = $user['pwd'];
$hash = password_verify($_POST['pwd'], $selectHash);
if ($hash) {
    $_SESSION['uid'] = $user['id'];
    header('location: info.php');

} else {
    echo "Неправильный логин или пароль";
}
