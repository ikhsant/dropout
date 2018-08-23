<?php
session_start();
require '../include/database.php';
// query setting
$setting = mysqli_fetch_assoc(mysqli_query($conn,'SELECT * FROM setting LIMIT 1'));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register <?php echo $setting['nama_website']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../assets/css/cerulean-bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.css">
</head>
<body style="background: lightgrey">
	<form method="post"  style="max-width: 350px; margin-top: 150px;margin: auto; margin-top: 50px; background: white; padding: 10px; border-radius: 10px">
    <p class="text-center"><img class="w3-padding" src="../uploads/logo/<?php echo $setting['logo']; ?>" style="width: 100px"></p>
    <h3 class="text-center"><?php echo $setting['nama_website']; ?></h3>
    <?php
    if(isset($_POST['submit'])){

      $nim = $_POST['nim'];
      $nama = $_POST['nama'];
      $jurusan = $_POST['jurusan'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $semester = $_POST['semester'];

      // cek nim ada
      $sql_mhs = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nim = '$nim'");

      // cek dengan if
      if (mysqli_num_rows($sql_mhs) > 0 ) {
        // jika nim sudah ada
        echo '<div class="alert alert-danger"><i class="fa fa-warning"></i> NIM sudah ada! silahkan login dengan username dan password nim</div>';
      }else{
        // jika nim tidak ada
        // input ke database
        mysqli_query($conn,"INSERT INTO mahasiswa (nim,nama,jenis_kelamin,jurusan,semester) VALUES ('$nim','$nama','$jenis_kelamin','$jurusan','$semester')");
        // set session
        $_SESSION['id_mahasiswa'] = '';
        $_SESSION['nama'] = $nama;
        $_SESSION['pesan'] = 'Selamat Datang '.$nama.' !';
        $_SESSION['akses_level'] ="mahasiswa";
       // redirek
        header("Location: quisioner_form.php");

      }

    }
    ?>
    <div class="form-group">
     <label>NIM</label>
     <input class="form-control" type="text" name="nim" placeholder="Masukan NIM" required>
   </div>
   <div class="form-group">
     <label>Nama</label>
     <input class="form-control" type="text" name="nama" placeholder="Masukan Nama" required>
   </div>
   <div class="form-group">
     <label>Jenis Kelamin</label>
     <select class="form-control" type="text" name="jenis_kelamin" required>
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
    </select>
  </div>
  <div class="form-group">
   <label>Jurusan</label>
   <select class="form-control" type="text" name="jurusan" required>
    <option value="Akuntansi">Akuntansi</option>
    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
    <option value="Ilmu Hukum">Ilmu Hukum</option>
    <option value="PGSD">PGSD</option>
    <option value="Manajemen">Manajemen</option>
    <option value="Sistem Inforamsi"> Sistem Inforamsi</option>
    <option value="Teknik Informatika">Teknik Informatika</option>
    <option value="Teknik Sipil">Teknik Sipil</option>
    <option value="Teknik Elektro">Teknik Elektro</option>
    <option value="Teknik Mesin">Teknik Mesin</option>

  </select>
</div>
<div class="form-group">
 <label>Semester</label>
 <input class="form-control" type="number" name="semester" placeholder="Masukan Semester" required>
</div>
<button class="btn btn-primary" type="submit" name="submit" ><i class="fa fa-pencil-square-o"></i> Register</button>
<a href="login.php" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</a>
</form>
</body>
</html>