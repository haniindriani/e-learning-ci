<section class="bg-light py-5">
    <div class="row justify-content-center my-5">
        <div class="col-md-6 bg-white border rounded">
            <div class="container py-5 px-5">
                <h1 class="font-weight-light my-3">Registrasi</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkapmu">
                    </div>
                    <div class="form-group">
                        <label for="ttl">Tempat Lahir</label>
                        <input type="text" class="form-control" id="ttl" placeholder="Masukkan tempat kelahiranmu">
                    </div>
                    <div class="form-group">
                        <label for="tl">Tanggal lahir</label>
                        <input type="text" class="form-control datepicker">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="custom-select" id="jk">
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto">
                                <label class="custom-file-label" for="foto">Pilih foto</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no">No.Telp</label><br>
                        <input type="text" class="form-control" id="no" placeholder="Nomor seluler/WhatsApp">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan alamat email yang valid, mis. namasaya@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="prov">Provinsi</label>
                        <select class="custom-select" id="prov">
                            <option value="">Jawa Timur</option>
                            <option value="">Jawa Tengah</option>
                            <option value="">Jawa Barat</option>
                            <option value="">Kalimantan Barat</option>
                            <option value="">Kalimantan Tengah</option>
                            <option value="">Kalimantan Selatan</option>
                            <option value="">Kalimantan Timur</option>
                            <option value="">Sumatra Utara</option>
                            <option value="">Sumatra Selatan</option>
                            <option value="">Sumatra Tengah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sandi">Kata Sandi</label>
                        <input type="password" class="form-control" id="sandi" placeholder="Masukkan kata sandi minimal 6 karakter">
                    </div>
                    <button type="submit" class="btn btn-block btn-info">REGISTRASI</button>
                </form>
                <div class="my-2 float-right">
                    Sudah punya akun? <a href="<?= base_url('user/login') ?>" class="font-weight-bold text-dark">Login
                        disini</a>
                </div>
            </div>
        </div>
    </div>
</section>