<div style="margin: 6% 30px 30px 30px;" class="center">
    <div class="row">
        <?= $this->session->flashdata('message'); ?>
        <div class="col-sm-9">
            <div class="d1">
                <img src="<?= base_url('aset/') ?>images/barang/bground.jpg" alt="">
            </div>
        </div>
        <div class="col-sm-3 login2">
            <div class="login">
                <div class="bg">
                    <form action="<?= base_url('home/lupapassword') ?>" method="POST">
                        <h2 style="text-align: center;">
                            <b class="alert-danger">RESET PASSWORD</b>
                        </h2>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" value="<?=$email;?>" aria-describedby="emailHelp" placeholder="Masukkan email" disabled>
                            <input name="email" type="hidden" class="form-control" id="email" value="<?=$email;?>" aria-describedby="emailHelp" placeholder="Masukkan email">
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="password" type="password" class="form-control" value="<?= set_value('password'); ?>" id="password" placeholder="Masukkan Password">
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <button value="submit" style="width: 100%;" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="form-group">
                            <a style="text-decoration: none;" href="<?= base_url('home/login') ?>">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>