<?php 
// menangkap data nama dengan method post
$nama = $_POST['nama'];
// menangkap data usia dengan method post
$sekolah = $_POST['sekolah'];
//menangkap no telpon dengan method post
$telpon = $_POST['telpon'];
 
// menampilkan data nama
echo "Nama anda adalah " . $nama;
echo "<br/>";
// menampilkan data usia
echo "sekolah anda adalah " . $sekolah;
echo "<br/>";
echo "No . Telpon anda adalah" . $telpon;
?>