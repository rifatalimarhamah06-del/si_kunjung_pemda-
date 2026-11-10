
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - SI Kunjung Pemda</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            background: #f3f6fc;
            font-family: Arial, sans-serif;
            color: #202b40;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #202b3c;
            color: white;
            padding: 20px 12px;
            overflow-y: auto;
        }

        .brand {
            padding: 12px;
            font-size: 21px;
            font-weight: bold;
            border-bottom: 1px solid #465064;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: #dce3ef;
            text-decoration: none;
            padding: 13px 15px;
            border-radius: 8px;
            margin-bottom: 5px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #2875f5;
            color: white;
        }

        .sidebar a i {
            margin-right: 12px;
        }

        .main {
            margin-left: 250px;
        }

        .topbar {
            background: white;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 25px;
            box-shadow: 0 2px 8px #00000008;
        }

        .content {
            padding: 25px;
        }

        .welcome {
            background: linear-gradient(110deg, #ffffff, #dceaff);
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 20px;
            border: 1px solid #e0e7f2;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 22px;
            border: 1px solid #e1e7f0;
            height: 100%;
        }

        .stat-icon {
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 27px;
        }

        .panel {
            background: white;
            padding: 22px;
            border-radius: 12px;
            border: 1px solid #e1e7f0;
            height: 100%;
        }

        .panel-title {
            font-size: 18px;
            font-weight: bold;
            padding-bottom: 15px;
            border-bottom: 1px solid #edf0f5;
            margin-bottom: 15px;
        }

        .chart-placeholder {
            height: 210px;
            display: flex;
            align-items: end;
            justify-content: space-around;
            border-bottom: 1px solid #ddd;
            background: repeating-linear-gradient(
                to bottom,
                transparent,
                transparent 48px,
                #edf1f7 49px
            );
            padding: 10px;
        }

        .chart-bar {
            width: 8%;
            background: linear-gradient(#6aa5ff, #2875f5);
            border-radius: 7px 7px 0 0;
        }

        .activity {
            padding: 12px 0;
            border-bottom: 1px solid #edf0f5;
        }

        .activity:last-child {
            border-bottom: none;
        }

        @media(max-width: 768px) {
            .sidebar {
                width: 70px;
            }

            .sidebar .menu-text,
            .sidebar .brand-text {
                display: none;
            }

            .sidebar a {
                text-align: center;
                padding: 14px 5px;
            }

            .sidebar a i {
                margin: 0;
                font-size: 20px;
            }

            .main {
                margin-left: 70px;
            }

            .content {
                padding: 15px;
            }
        }
    </style>
</head>

<body>

<div class="sidebar">
    <div class="brand">
        <i class="bi bi-building"></i>
        <span class="brand-text">SI Kunjung Pemda</span>
    </div>

    <a href="/dashboard" class="active">
        <i class="bi bi-house-door"></i>
        <span class="menu-text">Dashboard</span>
    </a>

    <a href="/penduduk">
        <i class="bi bi-people"></i>
        <span class="menu-text">Data Penduduk</span>
    </a>

    <a href="/jabatan">
        <i class="bi bi-briefcase"></i>
        <span class="menu-text">Data Jabatan</span>
    </a>

    <a href="/pemohon">
        <i class="bi bi-person"></i>
        <span class="menu-text">Data Pemohon</span>
    </a>

    <a href="/kunjungan">
        <i class="bi bi-calendar-event"></i>
        <span class="menu-text">Data Kunjungan</span>
    </a>

    <a href="/jabatan-penduduk">
        <i class="bi bi-diagram-3"></i>
        <span class="menu-text">Jabatan Penduduk</span>
    </a>

    <a href="/settings-kunjungan">
        <i class="bi bi-gear"></i>
        <span class="menu-text">Settings Kunjungan</span>
    </a>

    <a href="/settings-kegiatan">
        <i class="bi bi-calendar-check"></i>
        <span class="menu-text">Settings Kegiatan</span>
    </a>

    <hr>

    <a href="/logout">
        <i class="bi bi-box-arrow-right"></i>
        <span class="menu-text">Logout</span>
    </a>
</div>

<div class="main">

    <div class="topbar">
        <div>
            <i class="bi bi-grid fs-5 me-2"></i>
            <strong>Dashboard</strong>
        </div>

        <div>
            <i class="bi bi-bell fs-5 me-3"></i>
            <i class="bi bi-person-circle fs-5 me-2"></i>
            {{ session('nama', 'Administrator') }}
        </div>
    </div>

    <div class="content">

        <div class="welcome">
            <h2>👋 Selamat Datang!</h2>
            <h4 class="text-primary">
                {{ session('nama', 'Administrator') }}
            </h4>
            <p class="mb-0">
                Anda berhasil masuk ke SI Kunjung Pemda.
                Selamat bekerja!
            </p>
        </div>

        @php
            $jumlahPenduduk = \App\Models\Penduduk::count();
            $jumlahPemohon = \App\Models\Pemohon::count();
            $jumlahKunjungan = \App\Models\Kunjungan::count();
            $jumlahKegiatan = \App\Models\SettingsKegiatan::count();
        @endphp

        <div class="row g-3 mb-4">

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stat-icon bg-primary-subtle text-primary">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div>
                            <div class="text-muted">Total Penduduk</div>
                            <h3 class="fw-bold mb-0">{{ number_format($jumlahPenduduk) }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stat-icon bg-success-subtle text-success">
                            <i class="bi bi-person-lines-fill"></i>
                        </div>
                        <div>
                            <div class="text-muted">Total Pemohon</div>
                            <h3 class="fw-bold mb-0">{{ number_format($jumlahPemohon) }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stat-icon bg-primary-subtle text-primary">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <div>
                            <div class="text-muted">Total Kunjungan</div>
                            <h3 class="fw-bold mb-0">{{ number_format($jumlahKunjungan) }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stat-icon bg-warning-subtle text-warning">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <div>
                            <div class="text-muted">Total Kegiatan</div>
                            <h3 class="fw-bold mb-0">{{ number_format($jumlahKegiatan) }}</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row g-3">

            <div class="col-lg-8">
                <div class="panel">
                    <div class="panel-title">
                        <i class="bi bi-bar-chart-line me-2"></i>
                        Ringkasan Sistem
                    </div>

                    <p class="text-muted">
                        Statistik data SI Kunjung Pemda.
                    </p>

                    <div class="chart-placeholder">
                        <div class="chart-bar" style="height:35%"></div>
                        <div class="chart-bar" style="height:55%"></div>
                        <div class="chart-bar" style="height:45%"></div>
                        <div class="chart-bar" style="height:75%"></div>
                        <div class="chart-bar" style="height:60%"></div>
                        <div class="chart-bar" style="height:90%"></div>
                        <div class="chart-bar" style="height:70%"></div>
                    </div>

                    <div class="d-flex justify-content-around mt-2 text-muted small">
                        <span>Sen</span>
                        <span>Sel</span>
                        <span>Rab</span>
                        <span>Kam</span>
                        <span>Jum</span>
                        <span>Sab</span>
                        <span>Min</span>
                    </div>
                    <small class="text-muted">
                        Grafik visual sementara, belum terhubung ke data kunjungan harian.
                    </small>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="panel">
                    <div class="panel-title">
                        <i class="bi bi-lightning-charge-fill text-success me-2"></i>
                        Menu Cepat
                    </div>

                    <div class="activity">
                        <a href="/penduduk" class="text-decoration-none">
                            <i class="bi bi-people me-2"></i>
                            Kelola Data Penduduk
                        </a>
                    </div>

                    <div class="activity">
                        <a href="/pemohon" class="text-decoration-none">
                            <i class="bi bi-person me-2"></i>
                            Kelola Data Pemohon
                        </a>
                    </div>

                    <div class="activity">
                        <a href="/kunjungan" class="text-decoration-none">
                            <i class="bi bi-calendar-event me-2"></i>
                            Kelola Data Kunjungan
                        </a>
                    </div>

                    <div class="activity">
                        <a href="/settings-kunjungan" class="text-decoration-none">
                            <i class="bi bi-gear me-2"></i>
                            Pengaturan Kunjungan
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="panel">
                    <div class="panel-title">
                        <i class="bi bi-info-circle me-2"></i>
                        Informasi Sistem
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <span class="text-muted">Aplikasi</span>
                            <p class="fw-bold">SI Kunjung Pemda</p>
                        </div>

                        <div class="col-md-4">
                            <span class="text-muted">Framework</span>
                            <p class="fw-bold">Laravel 13</p>
                        </div>

                        <div class="col-md-4">
                            <span class="text-muted">Status</span>
                            <p class="fw-bold text-success">
                                <i class="bi bi-circle-fill small"></i>
                                Online
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

</body>
</html>
