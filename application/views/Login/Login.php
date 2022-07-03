<div style="margin: 30px 30px 30px 30px;" class="center">
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
                    <form class="" action="<?= base_url('home/login') ?>" method="post">
                        <h2 style="text-align: center;">
                            <b>LOGIN</b>
                        </h2>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" value="<?= set_value('email'); ?>" aria-describedby="emailHelp" placeholder="Masukkan email">
                            <?= form_error('email','<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="password" type="password" class="form-control" value="<?= set_value('password'); ?>" id="password" placeholder="Masukkan Password">
                            <?= form_error('password','<small class="text-danger">', '</small>'); ?>
                        </div>
                        <button style="width: 100%;" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div style="margin: 20px;" class="row">
            <div class="col-3 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="col-3">
                            <img style="width: 100%;margin-left: 50%; height: 90%;object-fit: cover;margin-bottom: 10px;border-radius: 50%; " src="<?= base_url('aset/') ?>/images/faces/face1.jpg" alt="">
                        </div>
                        <div style="margin-top: 5%;margin-left: 10%" class="col">
                            <h4 class="card-title mb-2">Visit Statistics</h4>
                            <h4 class="card-title mb-2">
                                <!-- Rating -->
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="col-3">
                            <img style="width: 100%;margin-left: 50%; height: 90%;object-fit: cover;margin-bottom: 10px;border-radius: 50%; " src="<?= base_url('aset/') ?>/images/faces/face1.jpg" alt="">
                        </div>
                        <div style="margin-top: 5%;margin-left: 10%" class="col">
                            <h4 class="card-title mb-2">Visit Statistics</h4>
                            <h4 class="card-title mb-2">
                                <!-- Rating -->
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="col-3">
                            <img style="width: 100%;margin-left: 50%; height: 90%;object-fit: cover;margin-bottom: 10px;border-radius: 50%; " src="<?= base_url('aset/') ?>/images/faces/face1.jpg" alt="">
                        </div>
                        <div style="margin-top: 5%;margin-left: 10%" class="col">
                            <h4 class="card-title mb-2">Visit Statistics</h4>
                            <h4 class="card-title mb-2">
                                <!-- Rating -->
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                                <i class="mdi mdi-star"></i>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>