<?php
$db_host ="localhost";
$db_username= "root";
$db_pass= "";
$db_name="spmk";
$conn=mysqli_connect($db_host,$db_username,$db_pass,$db_name) or die 
("could not connect to MySQL");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOG MASUK | SISTEM PENGURUSAN MAKLUMAT KAKITANGAN</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body> <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: #0089FF;" >
               
			
<style="background-color: #3669ad;">
    <div class="container">
        <div class="row text-center " style="padding-top:120px;">
            <div class="col-md-12">
			   <img src="assets/img/JataNegara.png" style="width:120px;height:100px;"/> <img src="assets/img/ilpkk.png" style="width:170px;height:100px;" />
			   <h3 align="center"><b>SISTEM PENGURUSAN MAKLUMAT KAKITANGAN</b></h3>
			   <h4 align="center"><b>PENTADBIR SISTEM</b></h4> 
			   
            </div>
        </div>
		
		
		
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form" action="process.php" method="POST">
                                    <hr />
                                    <h5>LOG MASUK</h5>
                                   
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input name="no_kp" type="text" class="form-control" placeholder="No. Kad Pengenalan"  required /> 
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input name="no_laluan" type="password" class="form-control"  placeholder="Kata Laluan" required /> 
                                        </div>
                                    <div class="form-group">
                                        
                                        </div>
                                     <input type="submit" name= "submit" class="btn btn-success" value="Masuk">
																		
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
