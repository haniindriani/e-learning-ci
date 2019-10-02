<section class="bg-light py-5">
    <div class="row justify-content-center my-5">
        <div class="col-md-4 py-4 px-5 bg-white border rounded">
            <h1 class="font-weight-light my-3">Login</h1>
            <form action="<?= base_url('user/dashboard') ?>" method="post">
                <div class="form-group">
                    <label for="email">Username</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-block btn-info">LOGIN</button>
            </form>
        </div>
    </div>
</section>