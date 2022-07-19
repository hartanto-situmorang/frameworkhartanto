<div style="padding: 0 5%  0 10%;margin:0;" class="justify-content-center row">
    <div class="row">
        <div class="col card mb-6" style="border-radius: .5rem;">
            <div class="row g-2">
                <div class="col-md-5 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                    <img src="<?= base_url('aset/') ?>images/faces/<?= $designer['gambar']; ?>" alt="Avatar" class="img-fluid my-4" style="width: 80%; border-radius: 20%;" />
                    <a href="<?= base_url('Barang_user/all') ?>" type="button" class="btn btn-secondary" data-mdb-ripple-color="dark">Berbelanja</a>
                </div>
                <div class="col-md-7">
                    <div class="card-body p-4">
                        <h4 class="text-muted"><?= $designer['nama']; ?></h4>
                        <div class="d-flex flex-row align-items-center mb-6 mb-2">
                            <?php
                            $i = 0;
                            if ($designer['rating'] != 0) {
                            foreach (range(1, $designer['rating']) as $number) {
                                $i++; ?>
                                <p style="margin: 0;color: yellowgreen; font-size: 170%;" class="mdi mdi-star"></p>
                                <?php
                            }
                            }
                            if ($i < 5) {
                                foreach (range($i, 4) as $number) {
                                    $i++; ?>
                                    <p style="margin: 0;font-size: 170%;" class="mdi mdi-star"></p>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <h6>Informasi Pribadi</h6>
                        <hr class="mt-0 mb-1">
                        <div class="row pt-2">
                            <div class="col-6 mb-2">
                                <h6>Email</h6>
                                <p class="text-muted"><?= $designer['email']; ?></p>
                            </div>
                            <div class="col-6 mb-2">
                                <h6>Phone</h6>
                                <p class="text-muted"><?= $designer['no_telp']; ?></p>
                            </div>
                        </div>
                        <h6><?= $designer['motto']; ?></h6>
                        <hr class="mt-0 mb-1">
                        <div class="row pt-1">
                            <div class="col-6 mb-3">
                                <h6>Berasal Dari</h6>
                                <p class="text-muted"><?= $designer['alamat']; ?></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                            <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                            <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-4">Contoh Produk</h2>
                    <!-- Tampilkan 4 Produk -->
                    <div class="row">
                        <?php $i = 1; ?>
                        <?php foreach ($Barang as $b) { ?>
                            <div class="col">
                                <div style="padding: 0 2% 0 5%;">
                                    <div class="post_move">
                                        <img src="<?= base_url('aset/') ?>images/barang/<?= $b['gambar']; ?>" alt="" class="post-img">
                                        <div style="text-align: left;" href="<?= base_url('Customer/pesandesign') ?>" class="post-content">
                                            <h3>
                                                <dt><?= $b['nama']; ?></dt><br>
                                                <dt>Rp.<?= number_format($b['harga']); ?></dt><br>
                                                <?php
                                                if ($this->session->userdata('role') == 'customer') {
                                                ?>
                                                    <a href="<?= base_url('Barang/beli') ?>?id_barang=<?= $b['id']; ?>" class="text-white badge badge-primary rounded-pill d-inline">Beli barang</a>
                                                    <a href="<?= base_url('Barang/detail_barang') ?>?id_barang=<?= $b['id']; ?>" class="badge badge-secondary rounded-pill d-inline">Detail</a>
                                                <?php
                                                }
                                                ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;
                            if ($i == 4) {
                                break;
                            } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>