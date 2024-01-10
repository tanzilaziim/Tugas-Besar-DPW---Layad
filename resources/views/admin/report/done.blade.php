@extends('layouts.app')

@section('content')
<main id="main">
    <div class="container mt-10">
        <div class="pagetitle">
            <div class="d-flex justify-content-between mx-2">
                <h1>Ubah Laporan</h1>
                
            </div>
            <nav class="ms-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('laporans.index') }}">My Report</a>
                    </li>
                    <li class="breadcrumb-item">Edit</li>
                </ol>
            </nav>
        </div>
            <!-- Default Basic Forms Start -->


            <!-- horizontal Basic Forms Start -->
            <div class="text-center px-5 py-5 mb-1">
                <form action="{{ route('admin.laporans.update', $data->id) }}" method="POST" enctype="multipart/form-data" class="mb-1">
                    @method('PUT')
                    @csrf
                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input
                                    type="text"
                                    class="form-control border-1"
                                    id="solusi"
                                    name="solusi"
                                    placeholder="Solusi laporan"
                                />
                                <label 
                                    for="#solusi"
                                    class="form-label"
                                    >Solusi</label
                                >
                            </div>
                        </div>
                        <br>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea
                                class="form-control border-1 textarea"
                                placeholder="Kesimpulan hasil laporan"
                                id="kesimpulan"
                                name="kesimpulan"
                                style="height: 100px"
                                ></textarea>
                                <label 
                                    for="#kesimpulan"
                                    class="form-label"
                                    >Kesimpulan</label
                                >
                            </div>
                        </div>
                        <br>
                        <div class="col-12">
                            <button
                                class="btn btn-dark w-100 py-3"
                                type="submit"
                            >
                                Kirim Penyelesaian Laporan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- horizontal Basic Forms End -->
    </div>
    </div>
    </div>
    </div>
</main>
@endsection