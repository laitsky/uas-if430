<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url('admin'); ?>">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin'); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/tambah_guru'); ?>">Tambah Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/tambah_siswa') ?>">Tambah Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Keluar</a>
                </li>
            </ul>
        </div>
    </nav>