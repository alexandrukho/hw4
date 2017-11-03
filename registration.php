<?php
require_once 'db_connect.php';
/*$login = strip_tags(trim($_POST['login']));
$pwd = htmlspecialchars($_POST['pwd']);
$pwd2 = htmlspecialchars($_POST['pwd2']);
$link = mysqli_connect('localhost', 'root', '', 'auth');

$check_login = mysqli_query($link, "SELECT login FROM auth.users WHERE login = '$login'")->fetch_row(); //check login in db
$validation_login = "/\W/"; //only letters and numbers
$errors = [];
if ($login === '' || $pwd === '' || $pwd2 === '') {
    $errors[] = "Все строки должны быть заполнены";
} elseif ($check_login) { // if login in base
    $errors[] = "Логин {$login} уже существует, попробуйте другой";
} elseif (strlen($login) < 5 || strlen($login) > 30) {
    $errors[] = 'Логин должен быть не меньше 5 символов и не больше 30';
} elseif ($pwd !== $pwd2) {
    $errors[] = "Пароли не совпадают";
} elseif (strlen($pwd) < 6 || strlen($pwd2) < 6) {
    $errors[] = "Пароль должен содержать минимум 6 символов";
} elseif (preg_match($validation_login, $login)) { // убираем спец.символы
    $errors[] = "Логин должен содержать только буквы и цифры";
}
if (!empty($errors)) {
    foreach ($errors as $err) {
        echo "<b style='color: #ff5856'>" . $err . "</b>" . '<br>';
    }
} else {
    $options = [
        'cost' => 11,
        'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
    ];
    $pwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
    mysqli_query($link, "INSERT INTO auth.users (users.login, users.password) VALUES ('$login', '$pwd')");
}*/

$check = $pdo->prepare("SELECT login FROM authentication WHERE login = :login");
$check->execute([':login' => strip_tags($_POST['login'])]);

if ($check->fetchColumn()) {
    echo "Пользователь с таким логином уже зарегестрирован";
} else {
    $reg = $pdo->prepare("INSERT INTO authentication (login, pwd) VALUES (:login, :pwd)");
    if ($_POST['pwd'] === $_POST['pwd2']) {
        $reg->execute([':login' => $_POST['login'], ':pwd' => password_hash($_POST['pwd'], PASSWORD_DEFAULT)]);
        header('Location: /');
    } else {
        echo "Пароли должны совпадать";
    }
}
