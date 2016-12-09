<?php
	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	require_once('lib/age.php');
	
	$siswa = new Siswa();
	$id = $_GET['id'];
	$age = new Age();
	$data = $siswa->readSiswa($id);
	//adsasfasfhaptiapygehap
	
?>

<table border="1">
	<tr>
		<th> ID SISWA </th>
		<th> FULL NAME </th>
		<th> EMAIL </th>
		<th> DATE </th>
		<th> AGE </th>
		<th> NATIONALITY </th>
		</tr>
		
	<?php foreach($data as $a):?>
	<tr>
		<td> <?php echo $a['id_siswa']?></td>
		<td> <?php echo $a['full_name']?></td>
		<td> <?php echo $a['email']?></td>
		<td><?php 
			if ($a['date_ob'] != NULL)
			{
				echo $a['date_ob'];
			}
			else
			{
				echo '0000-00-00';
			}?></td>
			

			
			<td><?php 
			
			if ($a['date_ob'] != NULL)
			{
				$tanggal = $a['date_ob'];
				$exec = $age->hitungAge($tanggal);
				echo $exec->y." Tahun ".$exec->m." Bulan ".$exec->d." Hari";
			}
			else
			{
				echo 'Umur Tidak DiKetahui';
			}
			?></td>
			<td> <?php echo $a['nationality']?></td>
	<tr>
	<?php endforeach ?>
</table>


<a href="siswa.php">back</a>