<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Peminjaman</title>

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

<body>
    <center>
        <h2>Data Peminjaman</h2>
    </center>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover" id="peminjaman" style="text-align:center;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Peminjaman</th>
                                        <th>ID Anggota</th>
                                        <th>Nama Anggota</th>
                                        <th>ID Buku</th>
                                        <th>Judul</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Tanggal Jatuh Tempo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($peminjamans as $peminjaman)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $peminjaman->id_peminjaman }}</td>
                                        <td>{{ $peminjaman->id_anggota }}</td>
                                        <td>{{ $peminjaman->anggotas->nama }}</td>
                                        <td>{{ $peminjaman->id_buku }}</td>
                                        <td>{{ $peminjaman->bukus->judul }}</td>
                                        <td>{{ $peminjaman->tgl_pinjam }}</td>
                                        <td>{{ $peminjaman->tgl_jatuh_tempo }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>