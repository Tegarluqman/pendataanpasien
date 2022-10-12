<?php
include ("koneksi.php");
if(isset($_POST['ubah'])){
          $nama=$_POST['nama'];
          $almt=$_POST['almt'];
          $jk=$_POST['jk'];
          $notelp=$_POST['notelp'];
          $agama=$_POST['agama'];
          $tanggal_masuk=$_POST['tanggal_masuk'];
          $gejala=$_POST['gejala'];
          $tempat_lahir=$_POST['tempat_lahir'];
          $tanggal_lahir=$_POST['tanggal_lahir'];
          $no_kamar=$_POST['no_kamar'];


          $sql =UPDATE `tb_pasien` SET `id`='[value-1]',`nama`='[value-2]',`almt`='[value-3]',`jk`='[value-4]',`notelp`='[value-5]',`agama`='[value-6]',`tanggal_masuk`='[value-7]',`gejala`='[value-8]',`tempat_lahir`='[value-9]',`tanggal_lahir`='[value-10]',`no_kamar`='[value-11]' WHERE 1
          $query = mysqli_query($koneksi, $sql);

          if($query){
                    header('Location:barang.php');
          }else{
                    die ("gagal mengedit");
          }}else{
                    die("akses dilarang");
          }

          ?>