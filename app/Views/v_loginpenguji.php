<?= $this->extend('template/template-frontend') ?>
<?= $this->section('content') ?>




<div class="row  d flex align-items-center justify-content-between" style="margin-top:100px;">
    <div class="col-lg-8 mb-5 text-center">
        <h1>Halaman Login</h1>
        <h5>Penguji</h5>
    </div>
    <div class="col-lg-4">
        <div class="form-group " style="box-shadow:  rgba(149, 157, 165, 0.2) 0px 8px 24px; 
            padding: 20px;  ">

            <?php
            $errors = session()->getFlashdata('errors');


            if (!empty($errors)) { ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php } ?>

            <?php if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('pesan');
                echo ' </div>';
            } ?>




            <?php echo form_open('auth/cek_login_user') ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Sign In</button>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>