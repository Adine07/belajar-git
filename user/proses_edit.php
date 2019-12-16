<?php

include '../koneksi.php';

$id = $_POST['id'];
$name = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['passwd'];

$data = " SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($connect, $data);
$row = mysqli_fetch_row($result);
$pas = $row[3];


if (empty($pass)) {
    $pass = $pas;
} else {
    $pass = md5($_POST['passwd']);
}

$sql = "UPDATE users SET name = '$name', email = '$email', password = '$pass' WHERE id = '$id'";
mysqli_query($connect, $sql);
header("location: index.php");

// echo $id;
// echo $name;
// echo $email;
// echo $pass;
