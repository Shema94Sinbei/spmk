<?php
include "connection.php";

$idsql = "SELECT no_kp FROM spmk_info";
$idquery = $conn->query($idsql);
$idrow = $idquery->fetch_assoc();

$no_kp = $_POST["no_kp"];
$nama = $_POST["nama"];
$gred = $_POST["gred"];
$emel = $_POST["emel"];

$sql = "UPDATE spmk_info SET no_kp = '$no_kp', nama = '$nama', gred = '$gred', emel = '$emel'  WHERE no_kp='$no_kp'";

if ($conn->query($sql) === TRUE){
	header("refresh: 0.1; url=kemaskini.php?id={$idrow['no_kp']}");
}else{
	echo ' 
	<script language="javascript">
	alert("ERROR: '. $sql . '<br>'. $conn->error;'");
	</script>
	';
	header("refresh: 0.1; url=update.php?id={$idrow['no_kp']}");
}
?>