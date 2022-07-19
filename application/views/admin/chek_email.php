<div style="margin: 6% 30px 30px 30px;" class="center">
    <div class="row">
        <div class="col-sm-9">
            <?= $this->session->flashdata('message'); ?>
            <div class="d1">
                <img src="<?= base_url('aset/') ?>images/barang/bground.jpg" alt="">
            </div>
        </div>
        <div class="col-sm-3 login2">
            <div style="max-height: 350px;"  class="login">
                <div style="max-height: 100px;" class="bg">
                    <form class="" action="<?= base_url('home/chek') ?>" method="post">
                        <h2 style="text-align: center;">
                            <b class="alert-danger">LUPA PASSWORD</b>
                        </h2>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" value="<?= set_value('email'); ?>" aria-describedby="emailHelp" placeholder="Masukkan email">
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <button style="width: 100%;" type="submit" class="btn btn-primary">Chek Email</button>
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