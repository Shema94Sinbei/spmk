<?php
session_start();

include "connection.php";

$no_kp = $_POST['no_kp'];
$kursus = $_POST['kursus'];
$anjuran = $_POST['anjuran'];
$tempat = $_POST['tempat'];
$mula = $_POST['mula'];
$tamat = $_POST['tamat'];
$tempoh = $_POST['tempoh'];
$jumlah = $_POST['jumlah'];
$kelas = $_POST['kelas'];

$sql= "INSERT INTO  kursus_info ( no_kp, kursus, anjuran, tempat, mula, tamat, tempoh, jumlah, kelas) 
VALUES ('$no_kp', '$kursus', '$anjuran', '$tempat','$mula','$tamat', '$tempoh', '$jumlah', '$kelas');"; 
mysqli_query($conn, $sql);

header("location:kursus.php");

?>

