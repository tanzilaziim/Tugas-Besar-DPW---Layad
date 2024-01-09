@extends('layouts.user')

@section('content')
<!--Count Report-->
<section class="block block-counter" id="hero" style="color: #007bff; padding: 40px 0 40px; background-color: #007bff;">
    <div class="container">
        <div class="text-center h3 mg-0 mg-b-30" style="color: white;">
            JUMLAH LAPORAN SEKARANG
        </div>
        <div class="row-flex flex-tablet text-center">
            <div class="post post-counter" style="margin-left: auto; margin-right: auto;">
                <div class="counter-count" style="color: white; font-size: 36px; margin-bottom: 10px;"> <!-- Sesuaikan ukuran font dan margin sesuai keinginan -->
                    <span class="numscroller scrollzip roller-title-number-1 isShown">20</span>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 60px;"></div>

        <div class="text-center h3 mg-20 mg-b-30" style="color: white;"> <!-- Menambahkan margin-bottom -->
            LAPORAN YANG BERHASIL DISELESAIKAN
        </div>
        <div class="row-flex flex-tablet text-center">
            <div class="post post-counter" style="margin-left: auto; margin-right: auto;">
                <div class="counter-count" style="color: white; font-size: 36px; margin-bottom: 10px;"> <!-- Sesuaikan ukuran font dan margin sesuai keinginan -->
                    <span class="numscroller scrollzip roller-title-number-1 isShown">15</span>
                </div>
            </div>
        </div>
    </div>
</section>    
<!--Count End-->
@endsection