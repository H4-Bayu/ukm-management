<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | SIMASI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- NAVBAR -->
    <nav class="navbar navbar-light bg-white shadow-sm px-4 py-3">
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/logo.png') }}" width="38" class="me-3">
            <div>
                <h6 class="mb-0 fw-bold">SIMASI</h6>
                <small>Sistem Manajemen dan Absensi Kegiatan UKM</small>
            </div>
        </div>

        <div class="text-end">
            <h6 class="fw-bold mb-0">Hasbah Ringga</h6>
            <small>12345678</small>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container py-4 mb-5"> <!-- DITAMBAH mb-5 -->

        <h4 class="fw-bold mb-1">Daftar Kegiatan</h4>
        <p class="text-muted">Pilih kegiatan yang ingin kamu ikuti</p>

        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4">
                    <img src="{{ asset('images/workshop.png') }}" class="card-img-top rounded-top-4">
                    <div class="card-body">
                        <h5 class="fw-semibold">Workshop React & TypeScript</h5>
                        <p class="text-muted small mb-2">
                            Belajar membuat aplikasi web modern menggunakan React dan TypeScript...
                        </p>

                        <p class="small mb-1">📅 Senin, 18 November 2025 - 14:00 WIB</p>
                        <p class="small mb-1">📍 Ruang Komputer 2</p>
                        <p class="small">👥 27 / 50 peserta</p>

                        <button class="btn btn-primary w-100 rounded-pill mt-2">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4">
                    <img src="{{ asset('images/seminar.png') }}" class="card-img-top rounded-top-4">
                    <div class="card-body">
                        <h5 class="fw-semibold">Seminar Kewirausahaan Digital</h5>
                        <p class="text-muted small mb-2">
                            Membagikan pengalaman dari startup sukses untuk membangun bisnis digital...
                        </p>

                        <p class="small mb-1">📅 Rabu, 19 November 2025 - 09:00 WIB</p>
                        <p class="small mb-1">📍 Aula Universitas</p>
                        <p class="small">👥 148 / 200 peserta</p>

                        <button class="btn btn-primary w-100 rounded-pill mt-2">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4">
                    <img src="{{ asset('images/kompetesi.png') }}" class="card-img-top rounded-top-4">
                    <div class="card-body">
                        <h5 class="fw-semibold">Kompetisi Desain UI/UX</h5>
                        <p class="text-muted small mb-2">
                            Kompetisi desain antarmuka untuk aplikasi mobile bertema "Smart Campus"...
                        </p>

                        <p class="small mb-1">📅 Kamis, 21 November 2025 - 10:00 WIB</p>
                        <p class="small mb-1">📍 Gedung Kreatif L1-10</p>
                        <p class="small">👥 20 / 30 peserta</p>

                        <button class="btn btn-primary w-100 rounded-pill mt-2">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4">
                    <img src="{{ asset('images/speaking.png') }}" class="card-img-top rounded-top-4">
                    <div class="card-body">
                        <h5 class="fw-semibold">Seminar Public Speaking</h5>
                        <p class="text-muted small mb-2">
                            Pelatihan berbicara di depan publik dengan teknik profesional...
                        </p>

                        <p class="small mb-1">📅 Selasa, 25 November 2025 - 13:00 WIB</p>
                        <p class="small mb-1">📍 Ruang Seminar B-201</p>
                        <p class="small">👥 45 / 60 peserta</p>

                        <button class="btn btn-primary w-100 rounded-pill mt-2">Lihat Detail</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- NAVBAR BAWAH -->
    <nav class="navbar bg-white border-top fixed-bottom">
        <div class="container d-flex justify-content-around">

            <a href="#" class="text-center text-dark text-decoration-none">
                <i class="bi bi-calendar-event fs-3"></i>
                <div class="small">Kegiatan</div>
            </a>

            <a href="#" class="text-center text-dark text-decoration-none">
                <i class="bi bi-clipboard-check fs-3"></i>
                <div class="small">Absensi</div>
            </a>

            <a href="#" class="text-center text-dark text-decoration-none">
                <i class="bi bi-clock-history fs-3"></i>
                <div class="small">Riwayat</div>
            </a>

            <a href="#" class="text-center text-dark text-decoration-none">
                <i class="bi bi-person-circle fs-3"></i>
                <div class="small">Profil</div>
            </a>

        </div>
    </nav>

</body>
</html>
