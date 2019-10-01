<div class="container bg-light">
    <h2 class="text-center py-5">Form Checkout</h2>
    <form action="">
        <div class="row justify-content-center pb-5 ">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                RINGAKASAN PEMESANAN
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Nama Paket</th>
                                            <th>Paket</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dasar-dasar Framework Laravel</td>
                                            <th>Mingguan</th>
                                            <th>40.000</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-header">
                                DATA PENGGUNA
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama" class="font-weight-bold">Nama Lengkap</label>
                                    <br>
                                    <small class="font-weight-italic">Masukkan nama anda di sini</small>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama" class="font-weight-bold">No Whatsapp/ No hp</label>
                                    <br>
                                    <small class="font-weight-italic">Masukkan no whatsapp/no hp anda di sinin</small>

                                    <input type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama" class="font-weight-bold">Photo Pembayaran</label>
                                    <br>
                                    <small class="font-weight-italic">Masukkan bukti transaksi anda dalam bentuk gambar</small>

                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Pilih Photo..</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                METODE PEMBAYARAN
                            </div>
                            <div class="card-body">
                                <input type="radio" id="mp" checked><label for="mp" class="font-weight-bold ml-2">ATM</label>
                                <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                    <option value="">BRI</option>
                                    <option value="">BNI</option>
                                    <option value="">BTN</option>
                                    <option value="">CIMB</option>
                                    <option value="">BCA</option>
                                    <option value="">BJB</option>
                                </select>
                                <hr>
                                <div class="border rounded px-2 py-2">
                                    <small>Pembayaran melalui ATM kami di <strong>Bank Rakyat Indonesia</strong>. Kami akan mengurangi harga total Kamu sebesar angka random antara 1 sampai 999 rupiah untuk memudahkan kami melakukan pengecekan pada saat melakukan verifikasi pembayaran <br><br>
                                        <em>Menggunakan dari bank lain akan dikenakan biaya administrasi antar bank.</em>
                                    </small>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-block btn-warning ">BAYAR SEKARANG</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>