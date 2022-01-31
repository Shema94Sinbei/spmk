<?php
session_start();
include "connection.php";


$no_kp = $_POST['no_kp'];
$nama = $_POST['nama'];
$jantina = $_POST['jantina'];
$no_hp = $_POST['no_hp'];
$gred = $_POST['gred'];
$jabatan = $_POST['jabatan'];
$emel = $_POST['emel'];
$alamat = $_POST['alamat'];


$sql= "INSERT INTO  spmk_info (no_kp, nama, jantina, no_hp, gred, jabatan, emel, alamat) 
VALUES ('$no_kp','$nama', '$jantina', '$no_hp','$gred','$jabatan','$emel', '$alamat');";
mysqli_query($conn, $sql);

$sql1 = "UPDATE spmk_info SET no_kp = '$no_kp', nama = '$nama', jantina = '$jantina' , no_hp = '$no_hp' , gred = '$gred' , jabatan = '$jabatan' ,
emel = '$emel' , alamat = '$alamat' WHERE no_kp= '$no_kp'";
mysqli_query($conn , $sql1);
#echo "Maklumat anda telah di kemaskini."

header("location:maklumat2.php");

?>


