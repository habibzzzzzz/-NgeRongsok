@extends('layout.header-tukar-poin')

@section('title', 'Reward | we-cycle')

@section('tukar-point-content')
{{-- HERO REWARD --}}
<div class="container-fluid mt-4 px-0">
    <img class="w-100 rounded-3" style="height:300px" src="{{ url($reward->image) }}" alt="reward">
</div>
<div class="container mt-4 pb-5 mb-5 ">
    <div class="row">
        <div class="col m-0 d-flex justify-content-between">
            <h5 class="fw-bold m-0">
                {{ $reward->name }}
            </h5>
            <p class="fw-bold" style="color: #52C41A;">
                {{ $reward->price }} Poin
            </p>
        </div>
    </div>
    <div class="row">
        <p class="font-sm">
            {{ $reward->description }}
        </p>
    </div>
    <div class="row mx-4">
        <a class="btn btn-primary rounded-pill fw-bold my-2 px-4 py-2"
            href="{{ url('/tukar-poin/reward/'.$reward->id.'/konfirmasi') }}">
            Tukarkan Poin <i class="bi bi-chevron-right"></i>
        </a>
    </div>
</div>

<div class="navigation-menu">
    <div class="container d-flex justify-content-evenly">
        <div>
            <a class="btn btn-lg border-0 px-1 py-auto" href="/dashboard">
                <i class="bi bi-house" style="font-size: 1.5rem; color:#0575E6;"></i>
                <p class="text-dark fw-bold font-sm p-0 m-0">Beranda</p>
            </a>
        </div>
        <div>
            <a class="btn btn-lg border-0 px-1 py-auto" href="/kategori-sampah">
                <i class="bi bi-trash" style="font-size: 1.5rem; color:#0575E6;"></i>
                <p class="text-dark fw-bold font-sm p-0 m-0">Kategori</p>
            </a>
        </div>
        <div>
            <a class="btn btn-lg border-0 px-1 py-auto" href="profile">
                <i class="bi bi-person" style="font-size: 1.5rem; color:#0575E6;"></i>
                <p class="text-dark fw-bold font-sm p-0 m-0">Profil</p>
            </a>
        </div>
        <div>
            <a class=" btn btn-lg border-0 px-1 py-auto" href="/settings" role="button">
                <i class="bi bi-gear" style="font-size: 1.5rem; color:#0575E6;"></i>
                <p class="text-dark fw-bold font-sm p-0 m-0">Pengaturan</p>
            </a>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
</script>
@endsection