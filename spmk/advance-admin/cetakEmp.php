<?php
session_start();

include "connection.php";

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SISTEM PENGURUSAN MAKLUMAT KAKITANGAN</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
    <div id="wrapper">
          <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: #0089FF;" >
           

              <div class="header-right">

            
							   <br>
                <a href="loginEmp.php" class="btn btn-danger" title="Logout"><i class="fa fa-sign-in fa-2x"></i></a>

            </div>
			<div class="header-left">

               <br>
			  &nbsp;&nbsp; <img src="assets/img/JataNegara.png" style="width:120px;height:80px;" /> &nbsp;&nbsp;
                <img src="assets/img/ilpkk.png" style="width:120px;height:80px;" <p style="font-size:100px"><b>SISTEM PENGURUSAN MAKLUMAT KAKITANGAN INSTITUT LATIHAN PERINDUSTRIAN KOTA KINABALU</b></p>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                       
                     

                            <div class="inner-text" 
                             
                            <br />
                             
                            </div>
                       

                    </li>

<li>
<li>
                                
									<li>
                                
								<a href="indexEmp.php"><i class="fa fa-desktop "></i>Dashboard</a>
                            </li> 
							<li>
                                <a href="maklumat2.php"><i class="fa fa-desktop "></i>Maklumat Peribadi</a>
                            </li>   
                                   

                    <li>
                        <a href="kursus.php"><i class="fa fa-desktop "></i>Kursus </a>
                        
                    </li>
                    
                             <li>
                                <a href="cetakEmp.php"><i class="fa fa-desktop "></i>Cetak Maklumat  </a>
                            </li>
                     
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">cetak maklumat</h1>
                 
             <?php 
			$sql = "SELECT * FROM spmk_info WHERE no_kp='".$_SESSION['User']."'";
			$result = $conn->query($sql); 
			while($row = $result->fetch_array())
            {
			?>
			
			
			<div class="row">
                <div class="col-md-12">
                  
                      <div class="row">
            <div class="col-md-8 col-sm-8col-xs-12">
               <div class="panel panel-info">
                       
                <div class="panel-body">
                                <form action="addkursus.php" method="POST">
                                    <hr />
                                        <div class="form-group">
                                            <label>Nama </label>
                                            <input  name="nama" class="form-control" type="text" value="<?php echo $row["nama"]?>" readonly >
                                         
                                        </div>
                                 <div class="form-group">
                                            <label>No. Kad Pengenalan</label>
                                            <input  name="no_kp" class="form-control" type="text" value="<?php echo $row["no_kp"]?>" readonly>
                                    
                                        </div>
                                            <div class="form-group">
                                            <label>Gred</label>
                                            <input  name="gred" class="form-control" type="text" value="<?php echo $row["gred"]?>" readonly>
                                    
                                        </div>
										
                                    </form>
									
									<b>Senarai Kursus</b>
									
									  <?php 
			$sql = "SELECT * FROM kursus_info WHERE no_kp='".$_SESSION['User']."'";
			$result = $conn->query($sql); 
			while($row = $result->fetch_array())
            {
			?> 
			<form>
										<div class="form-group">
                                          

                                            <input  name="kursus" class="form-control" type="text" value="<?php echo $row["kursus"]?>" readonly>
											<input  name="jumlah" class="form-control" type="text" value="<?php echo $row["jumlah"]?> (Hari Berkursus)" readonly>
											
                                        </div>
										
                                   
                               </form>      
  


									
								<?php 
			}
			?>
			<?php
			$query= "SELECT SUM(jumlah) AS sum FROM kursus_info WHERE no_kp='".$_SESSION['User']."' ";
			$query_result = mysqli_query($conn, $query);
			while($row= mysqli_fetch_assoc($query_result)){
				$output= "".$row["sum"]; 
            }
			?>
			<b>Jumlah Hari Berkursus : &nbsp;</b>
			
			<?php 
			
				echo $output;
			?>



			<?php
			}
			?>
			
			
		        </div>
				<a href="cuba2.php" class="btn btn-primary">CETAK</a>
                </div>
                <div class="col-md-12">
                   
                   
                </div>
            </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
	
	


    <!-- /. WRAPPER  -->
    
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
     <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>

 
