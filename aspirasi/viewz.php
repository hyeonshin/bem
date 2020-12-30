<?php
require_once '../config/library.php';

$lib = new Library();
$view = $lib->view_angket();


?>

<!DOCTYPE html>
<html>
<head>
	<title>BEM FMIPA UNNES 2019</title>
</head>
<body>

<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>Kode</th>
											<th>Username</th>
											<th>Nama</th>
											<th>Level</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
									<?php while ($data = $view->fetch(PDO::FETCH_OBJ)) { ?>
									
										<tr>
											<td><?php echo $data->id_angket; ?></td>
											<td><?php echo $data->sarana1; ?></td>
											<td><?php echo $data->sarana2; ?></td>
											<td><?php echo $data->staff1; ?></td>
											<td><?php echo $data->mahasiswa1; ?></td>
											<td><?php echo $data->kritik; ?></td>
										</tr>
										<?php } ?>
									</tbody>
									
								</table>

</body>
</html>