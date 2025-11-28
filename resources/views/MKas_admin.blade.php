<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Kas | Admin UKM</title>

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
      text-align: start;
    }

    .table-card {
      background: #fff; 
      padding: 20px; 
      border-radius: 16px;
      border: 1px solid #e5e7eb;
    }

    .badge-income {
      background: #dcfce7; 
      color: #065f46;
      padding: 3px 10px; 
      border-radius: 6px; 
      font-size: 0.75rem;
    }

    .badge-expense {
      background: #fee2e2; 
      color: #b91c1c;
      padding: 3px 10px; 
      border-radius: 6px; 
      font-size: 0.75rem;
    }

    .money-plus { 
      color: #16a34a; 
      font-weight: 600; 
    }

    .money-minus { 
      color: #dc2626; 
      font-weight: 600; 
    }

    .action-btn { 
      cursor: pointer; 
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
        <a href="{{ url('/dashboard_admin') }}" class="text-decoration-none text-muted d-flex align-items-center">
          <i class="bi bi-arrow-left me-1"></i><span>Kembali</span>
        </a>
        <span class="ms-3 fw-semibold">Admin Dashboard UKM</span>
      </div>

      <div class="d-flex align-items-center gap-2">
        <div class="text-end">
          <div class="fw-semibold small">Admin UKM</div>
          <div class="text-muted small">Pengurus</div>
        </div>
        <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center"
          style="width:32px;height:32px;">A</div>
      </div>
    </header>

    <main class="content">
      <div class="d-flex justify-content-between align-items-center mb-2">
  <div>
    <h4 class="fw-bold mb-1">Manajemen Kas</h4>
    <p class="text-muted">Kelola keuangan kegiatan</p>
  </div>

  <button class="btn btn-dark rounded-pill" data-bs-toggle="modal" data-bs-target="#modalTambah">
    <i class="bi bi-plus me-1"></i> Tambah Transaksi
  </button>
</div>
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card-stat">
            <div class="text-muted small">Total Pemasukan</div>
            <h4 class="text-success fw-bold">Rp 750.000</h4>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-stat">
            <div class="text-muted small">Total Pengeluaran</div>
            <h4 class="text-danger fw-bold">Rp 700.000</h4>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-stat">
            <div class="text-muted small">Saldo</div>
            <h4 class="fw-bold">Rp 50.000</h4>
          </div>
        </div>
      </div>
        <table class="table">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Jenis</th>
              <th>Kategori</th>
              <th>Keterangan</th>
              <th>Nominal</th>
              <th>Dicatat Oleh</th>
              <th>Aksi</th> 
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1/11/2025</td>
              <td><span class="badge-income">Pemasukan</span></td>
              <td>Pendaftaran</td>
              <td>Biaya pendaftaran peserta workshop</td>
              <td class="money-plus">+Rp 750.000</td>
              <td>Ahmad Rizki</td>
              <td>
                <i class="bi bi-pencil-square text-primary action-btn" data-bs-toggle="modal" data-bs-target="#modalEdit"></i>
                <i class="bi bi-trash text-danger ms-2 action-btn"></i>
              </td>
            </tr>

            <tr>
              <td>5/11/2025</td>
              <td><span class="badge-expense">Pengeluaran</span></td>
              <td>Konsumsi</td>
              <td>Snack dan makan siang peserta</td>
              <td class="money-minus">-Rp 550.000</td>
              <td>Ahmad Rizki</td>
              <td>
                <i class="bi bi-pencil-square text-primary action-btn" data-bs-toggle="modal" data-bs-target="#modalEdit"></i>
                <i class="bi bi-trash text-danger ms-2 action-btn"></i>
              </td>
            </tr>

            <tr>
              <td>6/11/2025</td>
              <td><span class="badge-expense">Pengeluaran</span></td>
              <td>Perlengkapan</td>
              <td>Sertifikat dan tas peserta</td>
              <td class="money-minus">-Rp 700.000</td>
              <td>Ahmad Rizki</td>
              <td>
                <i class="bi bi-pencil-square text-primary action-btn" data-bs-toggle="modal" data-bs-target="#modalEdit"></i>
                <i class="bi bi-trash text-danger ms-2 action-btn"></i>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<div class="modal fade" id="modalTambah" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Transaksi</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form>
        <div class="modal-body">

          <label class="form-label">Jenis Transaksi</label>
          <select class="form-select mb-2">
            <option>Pemasukan</option>
            <option>Pengeluaran</option>
          </select>

          <label class="form-label">Kategori</label>
          <select class="form-select mb-2">
            <option>Pendaftaran</option>
            <option>Konsumsi</option>
            <option>Perlengkapan</option>
          </select>

          <label class="form-label">Nominal</label>
          <input type="number" class="form-control mb-2">

          <label class="form-label">Keterangan</label>
          <textarea class="form-control mb-2"></textarea>

          <label class="form-label">Tanggal</label>
          <input type="date" class="form-control mb-2">

          <label class="form-label">Upload Bukti (opsional)</label>
          <input type="file" class="form-control">

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-primary">Simpan</button>
        </div>

      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Transaksi</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form>
        <div class="modal-body">

          <label class="form-label">Jenis Transaksi</label>
          <select class="form-select mb-2">
            <option>Pemasukan</option>
            <option>Pengeluaran</option>
          </select>

          <label class="form-label">Kategori</label>
          <select class="form-select mb-2">
            <option>Pendaftaran</option>
            <option>Konsumsi</option>
            <option>Perlengkapan</option>
          </select>

          <label class="form-label">Nominal</label>
          <input type="number" class="form-control mb-2">

          <label class="form-label">Keterangan</label>
          <textarea class="form-control mb-2"></textarea>

          <label class="form-label">Tanggal</label>
          <input type="date" class="form-control mb-2">

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-primary">Update</button>
        </div>

      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
