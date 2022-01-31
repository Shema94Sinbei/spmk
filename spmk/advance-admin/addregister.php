<?php
session_start();
include('connection.php');

$no_kp = $_POST['no_kp'];
$nama = $_POST['nama'];
$no_laluan = $_POST['no_laluan'];


$sql= "INSERT INTO  register (no_kp, nama, no_laluan) VALUES ('$no_kp','$nama','$no_laluan');";
mysqli_query($conn, $sql);

header("location:register.php");

?>