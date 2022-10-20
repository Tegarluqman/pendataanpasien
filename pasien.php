<?php
include("koneksi.php");?>
<h1>Data Pasien<h1>
          <form action="pasien.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
          <?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}?>
<?php
include("koneksi.php");?>
<html>
<head>
</head>
<body>

</form>

          

          <h4> <a href="index.php">kembali</a><h4>
          <table border="1">
          <tr>
          <th>id</th>
          <th>nama</th>
          <th>alamat</th>
          <th>jenis kelamin</th>
          <th>no.telepon</th>
          <th>agama</th>
          <th>tanggal masuk</th>
          <th>gejala</th>
          <th>tempat lahir</th>
          <th>tanggal lahir</th>
          <th>no. kamar</th>
          </tr>
         

<?php
include("koneksi.php");

	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$sql ="SELECT * FROM tb_pasien WHERE nama LIKE '%".$cari."%'";	
                    $query=mysqli_query($koneksi, $sql);                             			
	}else{
		$sql='SELECT*FROM tb_pasien';
                    $query=mysqli_query($koneksi, $sql);		
	}


while($tb_pasien=mysqli_fetch_array($query)){
          echo "<tr>";
          echo "<td>".$tb_pasien['id']."</td>";
          echo "<td>".$tb_pasien['nama']."</td>";
          echo "<td>".$tb_pasien['almt']."</td>";
          echo "<td>".$tb_pasien['jk']."</td>";
          echo "<td>".$tb_pasien['notelp']."</td>";
          echo "<td>".$tb_pasien['agama']."</td>";
          echo "<td>".$tb_pasien['tanggal_masuk']."</td>";
          echo "<td>".$tb_pasien['gejala']."</td>";
          echo "<td>".$tb_pasien['tempat_lahir']."</td>";
          echo "<td>".$tb_pasien['tanggal_lahir']."</td>";
          echo "<td>".$tb_pasien['no_kamar']."</td>";
          echo "<td>";
          echo "<a href='edit_pasien.php?id=".$tb_pasien['id']."'>Edit</a> |";
          echo "<a href='proses_hapus.php?id=".$tb_pasien['id']."'>Hapus</a>";
          echo "</tr>";
}
?>
</table>
</body>
</html>