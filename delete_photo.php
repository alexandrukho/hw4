<?php
include_once 'errors.php';
require_once 'db_connect.php';


$get_id = $_GET['id'];
$delete_photo = $pdo->prepare("SELECT photo FROM authentication WHERE id = :get_id");
$delete_photo->execute([':get_id' => $get_id]);
$path = $delete_photo->fetchColumn();
$stmt = $pdo->prepare("UPDATE authentication SET photo = '' WHERE id = :get_id");
$stmt->execute([':get_id' => $get_id]);

header('location: filelist.php');
