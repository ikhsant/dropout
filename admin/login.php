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
	<title>Login <?php echo $setting['nama_website']; ?></title>
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
      $user = mysqli_real_escape_string($conn,$_POST["user"]);
      $pass = mysqli_real_escape_string($conn,sha1($_POST['pass']));
      $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$user' AND password = '$pass' ");
      $row = mysqli_fetch_assoc($result);

      // cek login mahasiswa
      $pass2 = mysqli_real_escape_string($conn,$_POST['pass']);
      $result2 = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nim = '$user' AND nim = '$pass2' ");
      $row2 = mysqli_fetch_assoc($result2);

      // cek di db
      if(mysqli_num_rows($result) > 0){
        $_SESSION['username'] = $user;
        $_SESSION['foto'] = $row['foto'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['akses_level'] ="admin";
        $_SESSION['pesan'] = 'Selamat Datang '.$row['nama'].' !';
                // Redirect user to index.php
        header("Location: index.php");
      }elseif(mysqli_num_rows($result2) > 0 ){
        $_SESSION['id_mahasiswa'] = $row2['id_mahasiswa'];
        $_SESSION['nama'] = $row2['nama'];
        $_SESSION['akses_level'] ="mahasiswa";
        $_SESSION['pesan'] = 'Selamat Datang '.$row2['nama'].' !';
                // Redirect user to index.php
        header("Location: quisioner_form.php");
      }else{
        echo '
        <div class="alert alert-danger"><i class="fa fa-warning"></i> Username atau Password Salah</div>
        ';
        mysqli_close($conn);
      }
    }
    ?>
    <div class="form-group">
     <label>Username</label>
     <input class="form-control" type="text" name="user" placeholder="Masukan Username" required>
   </div>
   <div class="form-group">
     <label>Password</label>
     <input class="form-control" type="password" name="pass" placeholder="Masukan Password" required>
   </div>
     <button class="btn btn-primary" type="submit" name="submit" ><i class="fa fa-sign-in"></i> Login</button>
<a href="register.php" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Register Mahasiswa</a>
 </form>
</body>
</html>