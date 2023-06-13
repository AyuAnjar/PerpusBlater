@extends('Layouts.mainlayoutlogin')

@section('title', 'Koleksi Buku')

@section('content')
<section class="section-padding" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center mb-4">
                <h1>KOLEKSI BUKU</h1>
            </div>

            @foreach ($bukus as $buku)
            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                <a href="{{ route('koleksi.show', $buku->id_buku) }}">
                    <div class="custom-block-wrap">
                        <img src="{{ asset('image/'.$buku->gambar) }}" class="custom-block-image img-fluid" alt="buku">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <center>
                                    <h3 class="mb-3">{{ $buku->judul }}</h3>
                                </center>

                                <center>
                                    <p style="font-size:large">{{ $buku->pengarang }}</p>
                                </center>

                            </div>
                        </div>
                    </div>
                </a>
                <br>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection