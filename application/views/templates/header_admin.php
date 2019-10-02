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
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom font-weight-bold">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= base_url('') ?>">
                    <img src="<?= base_url('assets/') ?>img/logo-rekape.png" width="130">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav ml-md-auto">
                        <div class="dropdown">
                            <a class="nav-item nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ADMINISTRATOR
                                <img src="<?= base_url('assets/') ?>img/avatar.png" alt="" width="30" class="rounded-circle" style="margin-top:-10px;">
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="<?= base_url('admin/logout') ?>"><i class=" fa fa-sign-out-alt"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navbar -->
    </header>