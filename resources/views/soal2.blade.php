<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Data Siswa</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
		<center><h3><small>One To one</small></h3></center>
			@foreach ($wali as $dendi)
				<h3> <small>Nama Wali: {{$dendi->nama}}</small><br>
					<li>Nama Mahasiswa :{{$dendi->mahasiswa->nama_mahasiswa}}
					</li>
				</h3>
				<hr/>
			@endforeach
		</div>
	</body>
</html>