<?php
session_start ();
echo ' Welcome ' . $_SESSION['User'];
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
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: #1976d2;" >
           
              <div class="header-right">

            
							   <br>
                <a href="loginEmp.php" class="btn btn-danger" title="Logout"><i class="fa fa-sign-in fa-2x"></i></a>

            </div>
			
			<div class="header-left">

               <br>
			  &nbsp;&nbsp; <img src="assets/img/JataNegara.png" style="width:120px;height:80px;" /> &nbsp;&nbsp;
               <img src="assets/img/ilpkk.png" style="width:120px;height:80px;" <p style="font-size:100px"><b>SPMK | SISTEM PENGURUSAN MAKLUMAT KAKITANGAN INSTITUT LATIHAN PERINDUSTRIAN KOTA KINABALU</b></p>

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
                        <h1 class="page-head-line">DASHBOARD</h1>
                       
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-box mb-pink">
                            <a href="#">
                              <h3><b>VISI</b></h3>
								<h4>Menjadi Organisasi Peneraju Dalam Membangunkan Tenaga Kerja yang Berdaya Saing</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-box mb-pink">
                            <a href="#">
                             <h3><b>MISI</b></h3>
								<h4>Mengeluarkan Tenaga Kerja yang Berdaya Saing                                    </h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-box mb-pink">
                            <a href="#">
                               <h3><b>OBJEKTIF</b></h3>
								<h4>Membantu ke Arah Penggunaan Teaga Manusia yang Optimum melalui Program Latihan Perindustrian</h4>
                            </a>
                        </div>
                    </div>
 <div class="col-md-12">
                        <div class="main-box mb-pink">
                            <a href="#">
                             <h3><b>PERANAN DAN FUNGSI JABATAN</b></h3>
								<h4>Menyedia dan menjalankan program latihan kemahiran pra-perkerjaan untuk memenuhi keperluan sektor perindustrian di Malaysia.
Meningkatkan taraf kemahiran pekerja untuk sektor perindustrian</h4>
                            </a>
                        </div>
                    </div>
                </div>
               
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
