<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/mainstyle.css">
    <title><?= $judul; ?></title>

</head>

<body>

    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('home') ?>">
                    <img src="<?= base_url('assets/') ?>img/codepolitan_logo.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav">
                        <form action="" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control cari" placeholder="Cari..">
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <a class="nav-item nav-link" href="<?= base_url('home/keranjang') ?>"><i class="fa fa-shopping-cart fa-2x"></i>
                            <span class="badge badge-danger">0</span></a>
                        <a class="nav-item nav-link" href="<?= base_url('home/login') ?>">Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navbar -->
    </header>