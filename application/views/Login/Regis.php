<div style="margin: 30px 30px 30px 30px;" class="center">
    <div class="row">
        <?= $this->session->flashdata('message'); ?>
        <div class="col-sm-9">
            <div class="d1">
                <img src="<?= base_url('aset/') ?>images/barang/bground.jpg" alt="">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="regis">
                <div class="bg">
                    <div class="auth-form-light">
                        <h1 style="color: black; text-align: center;"><b>Daftar Akun</b></h1>
                        <form method="POST" action="<?= base_url('Home/') ?>regis" class="pt-3">
                            <div class="form-group">
                                <input value="<?= set_value('email'); ?>" name="email" type="text" class="form-control form-control-lg" id="email" placeholder="Email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input value="<?= set_value('nama'); ?>" name="nama" type="text" class="form-control form-control-lg" id="username" placeholder="Username">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input value="<?= set_value('alamat'); ?>" name="alamat" type="text" class="form-control form-control-lg" id="alamat" placeholder="Alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <select name="role" class="custom-select" id="inputGroupSelect02">
                                    <option >Daftaf Menjadi...</option>
                                    <option value="customer" <?php if (set_value('role') == 'customer') echo 'selected'; ?>>Pembeli</option>
                                    <option value="designer" <?php if (set_value('role') == 'designer') echo 'selected'; ?>>Designer</option>
                                </select>
                                <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input value="<?= set_value('password'); ?>" name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Daftarkan</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Sudah Punya akun? <a href="login.html" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
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
        </div>
    </div>