<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Pengguna | Admin UKM</title>

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

    .table td,
    .table th {
      vertical-align: middle;
    }

    .badge-role {
      font-size: 0.8rem;
    }
  </style>
</head>

<body>
  <div class="layout-wrapper d-flex">

    <!-- SIDEBAR -->
    <aside class="sidebar p-3">
      <h6 class="fw-bold mb-4">Admin Dashboard UKM</h6>

      <nav class="nav flex-column gap-1">
        <!-- Manajemen Pengguna (HALAMAN INI) -->
        <a href="/MPengguna_admin"
           class="sidebar-link {{ request()->is('MPengguna_admin') ? 'active' : '' }}">
          <i class="bi bi-people sidebar-link-icon"></i>
          <span class="sidebar-link-text">
            <span>Manajemen</span>
            <span>Pengguna</span>
          </span>
        </a>

        <!-- Manajemen Kegiatan -->
        <a href="/Mkegiatan_admin"
           class="sidebar-link {{ request()->is('Mkegiatan_admin') ? 'active' : '' }}">
          <i class="bi bi-calendar-event sidebar-link-icon"></i>
          <span class="sidebar-link-text">
            <span>Manajemen</span>
            <span>Kegiatan</span>
          </span>
        </a>

        <!-- Monitoring Absensi -->
        <a href="/MAbsensi_admin" class="sidebar-link">
          <i class="bi bi-clipboard-check sidebar-link-icon"></i>
          <span class="sidebar-link-text">
            <span>Monitoring</span>
            <span>Absensi</span>
          </span>
        </a>

        <!-- Manajemen Kas -->
        <a href="/MKas_admin" 
        class="sidebar-link {{ request()->is('MKas_admin') ? 'active' : '' }}">
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
          <div class="text-end">
            <div class="fw-semibold small">Admin UKM</div>
            <div class="text-muted small">Pengurus</div>
          </div>
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center bg-primary text-white"
               style="width:32px;height:32px;">
            A
          </div>
        </div>
      </header>

      <!-- MAIN CONTENT -->
      <main class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <h4 class="fw-bold mb-1">Manajemen Pengguna</h4>
            <p class="text-muted mb-0">Kelola akun anggota dan pengurus UKM</p>
          </div>
          <button class="btn btn-dark rounded-pill">
            <i class="bi bi-plus me-1"></i> Tambah Anggota
          </button>
        </div>

        <div class="bg-white rounded-4 p-4 shadow-sm border">
          <h6 class="fw-semibold mb-1">Daftar Anggota</h6>
          <p class="text-muted small mb-3">Total 6 anggota terdaftar</p>

          <div class="table-responsive">
            <table class="table align-middle">
              <thead class="table-light">
                <tr>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Email</th>
                  <th>Prodi</th>
                  <th>Role</th>
                  <th>Tanggal Bergabung</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Ahmad Rizki</td>
                  <td>2021001</td>
                  <td>ahmad@email.com</td>
                  <td>Teknik Informatika</td>
                  <td><span class="badge bg-dark text-white badge-role">Pengurus</span></td>
                  <td>1/9/2021</td>
                  <td>
                    <a href="#" class="text-dark me-2"><i class="bi bi-pencil"></i></a>
                    <a href="#" class="text-danger"><i class="bi bi-trash"></i></a>
                  </td>
                </tr>

                <tr>
                  <td>Siti Nurhaliza</td>
                  <td>2021002</td>
                  <td>siti@email.com</td>
                  <td>Sistem Informasi</td>
                  <td><span class="badge bg-light text-dark border badge-role">Anggota</span></td>
                  <td>1/9/2021</td>
                  <td>
                    <a href="#" class="text-dark me-2"><i class="bi bi-pencil"></i></a>
                    <a href="#" class="text-danger"><i class="bi bi-trash"></i></a>
                  </td>
                </tr>

                <tr>
                  <td>Budi Santoso</td>
                  <td>2021003</td>
                  <td>budi@email.com</td>
                  <td>Teknik Elektro</td>
                  <td><span class="badge bg-light text-dark border badge-role">Anggota</span></td>
                  <td>15/9/2021</td>
                  <td>
                    <a href="#" class="text-dark me-2"><i class="bi bi-pencil"></i></a>
                    <a href="#" class="text-danger"><i class="bi bi-trash"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>

    </div>
  </div>
</body>
</html>
