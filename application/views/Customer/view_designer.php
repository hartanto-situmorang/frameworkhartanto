<div style="margin: 30px 30px 30px 30px;" class="center">
    <div class="row">
        <div style="padding: 0% 5% 0% 5%;" class="container-fluid">
            <h2> Daftar Designer</h2>
            <!-- Design -->
            <div class="row d-flex justify-content-left align-items-left h-100">
                <?php $i = 1; ?>
                <?php foreach ($designer as $des) : ?>
                    <div class="col col-md-10 col-lg-6 col-xl-3">
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
                                                    if ($des['rating'] != 0) {
                                                        foreach (range($i, $des['rating']) as $number) {
                                                            $i++; ?>
                                                            <p style="margin: 0;color: yellowgreen; font-size: 130%;" class="mdi mdi-star"></p>
                                                        <?php
                                                        }
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
                                            <a href="<?= base_url('Barang_user/all') ?>" class="btn-secondary btn-rounded btn-sm" data-mdb-ripple-color="dark">Berbelanja</a>
                                            <a href="<?= base_url('Customer/detail_designer') ?>?id_d=<?= $des['id'] ?>" class="btn-primary btn-rounded btn-sm" data-mdb-ripple-color="dark">Lihat Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
                <!-- Design -->
            </div>
        </div>
    </div>