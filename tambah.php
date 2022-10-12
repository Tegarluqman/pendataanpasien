<html>
          <head>
</head>
<body>
          <center><h1>FORM TAMBAH PASIEN</h1>
          <form action="proses-tambahpasien.php" method="POST">
                    <table border="1";>
                    <form>
                              <fieldset>
                                        <p>
                                                  <label for="nama">nama:</label>
                                                  <input type="text" name="nama"/>
                                        </p>
                                        <p>
                                                  <label for="almt">alamat:</label>
                                                  <textarea name="almt" row="5"></textarea>
                                        </p>
                                        <p>
                                                  <label for="jk">jenis kelamin:</label>
                                                  <label><input type="radio" name="jk" value="laki-laki"/> Laki-laki</label>
                                                  <label><input type="radio" name="jk" value="perempuan"/> perempuan</label>
                                        </p>
                                        <p>
                                                  <label for="notelp">no. telepon:</label>
                                                  <input type="number" name="notelp"/>
                                        </p>
                                        <p>
                                                  <label for="agama">agama:</label>
                                                  <select name="agama">
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
                                                  <input type="date" name="tanggal_masuk"/>
                                        </p>
                                        <p>
                                                  <label for="gejala">gejala:</label>
                                                  <input type="text" name="gejala"/>
                                        </p>
                                        <p>
                                                  <label for="tempat_lahir">tempat lahir:</label>
                                                  <input type="text" name="tempat_lahir"/>
                                        </p>
                                        <p>
                                                  <label for="tanggal_lahir">tanggal lahir:</label>
                                                  <input type="date" name="tanggal_lahir"/>
                                        </p>
                                        <p>
                                                  <label for="no_kamar">no. kamar:</label>
                                                  <input type="number" name="no_kamar"/>
                                        </p>
                                        <p>
                                                  <input type="submit" value="Tambah Pasien" name="tambah"/>
</p>
</fieldset>
</form>
</center>
</body>
</html>