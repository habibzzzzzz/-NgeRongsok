<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Login we-cycle
    </title>
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    {{-- Typography --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    {{-- Template Stylesheet --}}
    <link href="{{ asset('we-cycle-app/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('we-cycle-app/bootstrap/css/by-silmy/login.css') }}" rel="stylesheet" />
    <!-- Font awesome Icon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <main class="loginscreen">
        <div class="bulatgradasi">
        </div>
        <div class="boxlogin">
            @if(session()->has('success'))
            <div class="alert alert-success m-2" role="alert">
                {{ session('success') }}
            </div>
            @endif
            @if(session()->has('loginError'))
            <div class="alert alert-danger mx-2 my-1" role="alert">
                {{ session('loginError') }}
            </div>
            @endif

            <img class="logodark" src="{{ asset('images/logo3.png') }}" alt="logodark">
            <div class="ikonkon">
                <form action="/login" method="post" style="max-width:327px;margin:auto">
                    @csrf
                    <div class="input-icons">
                        <i class="fa fa-user icon">
                        </i>
                        <input class="input-field" id="email" name="email" type="email"
                            placeholder="NgeRongsok@gmail.com">
                    </div>
                    <div class="input-icons">
                        <i class="fa fa-key icon">
                        </i>
                        <input class="input-field" id="password" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="tombol">
                        <button type="submit" class="btn1">MASUK</button>
                        {{-- <h6 class="ps-4">Atau</h6>
                        <button type="submit" class="btn2">Lanjutkan dengan Google</button> --}}
                    </div>
                </form>
            </div>
            <div class="ingat">
                <input type="checkbox" id="checkbox">
                <label for="checkbox">Ingat saya</label>
                <a href="#">Lupa Password?</a>
            </div>
        </div>
        <div class="loregister">
            <p>Belum Punya Akun?
                <a href="/register" class="linkregis">Daftar Disini</a>
            </p>
        </div>
    </main>
</body>

</html>