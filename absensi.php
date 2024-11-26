<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Absensi</title>
</head>
<body>
  <h2>Masukkan Nama untuk Cek Kehadiran</h2>
  <form action="" method="post">
    <label for="nama">Nama :</label>
    <input type="text" id="nama" name="nama" require>
    <button type="submit">Cek Kehadiran</button>
  </form>

<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $absen = $_POST['nama'];

    switch (strtolower($absen)) {
      case 'agus':
      case 'asep':
      case 'joni':
      case 'jono':
        echo "hadir";
        break;

      case 'rabu':
      case 'kamis':
      case 'jumat':
      case 'sabtu':
        echo "itu nama hari";
        break;
      
      default:
        echo "itu anak kelas sebelas";
        break;
    }
  }

?>

</body>
</html>