<?php 
$title = 'Form Quisioner'; 
include '../include/header.php';
?>
<?php
$xcrud->table('quisioner');
$xcrud->relation('id_mahasiswa','mahasiswa','id_mahasiswa','nama');
$xcrud->change_type('status','select','','Bertahan,Indikasi Bertahan, Indikasi Dropout, Dropout');

echo $xcrud->render();
?>

<?php  
include '../include/footer.php';
?>