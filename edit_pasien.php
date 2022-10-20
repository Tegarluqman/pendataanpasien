<?php
include("koneksi.php");
if(!isset($_GET['id'])){
          header("Location:index.php?");
}
$kode=$_GET['id'];
$sql="SELECT*FROM tb_pasien WHERE id=$kode";
$query=mysqli_query($koneksi,$sql);
$tb_pasien=mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
          die ("data tidak ditemukan");
}

?>

          <head>
</head>
<body>
          <h1>form edit pasien</h1>
          <form action="proses_edit.php" method="POST">
                    <form>
                              <fieldset>
                                        <input type="hidden" name="id" value="<?php echo $tb_pasien['id']?>"/>
                                        <p>
                                                  <label for="nama">nama:</label>
                                                  <input type="text" name="nama" value="<?php echo $tb_pasien['nama']?>"/>
                                        </p>
                                        <p>
                                                  <label for="almt">alamat:</label>
                                                  <textarea name="almt" row="5" value="<?php echo $tb_pasien['almt']?>"></textarea>
                                        </p>
                                        <p>
                                                  <label for="jk">jenis kelamin:</label>
                                                  <label><input type="radio" name="jk" value="<?php echo $tb_pasien['jk']?>"/> Laki-laki</label>
                                                  <label><input type="radio" name="jk" value="<?php echo $tb_pasien['jk']?>"/> perempuan</label>
                                        </p>
                                        <p>
                                                  <label for="notelp">no. telepon:</label>
                                                  <input type="number" name="notelp" value="<?php echo $tb_pasien['notelp']?>"/>
                                        </p>
                                        <p>
                                                  <label for="agama">agama:</label>
                                                  <select name="agama" value="<?php echo $tb_pasien['agama']?>">
                                                  <option value="Islam">Islam</option>
                                                  <option value="Kristen">Kristen</option>
                                                  <option value="Katolik">Katolik</option>
                                                  <option value="Hindu">Hindu</option>
                                                  <option value="Budha">Budha</option>
                                                  <option value="Konghucu">Konghucu</option>
                                                  </select>
                                        </p>
                                        <p>
                                                  <label for="tanggal_masuk">tanggal masuk:</label>
                                                  <input type="date" name="tanggal_masuk" value="<?php echo $tb_pasien['tanggal_masuk']?>"/>
                                        </p>
                                        <p>
                                                  <label for="gejala">gejala:</label>
                                                  <input type="text" name="gejala" value="<?php echo $tb_pasien['gejala']?>"/>
                                        </p>
                                        <p>
                                                  <label for="tempat_lahir">tempat lahir:</label>
                                                  <input type="text" name="tempat_lahir" value="<?php echo $tb_pasien['tempat_lahir']?>"/>
                                        </p>
                                        <p>
                                                  <label for="tanggal_lahir">tanggal lahir:</label>
                                                  <input type="date" name="tanggal_lahir" value="<?php echo $tb_pasien['tanggal_lahir']?>"/>
                                        </p>
                                        <p>
                                                  <label for="no_kamar">no. kamar:</label>
                                                  <input type="number" name="no_kamar" value="<?php echo $tb_pasien['no_kamar']?>"/>
                                        </p>
                                        <p>
                                                  <input type="submit" value="Edit Pasien" name="ubah"/>
</p>
</fieldset>
</form>
</body>
</html>