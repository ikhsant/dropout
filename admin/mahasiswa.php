<?php 
$title = 'Data Mahasiswa'; 
include '../include/header.php';
?>

<?php
$xcrud->table('mahasiswa');
// jurusan
$xcrud->change_type('jurusan','select','','Akuntansi, Desain Komunikasi Visual,Ilmu Hukum, PGSD, Manajemen, Sistem Inforamsi,Teknik Informatika,Teknik Sipil,Teknik Elektro,Teknik Mesin');
$xcrud->subselect('Paid');
echo $xcrud->render();
?>

<?php  
include '../include/footer.php';
?>