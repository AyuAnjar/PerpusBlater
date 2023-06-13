@extends('Layouts.mainlayoutlogin')

@section('title', 'Home')

@section('content')
<section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="aset/images/bg1.jpg" style="width: 1600px;" class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <p>Selamat Datang di</p>


                                <h2>Perpustakaan Blater</h2>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="aset/images/bg2.jpg" style="width: 1600px;" class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <p>Selamat Datang di</p>


                                <h2>Perpustakaan Blater</h2>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="aset/images/bg3.jpg" style="width: 1600px;" class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <p>Selamat Datang di</p>


                                <h2>Perpustakaan Blater</h2>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto">
                <h2 class="mb-5">Layanan Kami</h2>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a class="d-block">
                        <img src="aset/images/icons/book.png" style="width: 128px; height: 128px;" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text">Beragam <strong>Buku</strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a class="d-block">
                        <img src="aset/images/icons/clipboard.png" style="width: 128px; height: 128px;" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text"><strong>Pendaftaran</strong> Mudah</p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a class="d-block">
                        <img src="aset/images/icons/computer.png" style="width: 128px; height: 128px;" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text">Ruang <strong>Komputer</strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a class="d-block">
                        <img src="aset/images/icons/wifi.png" style="width: 128px; height: 128px;" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text"><strong>Wifi</strong> Gratis</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section section-padding section-bg">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-5 col-12">
                <img src="aset/images/visi.gif" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
            </div>

            <div class="col-lg-5 col-md-7 col-12">
                <div class="custom-text-block">
                    <h1 class="mb-0" style="text-align: center;">VISI KAMI</h1>

                    <p class="text-muted mb-lg-4 mb-md-4"></p>

                    <p style="text-align: center;font-size:larger;">"Terwujudnya Indonesia Cerdas Melalui Gemar Membaca Dengan Memberdayakan Perpustakaan"</p>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="about-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 col-md-7 col-12">
                <div class="custom-text-block">
                    <h1 class="mb-0">MISI KAMI</h1>

                    <p class="text-muted mb-lg-4 mb-md-4"></p>

                    <p style="font-size:larger;">
                    <ol>
                        <li>Terwujudnya layanan prima</li>
                        <li>Terwujudnya perpustakaan sebagai pelestari khazanah budaya bangsa</li>
                        <li>Terwujudnya perpustakaan sesuai standar nasional perpustakaan</li>
                    </ol>
                    </p>

                </div>
            </div>

            <div class="col-lg-6 col-md-5 col-12">
                <img src="aset/images/misi.gif" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
            </div>

        </div>
    </div>
</section>
@endsection