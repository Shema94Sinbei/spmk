<?php
session_start();
include 'connection.php';


?>
<!DOCTYPE html>
<html>
<head>
  <title>SISTEM PENGURUSAN MAKLUMAT KAKITANGAN</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
	<style>
		table, th, td 
		{
		border: 0.5px solid black;
		border-collapse: collapse;
		}
</style>
</head>
<body>
     
            
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2><center>REKOD KURSUS PERIBADI</center></h2>
	  <br>
      <table style="width:100%">
	  
		<thead>
		
            <tr>
           
			<th>Nama</th>
			<th>No. Kad Pengenalan</th>
			<th>Gred</th>
			<th>Senarai Kursus</th>
			<th>Jumlah Hari Berkursus</th>
			</tr>  
		  
        </thead>
        <tbody>
         <?php
				
			
		$sql = "SELECT spmk_info.nama, kursus_info.no_kp , spmk_info.no_kp, spmk_info.gred, kursus_info.kursus, kursus_info.jumlah
				FROM kursus_info
				INNER JOIN spmk_info ON kursus_info.no_kp = spmk_info.no_kp 
				WHERE kursus_info.no_kp='".$_SESSION['User']."'";
		
		
		$result = $conn->query($sql); 
		while($row = $result->fetch_assoc()){
		echo "
			<tr>
			<center>
			<td>". $row['nama'] ."</td>
			<td>". $row['no_kp'] ."</td>
			<td>". $row['gred'] ."</td>
			<td>". $row['kursus'] ."</td>
			<td>". $row['jumlah'] ."</td>
			</center>			
						";
			}
		?>
		  
          
        </tbody>
      </table>
<br>
      <div class="text-right">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">CETAK</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>