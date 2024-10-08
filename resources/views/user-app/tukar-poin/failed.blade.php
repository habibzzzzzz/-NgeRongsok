@extends('layout.main')
@section('title', 'Penukaran Poin Dalam Proses | we-cycle')

@section('content')
<div class="container main-container d-flex align-items-center justify-content-center" style="min-height: 100vh">
    <div class="row">
        <div class="col d-flex flex-column justify-content-center">
            <h2 class="fw-bold text-center">
                TRANSAKSI <br>
                GAGAL
            </h2>
            <img class="mx-auto" style="max-height: 276px; max-width: 276px;" src="{{ asset('images/failed.png') }}"
                alt="Sucess">
            <p class="text-center m-0">
                Mohon Maaf
            </p>
            <p class="text-center m-0">
                Transaksi Kamu Tidak Dapat Diproses.
            </p>
            <div class="row mt-5 mx-4">
                <a class="btn btn-primary rounded-pill fw-bold my-2 px-4 py-2" href="/dashboard">
                    Beranda
                </a>
            </div>
        </div>
    </div>
</div>
@endsection