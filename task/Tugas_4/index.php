<!DOCTYPE html>
<html>
<head>
	<title>Program KHS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<style type="text/css">
		.table thead tr th{
			vertical-align: middle;
			text-align: center;
		}
		#tb-col{
			background-color: #f3f3f3;
		}
		.panel-primary {
		    border-color: #fff;
		    border-bottom: 2px solid #cfcfcf;
		}
		.panel-heading {
		    border-top-left-radius: 0px;
		    border-top-right-radius: 0px;
		}
		.panel-primary > .panel-heading {
		    background-color: #34495e;
		}
		body {
		    background-color: #f8f8f8;
		}
		a .hide-unhide{
			color: #fff;
		}
	</style>
</head>
<body>
	<div class="container">
		<div style="margin-top: 20px;" class="panel panel-primary">
			<div class="panel-heading" style="border-bottom: 3px solid #19b68f;">
				<b><i class="fa fa-edit"></i> INPUT DATA DIRI</b>
			</div>
			<div class="panel-body">
				<form name="bioform" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-2">Nama</label>
					    <div class="col-sm-4">
					      <input type="text" class="form-control" id="nama" placeholder="Nama anda">
					    </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2">Stambuk</label>
					    <div class="col-sm-4">
					      <input type="text" class="form-control" id="stambuk" placeholder="Stambuk anda">
					    </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2">Program Studi</label>
					    <div class="col-sm-4">
					    	<select class="form-control" id="prodi">
					    		<option value="">-- Pilih Prodi--</option>
					    		<option>S1 Teknik Informatika</option>
					    	</select>
					    </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2">Semester</label>
					    <div class="col-sm-4">
					    	<select onchange="semester()" id="ta" class="form-control"></select>
					    </div>
					</div>
				</form>
			</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<b><i class="fa fa-edit"></i> INPUT NILAI</b>
			</div>
			<div class="panel-body">
				<form action="print.php" name="nilaiform" method="post" onsubmit="return validateData()">
				<table class="table table-hover table-bordered">
					<thead id="tb-col">
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
					<tbody id="data">
						<tr>
							<td colspan="7" align="center"><i><b>Tidak Ada Matakuliah Yang Di Tampilkan</b></i></td>
						</tr>
					</tbody>
				</table>
				<div class="col-md-6">
				<table>
					<thead>
						<th width="100"><h4>IP</h4></th>
						<th width="10">:</th>
						<td><h4 id="ip"></h4></td>
					</thead>
					<tbody>
						<th width="100"><h4>SKS Lulus</h4></th>
						<th width="10">:</th>
						<td><h4 id="sksl"></h4></td>
					</tbody>
				</table>	
				</div>
				<div class="col-md-6">
					<input type="hidden" name="iip" id="iip" value="0">
					<input type="hidden" name="ilsks" id="ilsks" value="0">
					<input type="hidden" name="nama" id="inama" value="">
					<input type="hidden" name="stb" id="istambuk" value="">
					<input type="hidden" name="prodi" id="iprodi" value="">
					<button type="submit" class="btn btn-danger pull-right"><i class="fa fa-print"></i> Cetak KHS</button></form>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="js/MyScript.js"></script>
</body>
</html>