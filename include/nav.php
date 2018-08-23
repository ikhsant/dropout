<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"><b><?php echo $setting['nama_website']; ?></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <?php if($_SESSION['akses_level'] == "admin"){ ?>
        <li><a href="index.php"><i class="fa fa-star"></i> Dashboard</a></li>
        <li><a href="mahasiswa.php"><i class="fa fa-graduation-cap"></i> Mahasiswa</a></li>
        <li><a href="quisioner.php"><i class="fa fa-pencil-square-o"></i> Quisioner</a></li>
        <li><a href="user.php"><i class="fa fa-users"></i> User</a></li>
        <?php  } ?>

        <?php if($_SESSION['akses_level'] == "mahasiswa"){ ?>
        <li><a href="quisioner_form.php"><i class="fa fa-pencil-square-o"></i> Quisioner Form</a></li>
        <?php  } ?>


      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nama'] ?> <span class="label label-info"><?php echo $_SESSION['akses_level'] ?></span></a></li>
        <?php if($_SESSION['akses_level'] == "admin"){ ?>
        <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
        <?php  } ?>
        <li><a href="logout.php" onclick="return confirm('Yakin Keluar?')"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">