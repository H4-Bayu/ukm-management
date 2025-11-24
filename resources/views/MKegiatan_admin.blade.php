<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Kegiatan | Admin UKM</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f9fafb;
    }

    .layout-wrapper {
      min-height: 100vh;
    }

    .sidebar {
      width: 240px;
      background: #ffffff;
      border-right: 1px solid #e5e7eb;
    }

    .sidebar-link {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      padding: 10px 12px;
      border-radius: 12px;
      color: #374151;
      text-decoration: none;
      font-size: 0.95rem;
    }

    .sidebar-link:hover {
      background-color: #f3f4ff;
    }

    .sidebar-link.active {
      background-color: #e0edff;
      color: #2563eb;
      font-weight: 600;
    }

    .sidebar-link-icon {
      font-size: 1.1rem;
      margin-top: 2px;
    }

    .sidebar-link-text span {
      display: block;
      line-height: 1.1;
    }

    .content {
      flex: 1;
      padding: 1.5rem 2rem;
    }

    .topbar {
      background-color: #ffffff;
      border-bottom: 1px solid #e5e7eb;
      padding: 0.75rem 2rem;
    }

    .card-activity {
      border: 1px solid #e5e7eb;
      border-radius: 16px;
      padding: 20px;
      background: #fff;
    }

    .status-badge {
      background: #111827;
      color: #fff;
      padding: 2px 10px;
      border-radius: 12px;
      font-size: 0.75rem;
    }

    .status-done {
      background: #e5e7eb;
      color: #374151;
    }

    .btn-round {
      border-radius: 10px;
      font-size: 0.8rem;
    }

    .avatar-sm {
      width: 28px;
      height: 28px;
      background: #e0e7ff;
      color: #1e3a8a;
      font-weight: 600;
      border-radius: 50%;
      font-size: 0.75rem;
    }
  </style>
</head>

