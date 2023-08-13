@extends('layouts.panel')

@section('mi_css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endSection

@section('content')
<h1>Pefil Usuario</h1>


<table id="laTabla" class="table dataTable table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>correo</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>

<div>
    @foreach ($perfilDoctor as $user)
    <tr>
        <td>{{$user->name}}</dt>
        <td>{{$user->email}}</dt>
        <td>{{$user->rol}}</dt>
        </tr>

    @endforeach

    <a href="{{ route('editar') }}" class="btn btn-primary">Editar Usuario</a>
</div>




@endSection

@section('mi_js')

<!-- DataTables -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
@section('content')
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



