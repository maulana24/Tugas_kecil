<!DOCTYPE html>
<html>
<head>
	<title>Print KHS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<style type="text/css">
		.table thead tr th{
			vertical-align: middle;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<div cla ss="row">
			<div class="col-md-12">
				<div style="background-color: #f8f8f8;">
					<hr />
					<h3 align="center">KARTU HASIL STUDI <br>SEMESTER <?php echo $_POST['sem']; ?></h3>
					<hr />
				</div>
				<table>
					<thead>
						<tr>
							<td width="150">Nama</td>
							<td>: <?php echo $_POST['nama']; ?></td>
						</tr>
						<tr>
							<td>Stambuk</td>
							<td>: <?php echo $_POST['stb']; ?></td>
						</tr>
						<tr>
							<td>Program Studi</td>
							<td>: <?php echo $_POST['prodi']; ?></td>
						</tr>
						<tr>
							<td>Semester</td>
							<td>: <?php echo $_POST['sem']; ?></td>
						</tr>
					</thead>
				</table>
				<br>
				<table class="table table-bordered">
					<thead>
						<thead style="background-color: #f8f8f8;">
							<tr>
								<th rowspan="2">No</th>
								<th rowspan="2">Kode Mata Kuliah</th>
								<th rowspan="2">Nama Matakuliah</th>
								<th rowspan="2">SKS</th>
								<th colspan="3">Nilai</th>	
							</tr>
							<tr>
								<th>Huruf</th>
								<th>Angka</th>
								<th>SKS x Angka</th>
							</tr>
						</thead>
						<tbody>
							<?php
								for ($i=0; $i < $_POST['jummk']; $i++) { ?>
								<tr>
									<td style='text-align:center'><?php echo $i+1; ?></td>
									<td style='width: 95px;text-align:center'><?php echo $_POST['ikode'.$i]; ?></td>
									<td><?php echo $_POST['imatkul'.$i]; ?></td>
									<td style='text-align:center'><?php echo $_POST['isks'.$i]; ?></td>
									<td style='text-align:center'><?php echo $_POST['huruf'.$i]; ?></td>
									<td style='text-align:center'><?php echo $_POST['inilai'.$i]; ?></td>
									<td style='text-align:center'><?php echo $_POST['isxn'.$i]; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</thead>
				</table>
				<table style="margin-bottom: 20px;">
					<tr>
						<td width="120"><h4>IP Semester</h4></td>
						<td width="30"><h4>:</h4></td>
						<td><h4><?php echo $_POST['iip']; ?></h4></td>
					</tr>
					<tr>
						<td width="120"><h4>SKS Lulus</h4></td>
						<td width="30"><h4>:</h4></td>
						<td><h4><?php echo $_POST['ilsks']; ?></h4></td>
					</tr>
				</table>
				<hr />
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/MScript.js"></script>
</body>
</html>