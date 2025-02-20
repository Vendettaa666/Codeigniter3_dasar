<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="1px solid black">	
		<tr>
			<th>Nama :</th>
			<th>Kelas :</th>
			<th>Alamat :</th>
			
		</tr>
		<?php foreach ($mahasiswa as $mhs) : ?>
			<tr>
				<td><?php echo $mhs['Nama'];?> </td>
				<td><?php echo $mhs['Kelas'];?> </td>
				<td><?php echo $mhs['Alamat'];?> </td>
			</tr>

		<?php endforeach; ?>	
	</table>
	
</body>
</html>
