<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monitoring Absensi | Admin UKM</title>

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
      background: #fff;
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
      background: #fff;
      border-bottom: 1px solid #e5e7eb;
      padding: 0.75rem 2rem;
    }

    .card-stat {
      background: #fff;
      padding: 18px;
      border-radius: 16px;
      border: 1px solid #e5e7eb;
      text-align: center;
    }

    .badge-status {
      padding: 4px 10px;
      border-radius: 8px;
      font-size: 0.75rem;
    }

    .badge-menunggu { background: #f3f4f6; color: #111827; }
    .badge-disetujui { background: #dcfce7; color: #065f46; }
    .badge-hadir { background: #d1fae5; color: #065f46; }
    .badge-ditolak { background: #fee2e2; color: #991b1b; }

    .tabs button {
      border: none;
      background: #e5e7eb;
      padding: 6px 16px;
      border-radius: 20px;
      font-size: 0.85rem;
      margin-right: 6px;
    }

    .tabs .active {
      background: #111827;
      color: #fff;
    }

    .table-card {
      background: #fff;
      padding: 20px;
      border-radius: 16px;
      border: 1px solid #e5e7eb;
    }

    .content {
      flex: 1;
      padding: 1.5rem 2rem;
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
    <aside class="sidebar p-3">
      <h6 class="fw-bold mb-4">Admin Dashboard UKM</h6>

      <nav class="nav flex-column gap-1">
        <a href="/MPengguna_admin"
           class="sidebar-link {{ request()->is('MPengguna_admin') ? 'active' : '' }}">
          <i class="bi bi-people sidebar-link-icon"></i>
          <span class="sidebar-link-text">
            <span>Manajemen</span>
            <span>Pengguna</span>
          </span>
        </a>

        <a href="/Mkegiatan_admin"
           class="sidebar-link {{ request()->is('Mkegiatan_admin') ? 'active' : '' }}">
          <i class="bi bi-calendar-event sidebar-link-icon"></i>
          <span class="sidebar-link-text">
            <span>Manajemen</span>
            <span>Kegiatan</span>
          </span>
        </a>

        <a href="/MAbsensi_admin" 
        class="sidebar-link {{ request()->is('MAbsensi_admin') ? 'active' : '' }}">
          <i class="bi bi-clipboard-check sidebar-link-icon"></i>
          <span class="sidebar-link-text">
            <span>Monitoring</span>
            <span>Absensi</span>
          </span>
        </a>

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


  <div class="d-flex flex-column flex-grow-1">

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

    <main class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-bold mb-1">Monitoring Absensi</h4>
                <p class="text-muted mb-0">Kelola kehadiran peserta kegiatan</p>
            </div>
    
            <div class="d-flex justify-content-end align-items-center mb-3 gap-2">
                <select class="form-select w-auto">
                    <option>Workshop Web Development</option>
                    <option>Bakti Sosial</option>
                </select>
                <button class="btn btn-outline-dark">
                    <i class="bi bi-file-earmark-arrow-down"></i> Ekspor CSV
                </button>
            </div>
        </div>
        
        <div class="row g-0.5 mt-1 mb-4">

        <div class="col-md-3">
          <div class="card-stat">
            <div class="text-muted small mb-1">Menunggu Persetujuan</div>
            <h3>1</h3>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card-stat">
            <div class="text-muted small mb-1">Disetujui</div>
            <h3>1</h3>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card-stat">
            <div class="text-muted small mb-1">Hadir</div>
            <h3>1</h3>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card-stat">
            <div class="text-muted small mb-1">Tidak Hadir</div>
            <h3>0</h3>
          </div>
        </div>
      </div>

      <!-- TABLE CARD -->
      <div class="table-card">

        <div class="tabs mb-3">
          <button class="active">Semua (3)</button>
          <button>Menunggu (1)</button>
          <button>Disetujui (1)</button>
          <button>Hadir (1)</button>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th>Nama</th>
              <th>NPM</th>
              <th>Status</th>
              <th>Tanggal Daftar</th>
              <th>Tanggal Hadir</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td>Siti Nurhaliza</td>
              <td>20201213</td>
              <td><span class="badge-status badge-disetujui">Disetujui</span></td>
              <td>1/11/2025, 17.00</td>
              <td>-</td>
              <td><button class="btn btn-sm btn-dark">✓ Tandai Hadir</button></td>
            </tr>

            <tr>
              <td>Budi Santoso</td>
              <td>2323456</td>
              <td><span class="badge-status badge-hadir">Hadir</span></td>
              <td>1/11/2025, 18.00</td>
              <td>15/11/2025, 20.00</td>
              <td></td>
            </tr>

            <tr>
              <td>Dewi Lestari</td>
              <td>1923457</td>
              <td><span class="badge-status badge-menunggu">Menunggu</span></td>
              <td>2/11/2025, 16.00</td>
              <td>-</td>
              <td>
                <button class="btn btn-sm btn-dark">✓ Setujui</button>
                <button class="btn btn-sm btn-outline-dark">✕ Tolak</button>
              </td>
            </tr>

          </tbody>

        </table>

      </div>

    </main>
  </div>
</div>

</body>
</html>
