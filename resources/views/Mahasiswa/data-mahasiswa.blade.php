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
              <li class="breadcrumb-item active">Data Mahasiswa</li>
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
            <div class="card-tools">
                <a href="{{route('create-mahasiswa')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered text-center">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Kelas</th>
                    <th>Program Studi</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                @php $no=1; @endphp
                @foreach($dtmahasiswa as $object)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $object -> nim }}</td>
                    <td>{{ $object -> nama }}</td>
                    <td>{{ $object -> kelas }}</td>
                    <td>{{ $object -> prodi }}</td>
                    <td>{{ $object -> jurusan }}</td>
                    <td>{{ $object -> alamat }}</td>
                    <td>
                        <a href="{{url('edit-mahasiswa', $object->id)}}"><i class="fas fa-edit"></i> 
                                                        | 
                        </a><a href="{{url('delete-mahasiswa', $object->id)}}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                    </td>
                </tr>
                @endforeach

            </table>
            <div class="card-footer">
               {{ $dtmahasiswa->links() }}
            </div>
        </div>
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')

@include('sweetalert::alert')
</body>
</html>
