<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pustakawan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('/assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/assets/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Perpustakaan Blater</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="">
              <a href="{{ url('dashboard') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Tables
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('anggota') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Anggota</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('buku') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Buku</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('peminjaman') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Peminjaman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pengembalian') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pengembalian</p>
                    </a>
                </li>
              </ul>
        </nav>
        <div>
                <li class="nav-item ms-3">
                        <form action="{{route('logout')}}" method="post">
                                @csrf
                                @method('POST')
                                <button class="btn-danger custom-border-btn btn" type="submit">Logout</button>
                        </form>
                        <!-- Link belum bener -->
                    </li>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Data Peminjaman</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div>
                    <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('peminjaman') }}'">
                      <i class="fas fa-arrow-left"></i> Kembali
                    </button>
                  </div>
              <div class="card-header">
                <h3 class="card-title">Data Peminjaman Perpustakaan Blater</h3>
              </div>
              <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow-sm rounded">
                            <div class="card-body">
                                <form action="{{ route('peminjaman.update', $peminjaman->id_peminjaman) }}" method="POST" enctype="multipart/form-data">
                                
                                    @csrf
                                    @method('PUT')
        
                                    <div class="form-group">
                                        <label class="font-weight-bold">ID Peminjaman</label>
                                        <input type="text" class="form-control @error('id_peminjaman') is-invalid @enderror" name="id_peminjaman" value="{{ old('id_peminjaman',$peminjaman->id_peminjaman) }}" placeholder="Masukkan ID Peminjaman Post">
                                    
                                        <!-- error message untuk id_peminjaman -->
                                        @error('id_peminjaman')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                              <div class="form-group">
                                <label class="font-weight-bold">ID Anggota</label>
                                <input type="text" class="form-control @error('id_anggota') is-invalid @enderror" name="id_anggota" value="{{ old('id_anggota', $peminjaman->id_anggota) }}" placeholder="Masukkan ID Anggota Post">
                            
                                <!-- error message untuk password -->
                                @error('id_anggota')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                              <label class="font-weight-bold">ID Buku</label>
                              <input type="text" class="form-control @error('id_buku') is-invalid @enderror" name="id_buku" value="{{ old('id_buku', $peminjaman->id_buku) }}" placeholder="Masukkan ID Buku Post">
                          
                              <!-- error message untuk id_buku -->
                              @error('id_buku')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
        
                          <div class="form-group">
                            <label class="font-weight-bold">Tanggal Peminjaman</label>
                            <input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" name="tgl_pinjam" value="{{ old('tgl_pinjam', $peminjaman->tgl_pinjam) }}" placeholder="Masukkan Tanggal Peminjaman Post">
                        
                            <!-- error message untuk tgl_pinjam -->
                            @error('tgl_pinjam')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Tanggal Jatuh Tempo</label>
                            <input type="date" class="form-control @error('tgl_jatuh_tempo') is-invalid @enderror" name="tgl_jatuh_tempo" value="{{ old('tgl_jatuh_tempo', $peminjaman->tgl_jatuh_tempo) }}" placeholder="Masukkan Tanggal Jatuh Tempo Post">
                        
                            <!-- error message untuk tgl_jatuh_tempo -->
                            @error('tgl_jatuh_tempo')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
      
                                    <button type="submit" class="btn btn-md btn-primary"><i class="fas fa-check"></i> UPDATE</button>
                                    <!--<button type="reset" class="btn btn-md btn-warning">RESET</button>-->
        
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('/assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('/assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('/assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('/assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('/assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/assets/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/assets/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/assets/dist/js/pages/dashboard.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
