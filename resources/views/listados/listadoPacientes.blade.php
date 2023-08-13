@extends('layouts.panel')

@section('mi_css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endSection

@section('content')

<h1>Listado Pacientes</h1>




<table id="laTabla" class="table dataTable table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Nombre Paciente</th>
            <th>correo</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>

<div>
    @foreach ($losPacientes as $paciente)
    <tr>
        <td>{{$paciente->name}}</dt>
        <td>{{$paciente->email}}</dt>
        <td>{{$paciente->rol}}</dt>
        </tr>

    @endforeach
</div>




@endSection

@section('mi_js')

<!-- DataTables -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

@endsection

@section('js-tabla')
<script>
$(function () {
  $('#laTabla').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : true
  })
})
</script>
@endsection





