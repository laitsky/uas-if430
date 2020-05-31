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
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-lg px-12">
        <a class="navbar-brand" href="<?= base_url('siswa'); ?>">
            <img src="<?= base_url('assets/img/logo3.png'); ?>" width="50" height="50" alt="Logo Sekolah" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link font-semibold" href="<?= base_url('siswa'); ?>"><span class="text-gray-600 hover:text-gray-800"><i class="las la-home"></i>Beranda</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-semibold" href="<?= base_url('siswa/profil'); ?>"><span class="text-gray-600 hover:text-gray-800"><i class="las la-user-circle"></i>Profil Saya</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-semibold" href="<?= base_url('auth/logout'); ?>"><span class="text-gray-600 hover:text-gray-800"><i class="las la-sign-out-alt"></i>Keluar</span></a>
                </li>
            </ul>
        </div>
    </nav>