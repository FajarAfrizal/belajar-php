<html>
	  <head>
	    <title>PHP Test</title>
		<link rel="stylesheet" href="style.css">
	  </head>
	  <body>   
	 <!-- penanganan form dengan method POST -->
	<form method="post" action="tampil.php">
		<label>Nama Siswa</label><br/>
		<input type="text" name="nama"><br/>
		<label> Jenis Kelaminn</label>
		<select name="jeniskelamin">
		    <option value="Laki - laki">Laki - laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
		<br/>
		<br/>
		<label>Asal Sekolah</label><br/>
		<input type="text" name="sekolah"><br/>
        <label>No . Telpon </label><br/>
        <input type="text" name="telpon"><br>
		<label>No . Telpon Orang tua</label><br/>
		<input type="text" name="telpon1"><br/>
		<label>Nama Ayah</label><br/>
		<input type="text" name="ayah"><br/>
		<label>Nama Ibu</label><br/>
		<input type="text" name="ibu"><br/>
		<label>Alamat</label><br/>
		<input type="text" name="alamat"><br/>
		<input type="submit" value="daftar">
	</form>
	
	  </body>
	</html>