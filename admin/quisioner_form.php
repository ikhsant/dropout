<?php 
$title = 'Form Quisioner'; 
include '../include/header.php';
?>

<?php  
$id_mahasiswa = $_SESSION['id_mahasiswa'];
$cek_mengisi = mysqli_query($conn,"SELECT * FROM quisioner WHERE id_mahasiswa = '$id_mahasiswa'");
if (mysqli_num_rows($cek_mengisi) > 0) {
	echo '<div class="alert alert-success"><h2><i class="fa fa-check"></i> Quisioner Sudah di Isi. Terimakasih</h2></div>';
}else{
?>
<h1>Quisioner</h1>
<hr>
<div class="panel panel-primary">
	<div class="panel-heading">
		Form Quisioner
	</div>
	<form method="post">
	<div class="panel-body">
		<div class="col-md-12">
			<h3>Profesonalisme Dosen</h3>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Kehadiran</label>
				<select class="form-control" name="kehadiran_dosen" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Penguasaan Materi</label>
				<select class="form-control" name="penguasaan_materi_dosen" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Pelayananan terhadap mahasiswa</label>
				<select class="form-control" name="pelayanan_dosen" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Penilaian tugas, quis, uts dan uas </label>
				<select class="form-control" name="penilaian_dosen" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Profesionalisme dalam bekerja (tepat waktu, menyenangkan dalam KBM dan sebagainya)</label>
				<select class="form-control" name="profesionalisme_dosen" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-12">
			<h3>Fasilitas Kampus</h3>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Ruang KBM (AC, LCD, Infocus dsb)</label>
				<select class="form-control" name="ruang_kbm_kampus" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Akses kampus (Internet))</label>
				<select class="form-control" name="akses_kampus" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Pelayanan kampus terhadap mahasiswa (keluhan mahasiswa, pelayanan administrasi dsb)</label>
				<select class="form-control" name="pelayanan_kampus" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

<div class="col-md-12">
			<h3>Kepribadian Sulit pada diri mahasiswa</h3>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Malas dalam mengerjakan tugas</label>
				<select class="form-control" name="malas_mhs" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Sering bolos/suka bolos dengan sengaja</label>
				<select class="form-control" name="bolos_mhs" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Menganggap enteng nilai/tugas yang diberikan Dosen</label>
				<select class="form-control" name="menganggap_enteng_mhs" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Kuliah hanya untuk gengsi, bukan untuk cari ilmu</label>
				<select class="form-control" name="gengsi_mhs" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Tidak jujur/suka mencontek saat ujian/malas berfikir</label>
				<select class="form-control" name="mencontek_mhs" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Menyepelekan Dosen, karyawan kampus dan mahasiswa lain</label>
				<select class="form-control" name="menyepelekan_mhs" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Tidak punya tujuan pasti saat kuliah/setelah lulus</label>
				<select class="form-control" name="tujuan_mhs" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Tidak bisa mengikuti KBM sesuai dengan target Dosen</label>
				<select class="form-control" name="target_mhs" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Tidak pintar bersosialisasi dengan rekan dan Dosen</label>
				<select class="form-control" name="sosialisai_mhs" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-12">
			<h3>Pengaruh Luar</h3>
		</div>

