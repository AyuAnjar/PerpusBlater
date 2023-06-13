<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color: #f0f8ff">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <p><a href="/koleksi"><img src="/aset/images/icons/cross.png" alt="" width="30px" height="30px"></a></p>

                        <center><img src="{{ asset('image/'.$buku->gambar) }}" width="300px" height="450px"></center>
                        <hr>
                        <table style="font-size: larger;">
                            <tr>
                                <td><b>Judul</b></td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ $buku->judul }}</td>

                            </tr>
                            <tr>
                                <td><b>Pengarang</b></td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ $buku->pengarang }}</td>

                            </tr>
                            <tr>
                                <td><b>Penerbit</b></td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ $buku->penerbit }}</td>

                            </tr>
                            <tr>
                                <td><b>Tahun Terbit</b></td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ $buku->thn_terbit }}</td>

                            </tr>
                            <tr>
                                <td><b>Stok</b></td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ $buku->stok }}</td>

                            </tr>
                            <tr>
                                <td><b>Lokasi</b></td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ $buku->lokasi }}</td>
                            </tr>
                        </table>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>