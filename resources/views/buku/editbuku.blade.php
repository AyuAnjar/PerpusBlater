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
            <h1>Form Edit Data Buku</h1>
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
                    <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('buku') }}'">
                      <i class="fas fa-arrow-left"></i> Kembali
                    </button>
                  </div>
              <div class="card-header">
                <h3 class="card-title">Data Buku Perpustakaan Blater</h3>
              </div>
              <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow-sm rounded">
                            <div class="card-body">
                                <form action="{{ route('buku.update', $buku->id_buku) }}" method="POST" enctype="multipart/form-data">
                                
                                    @csrf
                                    @method('PUT')
        
                                    <div class="form-group">
                                        <label class="font-weight-bold">GAMBAR</label>
                                        <img src="{{ asset('image/'.$buku->gambar) }}" width="150px" height="200px" class="d-block">
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
                                    
                                        <!-- error message untuk title -->
                                        @error('gambar')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
        
                                    <div class="form-group">
                                        <label class="font-weight-bold">ID Buku</label>
                                        <input type="text" class="form-control @error('id_buku') is-invalid @enderror" name="id_buku" value="{{ old('id_buku',$buku->id_buku) }}" placeholder="Masukkan ID Buku">
                                    
                                        <!-- error message untuk id_buku -->
                                        @error('id_buku')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                      <label class="font-weight-bold">JUDUL</label>
                                      <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $buku->judul) }}" placeholder="Masukkan Judul">
                                  
                                      <!-- error message untuk judul -->
                                      @error('judul')
                                          <div class="alert alert-danger mt-2">
                                              {{ $message }}
                                          </div>
                                      @enderror
                                  </div>

                                  <div class="form-group">
                                    <label class="font-weight-bold">Pengarang</label>
                                    <input type="text" class="form-control @error('pengarang') is-invalid @enderror" name="pengarang" value="{{ old('pengarang', $buku->pengarang) }}" placeholder="Masukkan Pengarang">
                                
                                    <!-- error message untuk pengarang -->
                                    @error('pengarang')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                  <label class="font-weight-bold">Penerbit</label>
                                  <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" value="{{ old('penerbit', $buku->penerbit) }}" placeholder="Masukkan Penerbit">
                              
                                  <!-- error message untuk penerbit -->
                                  @error('penerbit')
                                      <div class="alert alert-danger mt-2">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>

                              <div class="form-group">
                                <label class="font-weight-bold">Tahun Terbit</label>
                                <input type="date" class="form-control @error('thn_terbit') is-invalid @enderror" name="thn_terbit" value="{{ old('thn_terbit', $buku->thn_terbit) }}" placeholder="Masukkan Tahun Terbit">
                            
                                <!-- error message untuk thn_terbit -->
                                @error('thn_terbit')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                              <label class="font-weight-bold">Stok</label>
                              <input type="text" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok', $buku->stok) }}" placeholder="Masukkan Stok">
                          
                              <!-- error message untuk stok -->
                              @error('stok')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
        
                          <div class="form-group">
                            <label class="font-weight-bold">Lokasi</label>
                            <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" value="{{ old('lokasi', $buku->lokasi) }}" placeholder="Masukkan Lokasi">
                        
                            <!-- error message untuk lokasi -->
                            @error('lokasi')
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
