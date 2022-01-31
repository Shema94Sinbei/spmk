<?php
include "connection.php";

$sql = "SELECT * FROM spmk_info WHERE no_kp='".$_GET['no_kp']."'";
$query=$conn->query($sql) or die ("ERROR: {conn->error}");
$row = $query->fetch_assoc();
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
                        <h1 class="page-head-line">Kemaskini Maklumat Peribadi</h1>
                       

                    </div>
                </div>
                <!-- /. ROW  -->
			<div class="row">
            <div class="col-md-8 col-sm-8col-xs-12">
               <div class="panel panel-info">
			   
                <div class="panel-body">
                                <form action="processUpdate.php" method="POST">
                                    <hr />
                                        <div class="form-group">
                                            <label>No. Kad Pengenalan</label>
                                            <input  name="no_kp" class="form-control" type="text" value="<?php echo $row['no_kp']?>" readonly >               
                                        </div>
										<div class="form-group">
                                            <label>Nama</label>
                                            <input  name="nama" class="form-control" type="text" onkeyup="this.value = this.value.toUpperCase();" value="<?php echo $row['nama']?>">
                                    
                                        </div>
                                           
										<div class="form-group">
                                            <label>Gred</label>
                                            <select name="gred" class="form-control" value="<?php echo $row['gred']?>">
                                                <option>DV52</option>
                                                <option>DV44</option>
                                                <option>DV42</option>
                                                <option>DV41</option>
												<option>DV40</option>
                                                <option>DV38</option>
                                                <option>DV36</option>
                                                <option>DV30</option>
												<option>DV29</option>
                                                <option>DV19</option>
												<option>DG48</option>
                                                <option>DG44</option>
                                                <option>DG41</option>
												<option>S44</option>
                                                <option>S29</option>
												<option>S22</option>
												<option>N29</option>
                                                <option>N22</option>
												<option>N19</option>
                                                <option>N11</option>
												<option>N4</option>
												<option>FT19</option>
                                                <option>J19</option>
												<option>W19</option>
                                                <option>H11</option>
									    </select>
                                        </div>
										<div class="form-group">
                                            <label>E-mel</label>
                                            <input name="emel" class="form-control" type="text" value="<?php echo $row['emel']?>" >
                                        </div>
                                 <input  type="submit" class="btn btn-success" value="SIMPAN">
                                       

                                    </form>
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

