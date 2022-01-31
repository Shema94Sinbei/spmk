<?php
include "connection.php";
session_start();
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
                                
								<a href="indexEmp.php"><i class="fa fa-desktop "></i>Dashboard</a>
                            </li> 
							<li>
                                <a href="maklumat.php"><i class="fa fa-desktop "></i>Maklumat Peribadi</a>
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
                        <h1 class="page-head-line">Maklumat Peribadi</h1>
                       

                    </div>
                </div>
                <!-- /. ROW  -->
				
		<?php
		$sql = "SELECT * FROM spmk_info WHERE no_kp='".$_SESSION['User']."'";
		$result = $conn->query($sql); 
		while($row = $result->fetch_assoc())
		{ 
		?>
				
				<div class="row">
            <div class="col-md-8 col-sm-8col-xs-12">
               <div class="panel panel-info">
			   <div class="text">
			
                <div class="panel-body">

                                <hr />
                                        <div class="form-group">
                                            <label> No. Kad Pengenalan</label>
                                            <input  name="no_kp" class="form-control" type="text" value="<?php echo $_SESSION["User"]?>" readonly > 
                                        </div>
                                 <div class="form-group">
                                            <label>Nama</label>
                                            <input  name="nama" class="form-control" type="text" value="<?php echo $row["nama"]?>" readonly>                                   
                                        </div>
										<div class="form-group">
                                            <label>Jantina</label>
                                            <input  name="nama" class="form-control" type="text" value="<?php echo $row["jantina"]?>" readonly>                                   
                                        </div>
                                          
										<div class="form-group">
                                            <label>No. Telefon</label>
                                            <input name="no_hp" class="form-control" type="text" value="<?php echo $row["no_hp"]?>" readonly>
                                     <p class="help-block">*0123456789</p>
                                        </div>
										<div class="form-group">
                                            <label>GRED</label>
                                            <input class="form-control" type="text" name="nama" onkeyup="this.value = this.value.toUpperCase();" 
											value="<?php echo $row["gred"]?>" readonly >                                   
                                        </div>
										 <div class="form-group">
                                            <label>Jabatan</label>
                                            <input name="jabatan" class="form-control" type="text" value="<?php echo $row["jabatan"]?>" readonly>
                                        </div>
										<div class="form-group">
                                            <label>E-mel</label>
                                            <input name="emel" class="form-control" type="text" value="<?php echo $row["emel"]?>" readonly>
                                        </div>
										
                                            <div class="form-group">
                                            <label>Alamat</label>
											 <input name="alamat" class="form-control" type="text" value="<?php echo $row["alamat"]?>" readonly>
										
                                          
                                        </div>
                               
                                       

                                    </form>
									
									 <?php 
									 
									 }
									 ?>
		
		<div class="col-md-1">
		<center><a href="maklumat.php" button type="submit" class="btn btn-success">KEMASKINI MAKLUMAT </a>
		</div>
	
                          </div>
						  
						 







						  </div>
													                          </div>
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
