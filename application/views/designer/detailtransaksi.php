<?= $this->session->flashdata('message'); ?>
<div style="margin: 20px;" class="row">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-md-9 col-lg-12 col-xl-7">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-3">
                    <div class="d-flex text-black">
                        <div style="max-width: 50%;" class="flex-shrink-0 p-5">
                            <p class="form-la">Bukti Pembayaran</p>
                            <img style="max-width: 100%;" src="<?= base_url('aset/') ?>images/tf/<?= $Transaksi['gambar']; ?>" alt="Generic placeholder image" class="img-fluid m-3" style="width: auto; max-width: 500px; border-radius: 10px;">
                        </div>
                        <div class="p-5 m-0">
                            <h4>Detail Transaksi</h4>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la m-0">Nama Penerima</p>
                                </b>
                                <p class="form-la"><?= $Transaksi['nama_penerima']; ?></p>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la m-0" for="form1Example2">Nomor Telepon
                                    </p>
                                </b>
                                <p class="form-la"><?= $Transaksi['no_telp']; ?>
                                </p>
                                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la m-0" for="form1Example2">Total Harga Transaksi
                                    </p>
                                </b>
                                <p class="form-la">Rp.<?= $Transaksi['total']; ?>,00-
                                </p>
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la m-0" for="form1Example2">Jumlah Bayar</p>
                                </b>
                                <p class="form-la">Rp.<?= $Transaksi['bayar']; ?>,00-
                                </p>
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la m-0" for="form1Example2">Status</p>
                                </b>
                                <p class="m-0"><?= $Transaksi['status']; ?>
                                </p>
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la m-0" for="form1Example2">Tanggal Pemesanan</p>
                                </b>
                                <p class=""><?= date('d F Y', $Transaksi['tanggal']); ?>
                                </p>
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <a class="text-white btn btn-secondary" href="<?= base_url('Home'); ?>" class="form-la m-2" for="form1Example2">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>