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
                                    <option>Daftaf Menjadi...</option>
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
            <div class="card">
                <div class="row">
                    <?php $i = 0; ?>
                    <?php foreach ($designer as $des) { ?>
                        <div class="col col-md-10 col-lg-6 col-xl-3 p-4">
                            <div style="border-radius: 15px; background-color: #93e2bb;">
                                <div class="card-body p-3 text-black">
                                    <div class="d-flex align-items-center mb-6">
                                        <div class="flex-shrink-0">
                                            <img src="<?= base_url('aset/') ?>images/faces/<?= $des['gambar']; ?>" alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3" style="width: 70px;">
                                        </div>
                                        <div class="flex ms-3">
                                            <div class="d-flex flex-row align-items-center mb-6">
                                                <p class="mb-0 me-2"><?= $des['nama'] ?></p>
                                                <div class="d-flex flex-row align-items-center mb-6 mb-2">
                                                    <?php
                                                    $i = 1;
                                                    if ($des['rating'] != 0) {
                                                        foreach (range($i, $des['rating']) as $number) {
                                                            $i++; ?>
                                                            <p style="margin: 0;color: yellowgreen; font-size: 130%;" class="mdi mdi-star"></p>
                                                        <?php
                                                        }
                                                    }
                                                    if ($i < 5) {
                                                        foreach (range($i, 5) as $number) {
                                                            $i++; ?>
                                                            <p style="margin: 0;font-size: 130%;" class="mdi mdi-star"></p>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div>
                                                <a style="text-decoration: none;" href="<?= base_url('Barang_user/pakaian') ?>" class="btn-secondary btn-rounded btn-sm" data-mdb-ripple-color="dark">Berbelanja</a>
                                                <a style="text-decoration: none;" href="<?= base_url('Customer/detail_designer') ?>?id_d=<?= $des['id'] ?>" class="btn-primary btn-rounded btn-sm" data-mdb-ripple-color="dark">Lihat Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        if ($i <= 4) {
                            break;
                        }
                        $i++;
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>