<?= $this->session->flashdata('message'); ?>
<div style="margin: 20px;" class="row">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-md-9 col-lg-12 col-xl-7">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-3">
                    <div class="d-flex text-black">
                        <div class="flex-shrink-0 p-4">
                            <img src="<?= base_url('aset/') ?>images/barang/<?= $barang['gambar']; ?>" alt="Generic placeholder image" class="img-fluid m-3" style="width: 100%; border-radius: 10px;">
                        </div>
                        <div class="p-5 m-0">
                            <h4>Detail Barang</h4>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la">Nama
                                    </p>
                                </b>
                                <p class="form-la"><?= $barang['nama']; ?>
                                </p>
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la" for="form1Example2">stok
                                    </p>
                                </b>
                                <p class="form-la"><?= $barang['stok']; ?>
                                </p>
                                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la" for="form1Example2">Harga Barang
                                    </p>
                                </b>
                                <p class="form-la"><?= $barang['harga']; ?>
                                </p>
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la" for="form1Example2">jenis</p>
                                </b>
                                <p class="form-la"><?= $barang['jenis']; ?>
                                </p>
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <a href="<?= base_url('Barang/beli') ?>?id_barang=<?= $barang['id']; ?>" type="submit" class="btn btn-primary">Beli</a>
                        </div>
                        <div class="p-5">
                            <h4>Tentang Designer</h4>
                            <table>
                                <div class="form-outline mb-2">
                                    <b>
                                        <p class="form-la" for="form1Example2">Nama Designer
                                        </p>
                                    </b>
                                    <p class="form-la"><?= $designer['nama']; ?></p>
                                </div>
                                <div class="form-outline mb-2">
                                    <b>
                                        <p class="form-la" for="form1Example2">Alamat Designer
                                        </p>
                                    </b>
                                    <p class="form-la"><?= $designer['alamat']; ?></p>
                                </div>
                                <div class="form-outline mb-2">
                                    <b>
                                        <p class="form-la" for="form1Example2">Nomor Telepon</p>
                                    </b>
                                    <p class="form-la"><?= $designer['no_telp']; ?></p>
                                </div>
                                <div class="form-outline mb-2">
                                    <b>
                                        <p class="form-la" for="form1Example2">Rating
                                        </p>
                                    </b>
                                    <div class="d-flex flex-row align-items-center mb-6 mb-2">
                                        <?php
                                        $i = 1;
                                        if ($designer['rating'] != 0) {
                                            foreach (range($i, $designer['rating']) as $number) {
                                                $i++; ?>
                                                <p style="margin: 0;color: yellowgreen; font-size: 130%;" class="mdi mdi-star"></p>
                                            <?php
                                            }
                                        }
                                        foreach (range($i, 5) as $number) {
                                            $i++; ?>
                                            <p style="margin: 0;font-size: 130%;" class="mdi mdi-star"></p>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>