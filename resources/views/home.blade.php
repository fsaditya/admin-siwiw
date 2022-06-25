@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="row">
          <div class="col-sm-4">
            <div class="small-box bg-gradient-dark">
              <div class="inner">
                <h3>Total Users</h3>
                <p>{{ $countUsers }}</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a class="small-box-footer" data-toggle="modal" data-target="#exampleModalCenter">
                Click Here <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle"><center>Apa itu Users?</center></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Data Users Merupakan Data yang Menyajikan Mahasiswa Yang Sudah Mendaftar dan Melakukan Verifikasi Email
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-sm-4">
            <div class="small-box bg-gradient-dark">
              <div class="inner">
                <h3>Total Pendaftar</h3>
                <p>{{ $countAll }}</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a class="small-box-footer" data-toggle="modal" data-target="#exampleModals">
                Click Here <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            <div class="modal fade" id="exampleModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle"><center>Apa itu Pendaftar?</center></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Data Pendaftar Merupakan Data yang Menyajikan Mahasiswa Yang Sudah Mendaftar, Melakukan Verifikasi Email, Mengisi dan Mengunci Data
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a type="button" class="btn btn-primary" href="/rekap">Meluncur Ke Rekap</a>
                      
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-sm-4">
            <div class="small-box bg-gradient-dark">
              <div class="inner">
                <h3>Total Ambil Toga</h3>
                <p>{{ $countToga }}</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a class="small-box-footer" data-toggle="modal" data-target="#exampleModalss">
                Click Here <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
            <div class="modal fade" id="exampleModalss" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle"><center>Apa itu Pendaftar?</center></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Data Pendaftar Merupakan Data yang Menyajikan Mahasiswa Yang Sudah Mendaftar, Melakukan Verifikasi Email, Mengisi dan Mengunci Data
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a type="button" class="btn btn-primary" href="/rekaptoga">Meluncur Ke Rekap</a>
                      
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>

@stop

@section('content')

<table class="table table-striped table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prodi</th>
      <th scope="col"><center>Users</th>
      <th scope="col"><center>Pendaftar</th>
      <th scope="col"><center>Ambil Toga</th>
      <th scope="col"><center>Total Wisudawan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>D III AKUNTANSI</td>
      <td><center>{{ $countAk3 }}</td>
      <td><center>{{ $countdaftarAk3 }}</td>
      <td><center>{{ $counttogaAk3 }}</td>
      <td><center>1720</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>D III AKUNTANSI ALIH PROGRAM</td>
      <td><center>{{ $countAk3AP }}</td>
      <td><center>{{ $countdaftarAk3AP }}</td>
      <td><center>{{ $counttogaAk3AP }}</td>
      <td><center>261</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>D IV AKUNTANSI</td>
      <td><center>{{ $countAk4 }}</td>
      <td><center>{{ $countdaftarAk4 }}</td>
      <td><center>{{ $counttogaAk4 }}</td>
      <td><center>60</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>D IV AKUNTANSI ALIH PROGRAM(Non Akt)</td>
      <td><center>{{ $countAk4APNon }}</td>
      <td><center>{{ $countdaftarAk4APNon }}</td>
      <td><center>{{ $counttogaAk4APNon }}</td>
      <td><center>157</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>D IV AKUNTANSI ALIH PROGRAM(Akt)</td>
      <td><center>{{ $countAk4AP }}</td>
      <td><center>{{ $countdaftarAk4AP }}</td>
      <td><center>{{ $counttogaAk4AP }}</td>
      <td><center>129</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>D III PAJAK</td>
      <td><center>{{ $countPj3 }}</td>
      <td><center>{{ $countdaftarPj3 }}</td>
      <td><center>{{ $counttogaPj3 }}</td>
      <td><center>937</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>D III PAJAK ALIH PROGRAM</td>
      <td><center>{{ $countPj3AP }}</td>
      <td><center>{{ $countdaftarPj3AP }}</td>
      <td><center>{{ $counttogaPj3AP }}</td>
      <td><center>193</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>D III PBB/PENILAI</td>
      <td><center>{{ $countPbb3 }}</td>
      <td><center>{{ $countdaftarPbb3 }}</td>
      <td><center>{{ $counttogaPbb3 }}</td>
      <td><center>243</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>D III PBB/PENILAI ALIH PROGRAM 2019</td>
      <td><center>{{ $countPbb3AP19 }}</td>
      <td><center>{{ $countdaftarPbb3AP19 }}</td>
      <td><center>{{ $counttogaPbb3AP19 }}</td>
      <td><center>84</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>D III PBB/PENILAI ALIH PROGRAM 2018</td>
      <td><center>{{ $countPbb3AP }}</td>
      <td><center>{{ $countdaftarPbb3AP }}</td>
      <td><center>{{ $counttogaPbb3AP }}</td>
      <td><center>146</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>D III KEPABEANAN DAN CUKAI</td>
      <td><center>{{ $countBc3 }}</td>
      <td><center>{{ $countdaftarBc3 }}</td>
      <td><center>{{ $counttogaBc3 }}</td>
      <td><center>104</td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>D III KEPABEANAN DAN CUKAI ALIH PROGRAM</td>
      <td><center>{{ $countBc3AP }}</td>
      <td><center>{{ $countdaftarBc3AP }}</td>
      <td><center>{{ $counttogaBc3AP }}</td>
      <td><center>92</td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>D III KEBENDAHARAAN NEGARA</td>
      <td><center>{{ $countKbn3 }}</td>
      <td><center>{{ $countdaftarKbn3 }}</td>
      <td><center>{{ $counttogaKbn3 }}</td>
      <td><center>624</td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>D III KEBENDAHARAAN NEGARA ALIH PROGRAM</td>
      <td><center>{{ $countKbn3AP }}</td>
      <td><center>{{ $countdaftarKbn3AP }}</td>
      <td><center>{{ $counttogaKbn3AP }}</td>
      <td><center>5</td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>D III MANAJEMEN ASET</td>
      <td><center>{{ $countMa3 }}</center></td>
      <td><center>{{ $countdaftarMa3 }}</center></td>
      <td><center>{{ $counttogaMa3 }}</center></td>
      <td><center>121</center></td>
    </tr>
  </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop

@section('js')
    <script> console.log('Epic'); </script>
@stop