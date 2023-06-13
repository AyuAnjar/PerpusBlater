<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Pengembalian</title>

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
                                        <th>ID Pengembalian</th>
                                        <th>ID Peminjaman</th>
                                        <th>ID Anggota</th>
                                        <th>Nama Anggota</th>
                                        <th>ID Buku</th>
                                        <th>Judul</th>
                                        <th>Tanggal Jatuh Tempo</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Denda</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengembalians as $pengembalian)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $pengembalian->id_pengembalian }}</td>
                                        <td>{{ $pengembalian->peminjamans->id_peminjaman }}</td>
                                        <td>{{ $pengembalian->peminjamans->anggotas->id_anggota }}</td>
                                        <td>{{ $pengembalian->peminjamans->anggotas->nama }}</td>
                                        <td>{{ $pengembalian->peminjamans->bukus->id_buku }}</td>
                                        <td>{{ $pengembalian->peminjamans->bukus->judul }}</td>
                                        <td>{{ $pengembalian->peminjamans->tgl_jatuh_tempo }}</td>
                                        <td>{{ $pengembalian->tgl_kembali }}</td>
                                        <td>{{ $pengembalian->denda }}</td>
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