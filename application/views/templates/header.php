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
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white font-weight-bold">
            <div class="container">
                <small class="navbar-nav ml-md-auto">
                    <a class="nav-item nav-link" href="<?= base_url('home/login') ?>">LOGIN/REGISTRASI</a>
                    <div class="dropdown">
                        <a class="nav-item nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?= base_url('assets/') ?>img/avatar.png" alt="" width="30" class="rounded-circle" style="margin-top:-10px;">
                            HANI INDRIANI
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('user/dashboard') ?>"><i class=" fa fa-user"></i> Akunku</a>
                            <a class="dropdown-item" href="<?= base_url('logout ') ?>"><i class=" fa fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </div>
                </small>
            </div>
        </nav> -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom font-weight-bold">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('home') ?>">
                    <img src="<?= base_url('assets/') ?>img/logo-rekape.png" width="130">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav ml-md-auto">
                        <!-- <form action="" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control cari" placeholder="Cari..">
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form> -->
                        <div class="dropdown">
                            <a class="nav-item nav-link" href="#collapseExample" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <i class="fa fa-search"></i>
                            </a>

                            <div class="collapse" id="collapseExample">
                                <div class="card">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                        <a class="nav-item nav-link px-2" href="<?= base_url('home/keranjang') ?>">KERANJANG</a>
                        <a class="nav-item btn btn-info" href="<?= base_url('home/login') ?>">LOGIN/REGISTRASI</a>
                        <!-- <div class="dropdown">
                            <a class="nav-item nav-link border-left px-4" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                HANI INDRIANI
                                <img src="<?= base_url('assets/') ?>img/avatar.png" alt="" width="30" class="rounded-circle" style="margin-top:-10px;">
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="<?= base_url('user/dashboard') ?>"><i class=" fa fa-user"></i> Akunku</a>
                                <a class="dropdown-item" href="<?= base_url('logout ') ?>"><i class=" fa fa-sign-out-alt"></i> Logout</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navbar -->
    </header>