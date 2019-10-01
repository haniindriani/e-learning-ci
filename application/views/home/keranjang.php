<section class="bg-light">
    <div class="container py-5">
        <table class="table bg-white border">
            <thead class="bg-info text-white">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Harga</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($i <= 10) : ?>
                    <tr>
                        <th><?= $i++; ?></th>
                        <th>
                            <img src="<?= base_url('assets/') ?>img/thumbnail-kelas-online-laravel.jpg" alt="" width="40" class="mr-2">Dasar-dasar Framework Laravel
                        </th>
                        <th>Mingguan</th>
                        <th>Rp 40.000</th>
                        <th>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-times-circle"></i> Batalkan</a>
                            <a href="<?= base_url('home/checkout') ?>" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i> Chekout</a>
                        </th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</section>