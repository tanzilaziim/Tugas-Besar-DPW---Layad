@extends('layouts.user')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
        </div>
    </div>
    <!-- Page Header End -->
       <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
             <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                       <div
                            class="position-relative overflow-hidden ps-5 pt-5 h-100"
                            style="min-height: 400px"
                        >
                            <img
                                class="position-absolute w-150 h-100"
                                src="../assets/img/Bullying.jpeg"
                                alt=""
                                style="object-fit: cover"
                            />
                            <img
                                class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                                src="../assets/img/bahan2.jpeg"
                                alt=""
                                style="width: 200px; height: 200px"
                            />
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h1 class="display-6 mb-4">
                                Website Layanan Aduan
                            </h1>
                        <p>
                            LAYAD merupakan inisiatif dari Mahasiswa ITTP
                            (Institut Teknologi dan Telkom Purwokerto) yang
                            bertujuan untuk memberikan platform bagi
                            mahasiswa dalam melaporkan dan mengatasi masalah
                            seperti bullying, kekerasan, dan pelecehan seksual di
                            lingkungan kampus. LAYAD memberikan rasa aman
                            dan nyaman bagi mahasiswa dengan menyediakan
                            saluran untuk melaporkan kekerasan dan pelecehan
                            seksual, membantu dalam pencegahan kasus-kasus
                            tersebut dengan memberikan penanganan cepat dan
                            efektif terhadap laporan yang diterima dan
                            menjadi wadah advokasi untuk hak-hak mahasiswa,
                            memastikan bahwa setiap laporan ditangani dengan
                            serius dan adil. Tujuan dari menciptakan wadah
                            ini adalah menjadikan lingkungan kampus sebagai
                            tempat yang aman dan mendukung bagi seluruh
                            mahasiswa, memberdayakan mahasiswa untuk
                            berperan aktif dalam melindungi diri dan
                            rekan-rekan mereka dari situasi yang merugikan
                            dan menjaga integritas institusi dengan
                            menangani setiap laporan secara transparan dan
                            objektif.  
                        </p>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-4">Meet the Team</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="../assets/img/team1.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.instagram.com/deliafbyna_/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Delia Pebina Br Ginting</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="../assets/img/team2.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.instagram.com/_thisayyu/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Wahyu Nurfida</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="../assets/img/team3.JPG" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.instagram.com/tanzilaziim/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Tanzil Aziim</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="../assets/img/team4.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="https://www.instagram.com/maghdalqn/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Maghda Luqyana</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection