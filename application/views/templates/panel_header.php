<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">
    <link rel="icon" type="png" href="<?= base_url('assets/img/logo3.png'); ?>">
    <title><?= $title; ?></title>
</head>

<body class="font-sans">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand" href="<?= base_url('siswa'); ?>">
            <img src="<?= base_url('assets/img/logo3.png'); ?>" width="50" height="50" alt="Logo Sekolah" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin'); ?>"><i class="las la-home"></i>Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="guruDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-chalkboard-teacher"></i>Guru
                    </a>
                    <div class="dropdown-menu" aria-labelledby="guruDropdown">
                        <a class="dropdown-item" href="<?= base_url('admin/tambah_guru'); ?>">Tambah Guru</a>
                        <a class="dropdown-item" href="<?= base_url('admin/daftar_guru') ?>">Daftar Guru</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="siswaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-user-graduate"></i>Siswa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="siswaDropdown">
                        <a class="dropdown-item" href="<?= base_url('admin/tambah_siswa') ?>">Tambah Siswa</a>
                        <a class="dropdown-item" href="<?= base_url('admin/daftar_siswa') ?>">Daftar Siswa</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="mapelDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="las la-school"></i>Mata Pelajaran
                    </a>
                    <div class="dropdown-menu" aria-labelledby="mapelDropdown">
                        <a class="dropdown-item" href="<?= base_url('admin/tambah_mapel'); ?>">Tambah Mata Pelajaran</a>
                        <a class="dropdown-item" href="<?= base_url('admin/daftar_mapel'); ?>">Guru & Mata Pelajaran</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/daftar_pdp'); ?>"><i class="las la-address-book"></i>Pengajuan Data Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('auth/logout'); ?>"><i class="las la-sign-out-alt"></i>Keluar</a>
                </li>
            </ul>
            <form action="<?= base_url('admin/cari_siswa'); ?>" method="POST" class="form-inline ml-auto">
                <div class="flex items-center border-b border-b-2 border-blue-500 py-2">
                    <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" id="keyword" name="keyword" placeholder="Cari siswa...">
                    <button class="flex-shrink-0 bg-blue-500 hover:bg-blue-700 border-blue-500 hover:border-blue-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                        <i class="las la-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </nav>