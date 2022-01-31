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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="print.css" media="print">
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
                                
								<a href="indexAd.php"><i class="fa fa-desktop "></i>Dashboard</a>
                            </li> 
							<li>
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
                        <h1 class="page-head-line">cetak maklumat kakitangan</h1> 
					
						<input id="myInput" type="text" placeholder="Search Keyword">     
											
                <!-- /. ROW  -->
            
				 <div class="row">
                <div class="col-md-12">
                 
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">

	<tr>
		<th>No. Kad Pengenalan</th>
		<th>Nama</th>
		<th>Gred</th>
		<th>Nama Kursus</th>
		<th>Anjuran</th>
		<th>Tempat Kursus</th>
		<th>Tarikh Mula</th>
		<th>Tarikh Tamat</th>
		<th>Tempoh (Jam)</th>
		<th>Jumlah Hari Berkursus</th>
		<th>Pengkelasan</th>
		</tr>
		<tbody id="myTable">
		<?php
				
		$sql = "SELECT kursus_info.no_kp, spmk_info.no_kp, spmk_info.nama, spmk_info.gred, kursus_info.kursus, kursus_info.anjuran, kursus_info.tempat, kursus_info.mula,
				kursus_info.tamat, kursus_info.tempoh, kursus_info.jumlah, kursus_info.kelas 
				FROM kursus_info
				INNER JOIN spmk_info ON kursus_info.no_kp = spmk_info.no_kp ";
		
		
		
		
		$result = $conn->query($sql); 
		while($row = $result->fetch_assoc()){
		echo "
			<tr>
			<td>". $row['no_kp'] ."</td>
			<td>". $row['nama'] ."</td>
			<td>". $row['gred'] ."</td>
			<td>". $row['kursus'] ."</td>
			<td>". $row['anjuran'] ."</td>
			<td>". $row['tempat'] ."</td>
			<td>". $row['mula'] ."</td>
			<td>". $row['tamat'] ."</td>
			<td>". $row['tempoh'] ."</td>
			<td>". $row['jumlah'] ."</td>
			<td>". $row['kelas'] ."</td>	
						";
		}
		?></tr>
		 </tbody>
</table>
		 <!-- <input  type="submit" name="submit" class="btn btn-success" onclick="window.print()" id="print-btn" value="CETAK"> 
			<button onclick="lol.php">HTML Tutorial</button>
			<a href="lol.php" class="btn btn-danger" title="CETAK">-->
			  <a href="cuba.php" class="btn btn-primary">CETAK</a>
			  
</div>
                 
                    
                </div>
            </div>
                <!-- /. ROW  -->

            </div>
                <div class="col-md-12">
                     
                </div>
            </div>
               

            </div>
            
        </div>
       
    </div>
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
