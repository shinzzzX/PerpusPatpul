@section('title', 'Login')
<link rel="icon" type="image/x-icon" href="{{ asset('img/smkn40.png') }}">



<style>
    a {
        text-decoration: none;
    }

    body {
        background-image: url('{{ asset('img/perpus.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%
        height: 100vh;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-right i {
        font-size: 100px;
    }

    img {
        pointer-events: none;
    }

    .test {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .login-page {
        background-color: rgba(255, 255, 255, 0.4); /* Menambahkan lapisan transparan di atas gambar latar belakang */
    }
</style>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Perpus40 | @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>


<body id="page-top" style="background: url('');">

    @if (session()->has('success'))

    <div class="alert alert-success" role="alert">
        {{ session('success') }}
        
    </div>
        
    @endif
    <div class="login-page" style="font-weight: bold;">
        <img src="{{ asset('img/perpus.png') }}" class="test">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h3 class="text-center mb-5 text-bolder" style="color: black; font-weight: bold; font-size: 40px;">LOGIN</h3>
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="{{ route('login.verif') }}" method="POST" class="row g-4">
                                        @csrf
                                        <div class="col-12 mt-3">
                                            <label for="email">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fas fa-user @error('email') is-invalid @enderror"></i></div>
                                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                                    placeholder="napi@example.com" autofocus required>
                                            </div>
                                        </div>
                                        
                                        

                                        <div class="col-12 mt-3">
                                            <label for="password">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                                <input type="password"
                                                    class="form-control"
                                                    name="password" placeholder="hutao123" autofocus required>
                                                    
                                            </div>
                                            @if (session('error'))
                                            <div class="col-12 mt-3">
                                            <div class="alert alert-danger">
                                            {{ session('error') }}
                                            </div>
                                            </div>
                                            @endif
                                            

                                            <div class="mt-3">
                                                Belum Daftar? Mana Maen Daftar lah di -><a class="fs-2"
                                                    href="{{ route('register') }}"> Sini</a>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button class="btn px-4 mt-4 text-light"
                                                style="background: #220ED8; font-weight: bold;"
                                                type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 ps-0 d-none d-md-block">
                                <div
                                    class="form-right h-100 bg-light text-white text-center p-3 shadow bg-body-tertiary rounded">
                                    <img src="img/smkn40.png" alt="" style="pointer-events: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        window.setTimeout(function(){
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);
    </script>

</body>

</html>
