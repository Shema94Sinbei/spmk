<?php
session_start();
include('connection.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DAFTAR | SISTEM PENGURUSAN MAKLUMAT KAKITANGAN</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body> <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: #e6ffFF;" >
                <div class="header-right">
                <a href="loginEmp.php" class="btn btn-info" title="Log Masuk Kakitangan"> Log Masuk</a>
              

            </div>
<style="background-color: #3669ad;">
    <div class="container">
        <div class="row text-center " style="padding-top:18px;"><hr />
            <div class="col-md-12">
			   <img src="assets/img/JataNegara.png" style="width:120px;height:100px;"/> <img src="assets/img/ilpkk.png" style="width:170px;height:100px;" />
			   <h3 align="center"><b>INSTITUT LATIHAN PERINDUSTRIAN KOTA KINABALU</b></h3><BR>
			 <h4 align="center"><b>SISTEM PENGURUSAN MAKLUMAT KAKITANGAN | DAFTAR</b></h4>
			 
			          </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form action="addregister.php" method="POST">
                                   <hr /> <hr />
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil"  ></i></span>
                                            <input type="text" name="no_kp" class="form-control" placeholder="No. Kad Pengenalan "/>
											
										</div>
										<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Pengguna " />
											
										</div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="no_laluan"  class="form-control"  placeholder="Kata Laluan"/>
										
                                        </div>
										<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="no_laluan" class="form-control"  placeholder="Pengesahan Kata Laluan"/>
										
                                        </div>
                                                                        
									 <button type="submit" name="submit" class="btn btn-success" value="submit">DAFTAR</button>
									
                                    <hr />
                               
								 
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