<div class="col-md-4">
			<div class="form-group">
				<label>Nama baik kampus dimata masyarakat</label>
				<select class="form-control" name="nama_baik_kampus" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Perbandingan dengan kampus yang sudah ada</label>
				<select class="form-control" name="perbandingan_kampus" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Lulusan Nusa Putra</label>
				<select class="form-control" name="lulusan_kampus" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-12">
			<h3>Akademik dan Keuangan</h3>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Nilai prestasi menurun/tidak sesuai standar kampus</label>
				<select class="form-control" name="nilai_menurun" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Biaya Kuliah</label>
				<select class="form-control" name="biaya_kuliah" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Salah masuk jurusan/program studi</label>
				<select class="form-control" name="salah_masuk" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Tidak berniat masuk kampus tempat kuliah </label>
				<select class="form-control" name="tidak_niat" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-12">
			<h3>Kemahasiswaan</h3>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Kegiataan kemahasiswa</label>
				<select class="form-control" name="kegiatan" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Dukungan Kampus</label>
				<select class="form-control" name="dukungan_kampus" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Kerja Himpunan mahasiswa</label>
				<select class="form-control" name="kerja_himpunan" required>
					<option></option>
					<option value="1">Tidak Puas</option>
					<option value="2">Kurang Puas</option>
					<option value="3">Cukup Puas</option>
					<option value="4">Puas</option>
					<option value="5">Sangat Puas</option>
				</select>
			</div>
		</div>
	</div>
	<div class="panel-footer text-center">
		<button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> SIMPAN</button>
	</div>
</form>
</div>
<?php 	} ?>

<?php  
// jika tombol simpan di pencet
if (isset($_POST['submit'])) {

	// menyimpan hasil ke variable
	$q1 = $_POST['kehadiran_dosen'];
	$q2 = $_POST['penguasaan_materi_dosen'];
	$q3 = $_POST['pelayanan_dosen'];
	$q4 = $_POST['penilaian_dosen'];
	$q5 = $_POST['profesionalisme_dosen'];

	$q6 = $_POST['ruang_kbm_kampus'];
	$q7 = $_POST['akses_kampus'];
	$q8 = $_POST['pelayanan_kampus'];

	$q9 = $_POST['malas_mhs'];
	$q10 = $_POST['bolos_mhs'];
	$q11 = $_POST['menganggap_enteng_mhs'];
	$q12 = $_POST['gengsi_mhs'];
	$q13 = $_POST['mencontek_mhs'];
	$q14 = $_POST['menyepelekan_mhs'];
	$q15 = $_POST['tujuan_mhs'];
	$q16 = $_POST['target_mhs'];
	$q17 = $_POST['sosialisai_mhs'];

	$q18 = $_POST['nama_baik_kampus'];
	$q19 = $_POST['perbandingan_kampus'];
	$q20 = $_POST['lulusan_kampus'];

	$q21 = $_POST['nilai_menurun'];
	$q22 = $_POST['biaya_kuliah'];
	$q23 = $_POST['salah_masuk'];
	$q24 = $_POST['tidak_niat'];

	$q25 = $_POST['kegiatan'];
	$q26 = $_POST['dukungan_kampus'];
	$q27 = $_POST['kerja_himpunan'];

	// total1
	$total1 = ($q1 + $q2  + $q3  + $q4 + $q5 + 5) / 5;

	// total2
	$total2 = ($q6 + $q7 + $q8 + 3) / 3;

	// total3
	$total3 = ($q9 + $q10 + $q11 + $q12 + $q13 + $q14 + $q15 + $q16 + $q17 + 9) / 9;

	// total4
	$total4 = ($q18 + $q19 + $q20 + 3) / 3;

	// total5
	$total5 = ($q21 + $q22 + $q23 + $q24 + 4) / 4;

	// total4
	$total6 = ($q25 + $q26 + $q27 + 3) / 3;

	// menjumlahkan total
	$total_all = $total1 + $total2 + $total3 + $total4 + $total5 + $total6;

	// status mhs
	if($total_all > 24){
		$status = "Bertahan";
	}elseif($total_all > 18){
		$status = "Indikasi Bertahan";
	}elseif($total_all > 12) {
		$status = "Indikasi Dropout";
	}else{
		$status = "Dropout";
	}

	// menyimpan ke database
	mysqli_query($conn,"INSERT INTO quisioner (id_mahasiswa,nilai,status) VALUES ('$id_mahasiswa','$total_all','$status')");

	// redirect
	echo '<meta http-equiv="refresh" content="0"; URL="quisioner_form.php" />';

}
?>

<?php  
include '../include/footer.php';
?>