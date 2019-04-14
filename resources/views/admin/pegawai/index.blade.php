@extends('adminlte::page')

@section('title', 'Data Pegawai')

@section('content_header')
    <h1>Daftar Pegawai</h1>
@stop

@section('content')
    <p>Selamat datang di halaman daftar pegawai.</p>
	<table id="pegawai" class="display">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NRTK</th>
			<th>jenkel</th>
            <th>tmplhr</th>
			<th>tgllhr</th>
        </tr>
    </thead>
    <tbody>
		@foreach($data as $item)
		<tr>
			<td>{{ $item->nama}}</td>
			<td>{{ $item->nrtk}}</td>
			<td>{{ $item->jenkel}}</td>
			<td>{{ $item->tmplhr}}</td>
			<td>{{ $item->tgllhr}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
	var data = [
    [
        "Tiger Nixon",
        "System Architect",
        "Edinburgh",
        "5421",
        "2011/04/25",
        "$3,120"
    ],
    [
        "Garrett Winters",
        "Director",
        "Edinburgh",
        "8422",
        "2011/07/25",
        "$5,300"
    ]
	];
$('#pegawai').DataTable();

 </script>
@stop