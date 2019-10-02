<div class="jumbotron background" style="background-image:url('<?= base_url('assets/') ?>img/bg-home.jpg')">
    <div class="container">
        <div class="row justify-content-center text-center my-3 text-white">
            <div class="col-md-10">
                <h1 class="my-3">Belajar Coding Online</h1>
                <p class="lead my-4">Ingin belajar coding secara online dengan lebih terarah? Gabung sekarang
                    dalam program
                    Premium
                    Membership di CodePolitan. Dapatkan ratusan modul belajar pemrograman premium dalam beragam
                    format dengan
                    materi silabus lengkap dan tersusun rapi dari awal hingga mahir.
                    <!-- </p>
                <form action="" method="post">
                    <div class="form-group">
                        <div class="input-group mb-3 input-group-lg">
                            <input type="text" class="form-control" placeholder="Cari..">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <em>Cari topik pembelajaran berdasarkan nama topik, harga, dan pengajar</em> -->
            </div>
        </div>
    </div>
</div>

<section id="pelajari">
    <div class="container my-5">
        <h1 class="text-center">Materi Belajar Coding Online Terbaru</h1>
        <p class="lead text-center mb-5">
            Ratusan modul belajar pemrograman premium dalam beragam format yang bisa kamu pelajari.
        </p>
        <div class="row my-5">
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <div class="col-sm-3 mb-4">
                    <div class="card" style="width: 16rem;">
                        <img src="<?= base_url('assets/') ?>img/thumbnail-kelas-online-laravel.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <!-- <small class="text-info">
                                <i class="fa fa-book"></i> 45 Modul
                            </small>|
                            <small class="text-danger">
                                <i class="fa fa-video"></i> 15 jam++
                            </small> <br> -->
                            <strong>Rp 350.000</strong>
                            <a href="<?= base_url('home/pembelajaran') ?>" class="btn btn-outline-dark btn-block mt-5"><i class="fa fa-search"></i>
                                LIHAT
                                KELAS</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>