<?php

include "connection.php";

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   
    <title>SISTEM PENGURUSAN MAKLUMAT KAKITANGAN</title>

</head>
<body>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"><center>REKOD KURSUS KAKITANGAN ILP KOTA KINABALU</center></h1>
                
                <!-- /. ROW  -->
            
				 <div class="row">
                <div class="col-md-12">
                 
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
								<thead>

	<tr>
		<th>No. Kad Pengenalan</th>
		<th>Nama</th>
		<th>Gred</th>
		<th>Nama Kursus</th>
		<th>Anjuran</th>
		<th>Tempat Kursus</th>
		<th>Tarikh Mula</th>
		<th>Tarikh Tamat</th>
		<th>Tempoh</th>
		<th>Jumlah Hari Berkursus</th>
		<th>Pengkelasan</th>
		</tr>
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
		
</table>
		  <input  type="submit" name="submit" class="btn btn-success" onclick="window.print()" value="CETAK">   
			
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
