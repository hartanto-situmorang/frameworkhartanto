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
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="password" type="password" class="form-control" value="<?= set_value('password'); ?>" id="password" placeholder="Masukkan Password">
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <button style="width: 100%;" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="form-group">
                            <a style="text-decoration: none;" href="<?= base_url('home/chek') ?>">Lupa Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div style="margin: 20px;" class="row">
            <div style="margin: 0 20 0 20;padding: 1% 5% 1% 5%;">
                <div class="row">
                    <?php $i = 0; ?>
                    <?php foreach ($designer as $des) { ?>
                        <div class="col col-md-10 col-lg-6 col-xl-3 p-4">
                            <div style="border-radius: 15px; background-color: #93e2bb;">
                                <div class="card-body p-3 text-black">
                                    <div class="d-flex align-items-center mb-6">
                                        <div class="flex-shrink-0">
                                            <img src="<?= base_url('aset/') ?>images/faces/<?= $des['gambar']; ?>" alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3" style="max-width: 70px;height: auto;">
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
                                                    if ($i <= 5) {
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
                                                <a style="text-decoration: none;" href="<?= base_url('Barang_user/all') ?>" class="btn-secondary btn-rounded btn-sm" data-mdb-ripple-color="dark">Berbelanja</a>
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