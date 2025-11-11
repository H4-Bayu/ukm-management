<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SIMASI</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Background full -->
    <style>
        body {
            background: url('{{ asset('images/unila.jpg') }}') center/cover no-repeat fixed;
            height: 100vh;
            margin: 0;
        }

        /* Hilangkan batas/overlay */
        .left-clean {
            background: transparent;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row vh-100">

            <!-- KIRI: Teks tanpa shadow/bayangan -->
            <div class="col-md-6 d-none d-md-flex flex-column justify-content-center align-items-start text-white p-5 left-clean">
                <h1 class="fw-bold display-3">Dare to<br>change!</h1>
            </div>

            <!-- KANAN: Form Login -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">

                <div class="card shadow p-4 rounded-4" style="width: 90%; max-width: 420px; border: none; background: rgba(255,255,255,0.92); backdrop-filter: blur(5px);">

                    <div class="text-center mb-4">
                        <img src="{{ asset('images/logo.png') }}" width="60" class="mb-2">
                        <h4 class="fw-semibold">Selamat Datang Kembali</h4>
                    </div>

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form action="/login" method="POST">
                        @csrf

                        <div class="mb-3">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Remember me</label>
                            </div>
                            <a href="#">Lupa Kata Sandi?</a>
                        </div>

                        <button class="btn btn-primary w-100 py-2 rounded-pill">Login</button>

                        <button type="button" class="btn btn-outline-primary w-100 mt-3 py-2 rounded-pill">
                            Login dengan Google
                        </button>

                        <p class="text-center mt-3">
                            Belum memiliki akun?
                            <a href="#">Daftar disini</a>
                        </p>

                    </form>

                </div>

            </div>

        </div>
    </div>

</body>
</html>