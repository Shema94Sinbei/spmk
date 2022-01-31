<?php 
session_start();
require_once('connection.php');

    if(isset($_POST['submit']))
    {
		$query="SELECT * FROM register where no_kp='".$_POST['no_kp']."' and no_laluan='".$_POST['no_laluan']."'";
		$result = mysqli_query($conn, $query);
		
		if(mysqli_fetch_assoc($result))
		{
			$_SESSION['User']=$_POST['no_kp'];
			header("location:indexEmp.php");
		}
		else
		{
			echo "RALAT.";
		}
	}

?>