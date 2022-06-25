@extends('adminlte::page')

@section('title', 'Data Pendaftar')

@section('content_header')
    <center><h1>Akumulasi Pendaftar Hari Ini</h1></center>
@stop


@section('content')
<?php $i = 1; 
?>
<div class="right_col" role="main">
    <div class="">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
          <center><h2>Program Studi {{ $prodi_id }}</h2></center>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
                      <table class="table table-hover text-nowrap" id="datatable">

                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NPM</th>
                  <th>Kelas</th>
                  <th>No Whatsapp</th>
                  <th>Size</th>
                  <th>Alamat</th>
                  <th>Provinsi</th>
                  <th>Kota</th>
                  <th>Kecamatan</th>
                  <th>Kelurahan</th>
                  <th>Kode Pos</th>
                  <th>Pembayaran DP</th>
                  <th>Pelunasan</th>
                </tr>
              </thead>


              <tbody>

                @foreach ($mahasiswas as $key => $user)
                    <tr>
                        <td> {{ $i++ }} </td>
                        <td> {{ $user->nama}} </td>
                        <td> {{ $user->npm }} </td>
                        <td> {{ $user->kelas }} </td>
                        <td> {{ $user->no_wa }} </td>
                        <td> {{ $user->size_toga }} </td>
                        <td> {{ $user->alamat }} </td>
                        <td> {{ $user->namaprov }} </td>
                        <td> {{ $user->namakota }} </td>
                        <td> {{ $user->namakec }} </td>
                        <td> {{ $user->namakel }} </td>
                        <td> {{ $user->kode_pos }} </td>
                        <td> {{ $user->lunas }} </td>
                        <td> UNPAID </td>
                        <!-- <td>
                        <a onclick="return confirm('Are you sure?')" class="button btn btn-danger" data-id="{{$user->id}}" href="/delete/{{ $user->id}}" >Delete</a>

                        </td> -->
                    </tr>
                @endforeach

              </tbody>
            </table>

            


@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    
@stop

@section('js')
<!-- DataTables -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script> 
    $(document).ready(function() {
    $('#datatable').DataTable( {
        dom: 'lfrtBps',
        buttons: {
        buttons: [

            { className: 'btn-primary', extend: 'excel', text : 'Export to Excel' }
        ]
    }
        
    } );
} );
</script>

@stop