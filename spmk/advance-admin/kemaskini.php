<?php
include "connection.php";
?>

<!DOCTYPE<!DOCTYPE html>
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
                                
								<a href="indexAd.php"><i class="fa fa-desktop "></i>Dashboard</a>
                            </li>  <li>
                                <a href="kemaskini.php"><i class="fa fa-desktop "></i>Kemaskini Maklumat Kakitangan</a>
                            </li>   
                    
                   <li>
                                <a href="cetakAd.php"><i class="fa fa-desktop "></i>Cetak Maklumat Kakitangan</a>
                            </li>
                    
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Kemaskini maklumat kakitangan</h1>
                   
                <!-- /. ROW  -->
              
           <div id="print">
<!-- Employee List -->
   <div class="row">
                <div class="col-md-12">
                 
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">

	<tr>
		<th>No. Kad Pengenalan</th>
		<th>Nama</th>
		<th>Gred</th>
		<th>E-mel</th>
		<th><center>Pilihan</th>
	</tr>
		<?php
		$sql = "SELECT * FROM spmk_info";
		$result = $conn->query($sql); 
		while($row = $result->fetch_assoc()){
		echo "
			<tr>
			<td>". $row['no_kp'] ."</td>
			<td>". $row['nama'] ."</td>
			<td>". $row['gred'] ."</td>
			<td>". $row['emel'] ."</td>
					
			<td><center>
			<button class='btn btn-success' onclick=document.location='update.php?no_kp={$row['no_kp']}'>Kemaskini</button>
			<button class='btn btn-danger' onclick=document.location='delete.php?no_kp={$row['no_kp']}'>Padam</button>
			</td>
			";
		}
		?>
		
		</tr>
</table>
</div>
                 
                    
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


