<!DOCTYPE html>
<html>
<head>
	<title>Export Laporan Excel Pada Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<center>
			<h4>Export Laporan Excel Pada Laravel</h4>
			<h5><a>IKHLASUL NUSA (1461900259)</a></h5>
		</center>
		<a style="float:left;" href="/export_excel" class="btn btn-info my-3" target="_blank">EXPORT EXCEL</a>
		
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jenis</th>
					<th>Tahun Terbit</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($buku as $s)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->judul}}</td>
					<td>{{$s->jenis}}</td>
					<td>{{$s->tahun_terbit}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>
