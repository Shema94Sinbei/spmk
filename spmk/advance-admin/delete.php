<?php
include "connection.php";

$no_kp = $_GET["no_kp"];

$sql = "DELETE FROM spmk_info WHERE no_kp='$no_kp'"; 

if ($conn->query($sql) === TRUE){
	header("refresh: 0.1; url=indexAd.php");
}else{
	echo '
	<script language="javascript">
	alert("ERROR: '. $sql . '<br>'. $conn->error;'");
	</script>
	';
	header("refresh: 0.1; url=indexAd.php");
}
?>