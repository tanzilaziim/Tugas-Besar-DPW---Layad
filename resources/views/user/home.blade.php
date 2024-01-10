@extends('layouts.user')

@section('content')
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
        </div>
        @endif
       <!-- Home -->
        <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
            <div
                id="header-carousel"
                class="carousel slide"
                data-bs-ride="carousel"
            >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                            class="w-100"
                            src="{{ asset('assets/img/purwokerto.jpg')}}"
                            alt="Image"
                        />
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <h1
                                            class="display-2 text-light mb-5 animated slideInDown"
                                        >
                                            Selamat Datang di Layanan Aduan!
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                            class="w-100"
                            src="{{ asset('assets/img/telkom.jpg')}}"
                            alt="Image"
                        />
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <h1
                                            class="display-2 text-light mb-5 animated slideInDown"
                                        >
                                            Jangan Takut, Berani Lapor!
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#header-carousel"
                    data-bs-slide="prev"
                >
                    <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#header-carousel"
                    data-bs-slide="next"
                >
                    <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Home -->

        <!-- Edukasi -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-6 mb-4">
                            Bullying, Kekerasan, dan Pelecehan Seksual
                        </h1>
                        <p class="mb-5">   
                        Bullying, kekerasan, dan pelecehan seksual adalah masalah serius yang 
                        dapat berdampak negatif pada korban. Bullying adalah perilaku agresif 
                        yang dilakukan secara berulang-ulang oleh seseorang atau sekelompok 
                        orang terhadap seseorang atau sekelompok orang lainnya. Bullying dapat 
                        berupa kekerasan fisik, verbal, atau emosional. Kekerasan adalah 
                        penggunaan kekuatan fisik atau ancaman untuk menyakiti orang lain. 
                        Kekerasan dapat berupa kekerasan dalam rumah tangga, kekerasan seksual, 
                        atau kekerasan di tempat kerja. Pelecehan seksual adalah tindakan seksual 
                        yang dilakukan tanpa persetujuan korban. Pelecehan seksual dapat berupa 
                        pelecehan verbal, pelecehan fisik, atau pelecehan seksual penetratif.
                        ka Anda atau seseorang yang Anda kenal menjadi korban bullying, kekerasan, 
                        atau pelecehan seksual, penting untuk mencari bantuan. Anda dapat menghubungi 
                        hotline krisis, pusat konseling, atau lembaga pemerintah yang menangani kasus-kasus 
                        kekerasan dan Anda juga bisa mengisi form di bawah ini.
                        </p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div
                            class="position-relative overflow-hidden pe-5 pt-5 h-100"
                            style="min-height: 400px"
                        >
                            <img
                                class="position-absolute w-200 h-100"
                                src="{{ asset('assets/img/bullying1.jpeg')}}"
                                alt=""
                                style="object-fit: cover"
                            />
                            <img
                                class="position-absolute top-0 end-0 bg-white ps-3 pb-3"
                                src="{{ asset('assets/img/abusive.jpeg')}}"
                                alt=""
                                style="width: 200px; height: 200px"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edukasi -->
        
        <!-- Report Start -->
        <div class=" courses my-6 py-6 pb-0">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6 mb-4">Keunggulan di Website Kami</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div style="background-color: #007bff ;" class="d-inline-block text-white fs-5 py-1 px-4 mb-4">1</div>
                                <h5 class="mb-3">Aksesbilitas yang tinggi</h5>
                                <p>Website pengaduan dapat diakses oleh siapa saja, kapan saja, dan di mana 
                                    saja. Hal ini memudahkan korban untuk melaporkan kasus yang dialaminya, 
                                    tanpa harus datang ke kantor polisi atau lembaga lainnya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div style="background-color: #007bff ;" class="d-inline-block text-white fs-5 py-1 px-4 mb-4">2</div>
                                <h5 class="mb-3">Kerahasiaan yang terjamin</h5>
                                <p>Identitas korban akan dijaga kerahasiaannya. Hal ini penting untuk 
                                    melindungi korban dari intimidasi atau ancaman dari pelaku.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div style="background-color: #007bff ;" class="d-inline-block text-white fs-5 py-1 px-4 mb-4">3</div>
                                <h5 class="mb-3">Proses pelaporan yang mudah dan cepat</h5>
                                <p>Korban dapat melaporkan kasusnya dengan mudah dan cepat melalui website. 
                                    Hal ini akan membuat korban merasa lebih nyaman dan aman.</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-8 my-6 mb-0 wow fadeInUp"
                        data-wow-delay="0.1s"
                    >
                        <div style="background-color: #007bff ;" class="text-center px-5 py-5 mb-4">
                            <h1 style="color: white">Halaman Laporan</h1>
                            <form action="{{ route('laporans.store') }}" method="POST" enctype="multipart/form-data" class="mb-5">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input
                                                type="text"
                                                class="form-control border-0"
                                                id="judul"
                                                name="judul"
                                                placeholder="Judul laporan"
                                            />
                                            <label 
                                                for="#judul"
                                                class="form-label"
                                                >Judul Laporan</label
                                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input
                                                type="text"
                                                class="form-control border-0"
                                                id="pelapor"
                                                name="pelapor"
                                                placeholder="Nama pelapor"
                                            />
                                            <label 
                                                for="#pelapor"
                                                class="form-label"
                                                >Pelapor</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input
                                                type="text"
                                                class="form-control border-0"
                                                id="terlapor"
                                                name="terlapor"
                                                placeholder="Nama terlapor"
                                            />
                                            <label 
                                            for="#terlapor"
                                            class="form-label"
                                            >Pelaku</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input
                                                type="date"
                                                class="form-control border-0"
                                                id="tanggal"
                                                name="tanggal"
                                                placeholder="Tanggal kejadian"
                                            />
                                            <label 
                                                for="#tanggal"
                                                class="form-label"
                                                >Tanggal</label
                                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input
                                                type="text"
                                                class="form-control border-0"
                                                id="tempat"
                                                name="tempat"
                                                placeholder="Tempat kejadian"
                                            />
                                            <label 
                                                for="#tempat"
                                                class="form-label"
                                                >Tempat</label
                                            >
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea
                                                class="form-control border-0"
                                                placeholder="Deskripsi laporan"
                                                id="isi"
                                                name="isi"
                                                style="height: 100px"
                                            ></textarea>
                                            <label 
                                                for="#isi"
                                                class="form-label"
                                                >Isi Laporan</label
                                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input
                                            type="file"
                                            class="form-control border-0"
                                            id="bukti"
                                            name="bukti"
                                            placeholder="Bukti laporan"
                                            accept=".pdf"
                                            size="50000000"
                                        />
                                            <label 
                                                for="#bukti"
                                                class="form-label"
                                                >Bukti</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button
                                            class="btn btn-dark w-100 py-3"
                                            type="submit"
                                        >
                                            Buat Laporan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Report End -->
@endsection