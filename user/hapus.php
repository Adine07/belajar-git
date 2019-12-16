<?php

include '../koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = '$id'";
mysqli_query($connect, $sql);
header('location: index.php');
