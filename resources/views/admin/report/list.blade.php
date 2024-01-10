@extends('layouts.app')

@section('content')
<main id="main">
    <div class="container mt-0">
        <div class="pagetitle">
            <div class="d-flex justify-content-between mx-0">
                <h1>Data Laporans</h1>
                <a href="/" class="btn btn-primary">Tambah Laporan</a>
            </div>
            <nav class="ms-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">My Report</a>
                    </li>
                    <li class="breadcrumb-item">{{ Request::segment(2) }}</li>
                </ol>
            </nav>
        </div>

        @if ($data->isEmpty())
            <p class="text-center">Belum ada laporan yang dibuat.</p>
        @else
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Pelapor</th>
                        <th scope="col">Terlapor</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Bukti</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="action-col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $d->judul }}</td>
                            <td>{{ $d->pelapor }}</td>
                            <td>{{ $d->terlapor }}</td>
                            <td>{{ $d->tanggal }}</td>
                            <td>{{ $d->isi }}</td>
                            <td>
                                @php
                                    $fileExtension = pathinfo($d->bukti, PATHINFO_EXTENSION);
                                    $fileType = strtolower($fileExtension);
                                @endphp
                            
                                @if($fileType === 'pdf')
                                    <a href="{{ asset($d->bukti) }}" target="_blank">
                                        <i class="far fa-file-pdf"></i> PDF File
                                    </a>
                                @else
                                    <img src="{{ asset($d->bukti) }}" alt="" width="100px">
                                @endif
                            </td>
                            <td>
                                <span style="color: {{ $d->status === 'selesai' ? 'green' : 'gray' }}">
                                    {{ $d->status }}
                                tuntas</span>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    @if($d->status !== 'selesai')
                                    <a href="{{ route('admin.laporans.send', $d->id) }}" class="btn" style="background-color:limegreen; color:aliceblue">Selesaikan</a>
                                    @else
                                    <a class="btn" style="background-color: grey; color:aliceblue; border-style:">Terselesaikan</a>
                                @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</main>
@endsection
