<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('data-mahasiswa')}}">Data Mahasiswa</a></li>
              <li class="breadcrumb-item active">Create Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <h3>Form Tambah Data Mahasiswa</h3>
        </div>          

        <div class="card-body">
            <form action="{{route('simpan-data')}}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM">
              </div>
              <div class="form-group">
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap">
              </div>
              <div class="form-group">
                <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Kelas">
              </div>
              <div class="form-group">
                <input type="text" id="prodi" name="prodi" class="form-control" placeholder="Program Studi">
              </div>
              <div class="form-group">
                <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Jurusan">
              </div>
              <div class="form-group">
                <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan Data</button>
              </div>
            </form>
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
</body>
</html>
