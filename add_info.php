<?php
require_once 'errors.php';
session_start();
require_once 'db_connect.php';
$uid = $_SESSION['uid'];
$name = $_POST['name'];
$age = $_POST['age'];
$desc = strip_tags($_POST['desc']);
$file = $_FILES['image'];

$upload_dir = 'photos';
$file_type = $file['type'];
$file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
$img_ext = ['jpeg', 'png', 'jpg', 'gif'];
$name_generate = $uid . '.' . $file_ext;
if (!in_array($file_ext, $img_ext)) {
    die('это не картинка');
}
$get_file_dir = move_uploaded_file($file['tmp_name'], "$upload_dir/$name_generate");
$stmt = $pdo->prepare(
    "UPDATE authentication
SET
  name = :name,
  age = :age,
  description = :desc,
  photo = :photo 
WHERE id = $uid"
);
$stmt->execute([
    ':name' => $name,
    ':age' => $age,
    ':desc' => $desc,
    ':photo' => $upload_dir . '/' . $name_generate,
]);
header('location: list.php');
