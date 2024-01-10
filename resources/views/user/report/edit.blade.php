@extends('layouts.user')

@section('content')
<main id="main">
    <div class="container mt-5">
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
            <div style="background-color: #007bff ;" class="text-center px-5 py-5 mb-1">
                <form action="{{ route('laporans.update', $data->id) }}" method="POST" enctype="multipart/form-data" class="mb-1">
                    @method('PUT')
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
                                    value="{{$data->judul}}"
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
                                    value="{{$data->pelapor}}"
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
                                    value="{{$data->terlapor}}"
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
                                    value="{{$data->tanggal}}"
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
                                    value="{{$data->tempat}}"
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
                                class="form-control border-0 textarea"
                                placeholder="Deskripsi laporan"
                                id="isi"
                                name="isi"
                                style="height: 100px"
                                >{{$data->isi}}</textarea>
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
                                value="{{$data->bukti}}"
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
                                Ubah laporan
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