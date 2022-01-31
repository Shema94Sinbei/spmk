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
                        <h1 class="page-head-line">kursus</h1>
                   <!--     <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
           <div class="row">
            <div class="col-md-6 col-sm-6col-xs-12">
               <div class="panel panel-info">
                       
                  
							<div class="panel-body">
                                <form action="addkursus.php" method="POST">
                                    <hr />
                                        <div class="form-group">
                                            <label> No. Kad Pengenalan</label>
                                            <input  name="no_kp" class="form-control" type="text" value="<?php echo $_SESSION["User"]?>" readonly > 
                                        </div>
										<div class="form-group">
                                            <label>Nama Kursus</label>
                                            <input  name="kursus" class="form-control" type="text" onkeyup="this.value = this.value.toUpperCase();">
                                         
                                        </div>
                                 <div class="form-group">
                                            <label>Anjuran</label>
                                            <input  name="anjuran" class="form-control" type="text" onkeyup="this.value = this.value.toUpperCase();" >
                                    
                                        </div>
                                            <div class="form-group">
                                            <label>Tempat Kursus</label>
                                            <input  name="tempat" class="form-control" type="text" onkeyup="this.value = this.value.toUpperCase();">
                                    
                                        </div>
										<div class="form-group">
                                            <label>Tarikh Kursus</label>
                                            <input  name="mula" class="form-control" type="date" >
                                        </div>
										<div class="form-group">
                                            <label>Tarikh Tamat</label>
                                            <input  name="tamat" class="form-control" type="date" >
                                        </div>
										<div class="form-group">
                                            <label>Tempoh</label>&nbsp;(Jam)
                                            <input  name="tempoh" class="form-control" type="number" placeholder="6 Jam = 1 Hari" >
										</div>
										<div class="form-group">
                                            <label>Jumlah Hari</label>
                                            <input  name="jumlah" class="form-control" type="number" >
										</div>
										<div class="form-group">
                                            <label>Pengkelasan</label>
                                            <div class="radio" >
                                                <label>
                                                <input type="radio" name="kelas" value="1" checked="">1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="kelas" value="2">2
                                                </label>
                                            </div>
											<div class="radio">
                                                <label>
                                                <input type="radio" name="kelas" value="3">3
                                                </label>
                                            </div>
											<div class="radio">
                                                <label>
                                                <input type="radio" name="kelas" value="4">4
                                                </label>
                                            </div>
                                        </div>
										<input  type="submit" name="submit" class="btn btn-success" value="SIMPAN">
                                        
									   

                                    </form>
                          </div>  
						  
                        </div>
						
						
                            </div> 
							
							<div class="col-md-6">
                         <div class="panel panel-info">
                       <div class="panel-heading">
                           <h4><b><center>PENGKELASAN PROGRAM LATIHAN</center></b></h4>   
                        </div>
						
                         <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>BIL</th>
                                            <th>PROGRAM LATIHAN </th>
                                            <th>JENIS AKTIVITI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>1</b></td>
                                            <td><b>Latihan</b> : Aktiviti yang dijalankan selama 6 jam secara bersemuka dan 
											berterusan anjuran Jabatan, Bahagian atau agensi luar di dalam dan luar negara</td>
                                            <td>
											<li>Kursus</li>
											<li>Seminar</li>
											<li>Konvensyen</li>
											<li>Bengkel</li>
											<li>Forum</li>
											<li>Simposium dan persidangan</li></td>
                                        </tr>
                                        <tr>
                                             <td><b>2</b></td>
                                             <td><b>Sesi Pembelajaran (Bersemuka)</b> : Aktiviti atau pembelajaran secara bersemuka yang
											 tempohnya kurang daripada 6 jam anjuran Jabatan, Bahagaian atau agensi luar di dalam negara </td>
                                            <td><li>Sesi pembelajaran</li><li>Perhimpunan bulanan</li><li>Program penerapan nilai-nilai murnni dan ceramah-ceramah khas</li><li>
											Program sambutan/ program khas sambutan bulan-bulan Islam/ perayaan yang mengandungi ucapan/ ceramah/ forum</li><li>
											Pembentang kertas di seminar/ konvesyen/ simposium dan persidangan</li><li>Menyampaikan ceramah di dalam kursus/ bengkel 
											(Modul yang pertama kali dibentang atas tajuk yang sama sahaja diambil kira)</li> </td>
                                        </tr>
                                        <tr>
                                             <td><b>3</b></td>
                                            <td><b>Sesi Pembelajaran (Tidak Bersemuka)</b> : Sebarang aktiviti atau pembelajaran secara tidak bersemuka dan tidak berterusan 
											yang tempohnya kurang daripada 6 jam anjuran Jabatan, Bahagaian atau agensi luar di dalam negara </td>
                                            <td>
											<li>Lawatan Kerja</li>
											<li>On the job training</li>
											<li>Latihan Sangkutan</li>
											<li>Simulasi</li>
											<li>Lain-lain (seperti kajian kes, tayangan filem, under study)</li>
											<li>Kursus tidak semestinya berbentuk formal <i>"training"</i></li>
											</td>
                                        </tr>
										<tr>
                                             <td><b>4</b></td>
                                            <td><b>Pembelajaran  Kendiri</b> : Kaedah pembelajaran yang berkonsepkan belajar atas daya usaha sendiri. Pembelajaran melibatkan 
											secara tidak bersemuka(online)</td>
                                            <td><li>Penggunaan Portal ePembelajaran Sektor Awam (ESPA)- maksima 18 jam bersamaan 3 hari untuk setahun</li>
											<li>Penggunaan Portal ePembelajaran yang diiktirafoleh Jabatan/ Kementerian </li>
											<li>Penggunaan Pangkalan Repositori ilmu Sumber Manusia</li>
											<li>Pembacaan buku-buku ilmiah dalam Bahasa Malaysia dan Inggeris(termasuk e-book)</li>
											<li>PembacaanJurnal ilmiah/ Laporan kajian dan lain-lain bahan ilmiah secara fizikal atau maya</li>
											</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
							</div>
							
							
							

							</div>
							</div></div></div>
							
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
									
                            <br />
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
