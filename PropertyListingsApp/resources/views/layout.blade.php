<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listing Application - Yonnie</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="logo" style="height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <hr style="border-top: 1px solid white;">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('profile.show', ['user' => auth()->id()]) }}"
                                style="font-weight: bold;">
                                <img src="{{ asset('images/logo.png') }}" alt="logo" style="height: 20px;">
                                Welkom {{ auth()->user()->name }}!
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="/listings/manage">
                                <img src="{{ asset('images/gear.png') }}" alt="logo" style="height: 20px;"> Beheren</a>
                        </li>
                        <li class="nav-item">
                            <form class="nav-link mx-2" method="POST" action="/logout">
                                @csrf
                                <img src="{{ asset('images/logout.png') }}" alt="logo" style="height: 20px;">
                                <button type="submit"
                                    style="background-color: transparent; border: 0; padding: 0; color:#96989a;">
                                    Uitloggen
                                </button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="/register">
                                <img src="{{ asset('images/register.png') }}" alt="logo" style="height: 20px;">
                                Registreer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="/login">
                                <img src="{{ asset('images/login.png') }}" alt="logo" style="height: 20px;"> Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>


    <main>
        @yield('content')
    </main>



    {{-- footer --}}
    <div class="footer-wrapper">
        <footer class="text-center text-lg-start" style="background-color: #3cb371; color: white;">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                <img src="{{ asset('images/home.png') }}" alt="logo"
                                    style="height: 80px;"></i>Property4U
                            </h6>
                            <p>
                                Deze webapplicatie is gemaakt om te leren werken met Bootstrap 5 en Laravel 10
                            </p>
                        </div>

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i>Lindelaan 66, AA1234</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                Property4u@email.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 01 234 567 89</p>
                            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                {{ date('Y') }} ©:
                <a class="text-reset fw-bold"> Yonnie K.</a>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