<body>
  <div class="layout-wrapper d-flex">

    <!-- SIDEBAR -->
    <aside class="sidebar p-3">
      <h6 class="fw-bold mb-4">Admin Dashboard UKM</h6>

      <nav class="nav flex-column gap-1">
        <!-- Manajemen Pengguna -->
        <a href="/MPengguna_admin"
           class="sidebar-link {{ request()->is('MPengguna_admin') ? 'active' : '' }}">
          <i class="bi bi-people sidebar-link-icon"></i>
          <span class="sidebar-link-text">
            <span>Manajemen</span>
            <span>Pengguna</span>
          </span>
        </a>

        <!-- Manajemen Kegiatan (HALAMAN INI) -->
        <a href="/Mkegiatan_admin"
           class="sidebar-link {{ request()->is('Mkegiatan_admin') ? 'active' : '' }}">
          <i class="bi bi-calendar-event sidebar-link-icon"></i>
          <span class="sidebar-link-text">
            <span>Manajemen</span>
            <span>Kegiatan</span>
          </span>
        </a>

        <!-- Monitoring Absensi -->
        <a href="#" class="sidebar-link">
          <i class="bi bi-clipboard-check sidebar-link-icon"></i>
          <span class="sidebar-link-text">
            <span>Monitoring</span>
            <span>Absensi</span>
          </span>
        </a>

        <!-- Manajemen Kas -->
        <a href="#" class="sidebar-link">
          <i class="bi bi-cash-coin sidebar-link-icon"></i>
          <span class="sidebar-link-text">
            <span>Manajemen</span>
            <span>Kas</span>
          </span>
        </a>
      </nav>
    </aside>

    <!-- AREA KANAN (TOPBAR + CONTENT) -->
    <div class="d-flex flex-column flex-grow-1">

      <!-- TOPBAR -->
      <header class="topbar d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-2">
          <a href="{{ url('/dashboard_admin') }}"
             class="text-decoration-none text-muted d-flex align-items-center">
            <i class="bi bi-arrow-left me-1"></i>
            <span>Kembali</span>
          </a>
          <span class="ms-3 fw-semibold">Admin Dashboard UKM</span>
        </div>

        <div class="d-flex align-items-center gap-2">
          <div class="text-end small">
            <div class="fw-semibold">Admin UKM</div>
            <div class="text-muted">Pengurus</div>
          </div>
          <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center"
               style="width:32px;height:32px;">
            A
          </div>
        </div>
      </header>

      <!-- MAIN CONTENT -->
      <main class="content">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <h4 class="fw-bold mb-1">Manajemen Kegiatan</h4>
            <p class="text-muted mb-0">Kelola jadwal dan detail kegiatan UKM</p>
          </div>

          <button class="btn btn-dark rounded-pill">
            <i class="bi bi-plus me-1"></i> Tambah Kegiatan
          </button>
        </div>

        <!-- CARD LIST -->
        <div class="row g-4">

          <!-- CARD 1 -->
          <div class="col-md-4">
            <div class="card-activity">
              <div class="d-flex justify-content-between">
                <h6 class="fw-bold">Workshop Web Development</h6>
                <span class="status-badge">Akan Datang</span>
              </div>
              <p class="text-muted small mb-2">
                Belajar membuat website dengan React dan Tailwind CSS
              </p>

              <p class="small mb-1"><i class="bi bi-calendar-event"></i> Sabtu, 15 November 2025</p>
              <p class="small mb-1"><i class="bi bi-geo-alt"></i> Lab Komputer 1</p>
              <p class="small mb-1"><i class="bi bi-people"></i> 25 / 30 peserta</p>

              <p class="fw-semibold small mt-3 mb-1">Panitia</p>
              <div class="d-flex align-items-center gap-2 mb-3">
                <div class="avatar-sm d-flex align-items-center justify-content-center">SN</div>
                <div class="avatar-sm d-flex align-items-center justify-content-center">BS</div>
                <span class="small">Siti, Budi</span>
                <a class="ms-auto small text-muted text-decoration-none" href="#">Kelola</a>
              </div>

              <div class="progress mb-3" style="height:6px;">
                <div class="progress-bar bg-primary" style="width:83%"></div>
              </div>

              <div class="d-flex gap-2">
                <button class="btn btn-light border btn-round">
                  <i class="bi bi-pencil"></i> Edit
                </button>
                <button class="btn btn-light border btn-round flex-grow-1">
                  Tutup Registrasi
                </button>
                <button class="btn btn-light border text-danger btn-round">
                  <i class="bi bi-trash"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- CARD 2 -->
          <div class="col-md-4">
            <div class="card-activity">
              <div class="d-flex justify-content-between">
                <h6 class="fw-bold">Bakti Sosial</h6>
                <span class="status-badge">Akan Datang</span>
              </div>
              <p class="text-muted small mb-2">Kegiatan bakti sosial ke panti asuhan</p>

              <p class="small mb-1"><i class="bi bi-calendar-event"></i> Kamis, 20 November 2025</p>
              <p class="small mb-1"><i class="bi bi-geo-alt"></i> Panti Asuhan Harapan</p>
              <p class="small mb-1"><i class="bi bi-people"></i> 42 / 50 peserta</p>

              <p class="fw-semibold small mt-3 mb-1">Panitia</p>
              <div class="d-flex align-items-center gap-2 mb-3">
                <div class="avatar-sm d-flex align-items-center justify-content-center">DL</div>
                <div class="avatar-sm d-flex align-items-center justify-content-center">AW</div>
                <span class="small">Dewi, Andi</span>
                <a class="ms-auto small text-muted text-decoration-none" href="#">Kelola</a>
              </div>

              <div class="progress mb-3" style="height:6px;">
                <div class="progress-bar bg-primary" style="width:84%"></div>
              </div>

              <div class="d-flex gap-2">
                <button class="btn btn-light border btn-round">
                  <i class="bi bi-pencil"></i> Edit
                </button>
                <button class="btn btn-light border btn-round flex-grow-1">Tutup Registrasi</button>
                <button class="btn btn-light border text-danger btn-round">
                  <i class="bi bi-trash"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="col-md-4">
            <div class="card-activity">
              <div class="d-flex justify-content-between">
                <h6 class="fw-bold">Rapat Anggota</h6>
                <span class="status-badge status-done">Selesai</span>
              </div>
              <p class="text-muted small mb-2">Rapat evaluasi kegiatan semester ini</p>

              <p class="small mb-1"><i class="bi bi-calendar-event"></i> Selasa, 28 Oktober 2025</p>
              <p class="small mb-1"><i class="bi bi-geo-alt"></i> Ruang Serbaguna</p>
              <p class="small mb-1"><i class="bi bi-people"></i> 87 / 100 peserta</p>

              <p class="fw-semibold small mt-3 mb-1">Panitia</p>
              <div class="d-flex align-items-center gap-2 mb-3">
                <div class="avatar-sm d-flex align-items-center justify-content-center">SN</div>
                <div class="avatar-sm d-flex align-items-center justify-content-center">BS</div>
                <div class="avatar-sm d-flex align-items-center justify-content-center">DL</div>
                <span class="small">Siti, Budi, Dewi</span>
                <a class="ms-auto small text-muted text-decoration-none" href="#">Kelola</a>
              </div>

              <div class="progress mb-3" style="height:6px;">
                <div class="progress-bar bg-primary" style="width:87%"></div>
              </div>

              <div class="d-flex gap-2">
                <button class="btn btn-light border btn-round">
                  <i class="bi bi-pencil"></i> Edit
                </button>
                <button class="btn btn-light border btn-round flex-grow-1">Buka Registrasi</button>
                <button class="btn btn-light border text-danger btn-round">
                  <i class="bi bi-trash"></i>
                </button>
              </div>
            </div>
          </div>

        </div>

      </main>
    </div>
  </div>
</body>
</html>
