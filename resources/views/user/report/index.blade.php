@extends('layouts.user')

@section('content')
<main id="main">
    <div class="container mt-5">
        <div class="pagetitle">
            <div class="d-flex justify-content-between mx-2">
                <h1>Report List</h1>
                
            </div>
            <nav class="ms-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('laporans.index') }}">My Report</a>
                    </li>
                    <li class="breadcrumb-item"></li>
                </ol>
            </nav>
        </div>
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
                                <!-- Anda bisa menggunakan ikon atau teks yang sesuai dengan file PDF -->
                                <i class="far fa-file-pdf"></i> PDF File
                            </a>
                        @else
                            <img src="{{ asset($d->bukti) }}" alt="" width="100px">
                        @endif
                    </td>                    
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('laporans.edit', $d->id) }}" class="btn btn-warning">edit</a>
                            <form action="{{ route('laporans.destroy', $d->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection