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
    <link href="<?= base_url('assets/styles.css') ?>">
    <title><?= $title; ?></title>
</head>

<body class="font-sans">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url('admin'); ?>">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin'); ?>">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="guruDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Guru
                    </a>
                    <div class="dropdown-menu" aria-labelledby="guruDropdown">
                        <a class="dropdown-item" href="<?= base_url('admin/tambah_guru'); ?>">Tambah Guru</a>
                        <a class="dropdown-item" href="<?= base_url('admin/daftar_guru') ?>">Daftar Guru</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="siswaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Siswa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="siswaDropdown">
                        <a class="dropdown-item" href="<?= base_url('admin/tambah_siswa') ?>">Tambah Siswa</a>
                        <a class="dropdown-item" href="<?= base_url('admin/daftar_siswa') ?>">Daftar Siswa</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="mapelDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mata Pelajaran
                    </a>
                    <div class="dropdown-menu" aria-labelledby="mapelDropdown">
                        <a class="dropdown-item" href="<?= base_url('admin/tambah_mapel'); ?>">Tambah Mata Pelajaran</a>
                        <a class="dropdown-item" href="<?= base_url('admin/daftar_mapel'); ?>">Guru & Mata Pelajaran</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/daftar_pdp'); ?>">Pengajuan Data Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Keluar</a>
                </li>
            </ul>
            <form action="<?= base_url('admin/cari_siswa'); ?>" method="POST" class="form-inline ml-auto">
                <div class="flex items-center border-b border-b-2 border-teal-500 py-2">
                    <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" id="keyword" name="keyword" placeholder="Cari siswa...">
                    <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                        Cari!
                    </button>
                </div>
            </form>
        </div>
    </nav>