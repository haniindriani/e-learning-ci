<section class="bg-light py-5">
    <div class="row justify-content-center my-5">
        <div class="col-md-4 py-4 px-5 bg-white border">
            <h1 class="font-weight-light my-3">Login</h1>
            <form action="user/dashbord.html" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-block btn-info">LOGIN</button>
            </form>
            <div class="my-2">
                Belum punya akun? <a href="<?= base_url('home/registrasi') ?>" class="font-weight-bold text-dark">Registrasi
                    disini</a>
            </div>
        </div>
    </div>
</section>