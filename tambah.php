<?php include 'koneksi.php'; ?>
<html lang='id'>
<head>
<meta charset='UTF-8'>
<title>Tambah Data Mahasiswa</title>
</head>
<body>
<h2>Form Tambah Data</h2>
<form method='post'>
  Nama: <input type='text' name='nama'><br><br>
  NIM: <input type='text' name='nim'><br><br>
  Prodi: <input type='text' name='prodi'><br><br>
  <button type='submit' name='simpan'>Simpan</button>
</form>
<?php
if(isset($_POST['simpan'])){
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $prodi = $_POST['prodi'];
  $sql = "INSERT INTO mahasiswa (nama, nim, prodi) VALUES ('$nama','$nim','$prodi')";
  if(mysqli_query($koneksi, $sql)){
    echo 'Data berhasil disimpan!';
  } else {
    echo 'Gagal: ' . mysqli_error($koneksi);
  }
}
?>
</body>
</html>
