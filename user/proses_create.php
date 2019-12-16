<?php

include '../koneksi.php';

$name = $_POST['nama'];
$email = $_POST['email'];
$passwd = md5($_POST['passwd']);

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$passwd')";

mysqli_query($connect, $sql);
header('location:index.php');
