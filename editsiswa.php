<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

if (!isset($_POST['kirim'])) {
	exit('Access Forbiden');
}

$siswa = new Siswa();

if(!copy($_FILES['in_foto']['tmp_name'], 'img/'.$_POST['in_nis'].'.png')){
	exit('Error Upload File');
}

print '<pre>';

print_r($_FILES);
print '</pre>';
$data['input_name'] = $_POST['in_name'];
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['Foto'] = 'img/'.$_POST['in_nis'].'.png';

$siswa->updateSiswa($_POST['in_nis'], $data);

echo "Data siswa berhasil di update <br />";
echo "<a href ='dsiswa.php?id=".$_POST['in_nis']."'>DETAIL SISWA</a>"
?>


//File ini telah diubah oleh saya sendiri
