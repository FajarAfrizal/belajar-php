<html>
    <head>
    <link rel="stylesheet" href="tampil.css">
    </head>


<?php 
// menangkap data nama dengan method post
$nama = $_POST['nama'];
// menangkap data usia dengan method post
$sekolah = $_POST['sekolah'];
//menangkap no telpon dengan method post
$telpon = $_POST['telpon'];
// jenis 
$jeniskelamin = $_POST['jeniskelamin'];
//telpon ortu
$telpon1 = $_POST['telpon1'];
//ayah
$ayah = $_POST['ayah'];
//ibu
$ibu = $_POST['ibu'];
//alamat
$alamat = $_POST['alamat'];
 
// menampilkan data nama
echo " selamat $nama pendaftaran anda berhasil !";
echo "<br/>";
echo "<br/>";
echo "Biodata Anda";
echo "<br/>";
echo "<hr/>";
echo "Nama : " . $nama;
echo "<br/>";
// menampilkan data sekolah
echo "sekolah : " . $sekolah;
echo "<br/>";
// menampilkan data telpon siswa
echo "No . Telpon : " . $telpon;
echo "<br/>";
// menampilkan data jenis kelamin
echo "jenis kelamin :  " . $jeniskelamin;
echo "<br/>";
// menampilkan data no telpon orang tua
echo "No . Telpon Orang Tua : " . $telpon1;
echo "<br/>";
// menampilkan data nama ayah
echo "Nama Ayah : " . $ayah;
echo "<br/>";
// menampilkan data nama ibu
echo "Nama Ibu : " . $ibu;
echo "<br/>";
// menampilkan data alamat
echo "Alamat : " . $alamat;
?>
</html>