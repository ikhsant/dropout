<?php  
include '../include/header.php';
?>

<?php 
// notif pesan
if (!empty($_SESSION['pesan'])) { ?>
	<div class="alert alert-success">
		<i class="fa fa-check"></i> <?php echo $_SESSION['pesan']; ?>
	</div>
	<br>
	<?php 
	$_SESSION['pesan'] = '';
} 

// notif pesan ewrror
if (!empty($_SESSION['error'])) { ?>
	<div class="alert alert-danger">
		<i class="fa fa-check"></i> <?php echo $_SESSION['error']; ?>
	</div>
	<br>
	<?php 
	$_SESSION['error'] = '';
} 
?>

<?php 
if($_SESSION['akses_level'] == "admin"){

$mahasiswa = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM mahasiswa"));
$mahasiswa_bertahan = mysqli_query($conn,"SELECT * FROM quisioner WHERE status = 'Bertahan' ");
$mahasiswa_indikasi_bertahan = mysqli_query($conn,"SELECT * FROM quisioner WHERE status = 'Indikasi Bertahan' ");
$mahasiswa_indikasi_dropout = mysqli_query($conn,"SELECT * FROM quisioner WHERE status = 'Indikasi Dropout' ");
$mahasiswa_dropout = mysqli_query($conn,"SELECT * FROM quisioner WHERE status = 'Dropout' ");

?>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-archive fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <span style="font-size: 50px"><?php echo $mahasiswa ?></span>
                    <div>Mahasiswa</div>
                </div>
            </div>
        </div>
        <a href="mahasiswa.php">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <span style="font-size: 50px"><?php echo mysqli_num_rows($mahasiswa_bertahan) ?></span>
                    <div>Mahasiswa Bertahan</div>
                </div>
            </div>
        </div>
        <a href="quisioner.php">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <span style="font-size: 50px"><?php echo mysqli_num_rows($mahasiswa_indikasi_bertahan) ?></span>
                    <div>Indikasi Bertahan</div>
                </div>
            </div>
        </div>
        <a href="quisioner.php">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-warning">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <span style="font-size: 50px"><?php echo mysqli_num_rows($mahasiswa_indikasi_dropout) ?></span>
                    <div>Indikasi Dropout</div>
                </div>
            </div>
        </div>
        <a href="quisioner.php">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <span style="font-size: 50px"><?php echo mysqli_num_rows($mahasiswa_dropout) ?></span>
                    <div>Dropout</div>
                </div>
            </div>
        </div>
        <a href="quisioner.php">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>


<?php  } ?>

<?php  
include '../include/footer.php';
?>