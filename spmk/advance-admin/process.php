<?php 
session_start();
require_once('connection.php');

    if(isset($_POST['submit']))
    {
		$query="SELECT * FROM admin where no_kp='".$_POST['no_kp']."' and no_laluan='".$_POST['no_laluan']."'";
		$result = mysqli_query($conn, $query);
		
		if(mysqli_fetch_assoc($result))
		{
			$_SESSION['User']=$_POST['no_kp'];
			header("location:indexAd.php");
		}
		else
		{
			echo "RALAT: ANDA TIADA DALAM SISTEM!";
		}
	}

?>