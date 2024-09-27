@extends('layout.main')

@section('title', 'NgeRongsok-Landing')

@section('content')
<header class="dashboard-header gradient-brand position-relative">
   
</header>
<main id="home-page" class="main-container">
   <!-- Hero -->
   <section class="hero text-center bg-image">
      
   </section>
   <!-- Hero End -->
   {{-- Slider --}}
   <section class="container pt-5 px-4">
      
      <div class="row">
         <div class="col">
            <h1 class="mt-4 fs-2 fw-bold mb-0">
               Halo!
            </h1>
            <h3 class="fs-4 fw-bold">
               Selamat Datang di Aplikasi yang Penuh Makna "NgeRongsok"
            </h3>
            <p class="mt-4">
               Setor Sampah <br> Dapatkan Reward!
            </p>
         </div>
      </div>
      {{-- Login action --}}
      <div class="row mt-2">
         <div class="col">
            <div class="d-grid gap-2">
               <a class="btn btn-primary rounded-pill fw-bold my-2" href="{{ url('login') }}">
                  Login
               </a>
               <a class="btn btn-outline-primary rounded-pill fw-bold mt-1" href="{{ url('register') }}">
                  Buat Akun
               </a>
            </div>
         </div>
      </div>
   </section>
   </main>

<footer class="landing-footer">
   <div class="container px-4 pt-5 pb-2">
      <div class="row">
         <h5 class="text-center mt-2 fw-bold">
            Contact Us
         </h5>
         <div class="col mt-3 d-flex justify-content-center align-items-center">
            <a class="btn btn-dark btn-circle" href="https://wa.link/w5wa65" target="_blank" role="button">
               <i class="bi bi-whatsapp"></i>
            </a>
         </div>
         <a href="#" class="text-dark mt-4 mb-2">
            <h6 class="fw-bold">
               #NgeRongsokBikinSehat
            </h6>
         </a>
         <hr>
      </div>
   </div>
   <div class="container d-flex justify-content-between px-3">
      <p>
         &#169; Tim Kece Tampan
      </p>
      <p>
         Habib dan Zaka
      </p>
   </div>
</footer>
@endsection


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
   var swiper = new Swiper(".sampahSlider", {
      pagination: {
       el: ".swiper-pagination",
      },
      });
</script>
@endsection