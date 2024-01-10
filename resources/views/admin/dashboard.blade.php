@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">Statistik Laporan</h5>
              </div>
              <div>
                <select class="form-select">
                  <option value="1">September 2023</option>
                  <option value="2">Oktober 2023</option>
                  <option value="3">November 2023</option>
                  <option value="4">Desember 2023</option>
                </select>
              </div>
            </div>
            <div id="chart"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
        </div>
      </div>
    </div>
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Laporan terkini</h5>
          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
              <thead class="text-dark fs-4">
                @if ($data->isEmpty())
                      <p class="text-center">Tidak ada.</p>
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
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($data->take(5) as $d)
                                  <tr>
                                      <th scope="row">{{ $loop->iteration }}</th>
                                      <td>{{ $d->judul }}</td>
                                      <td>{{ $d->pelapor }}</td>
                                      <td>{{ $d->terlapor }}</td>
                                      <td>{{ $d->tanggal }}</td>
                                      <td>{{ $d->isi }}</td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                @endif                       
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">&copy 2023 Layad</p>
    </div>
  </div>
  @endsection