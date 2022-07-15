<?= $this->session->flashdata('message'); ?>
<div style="margin: 20px;" class="row">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-md-9 col-lg-12 col-xl-5">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-3">
                    <div class="d-flex text-black">
                        <div style="max-width: 50%;" class="flex-shrink-0 p-5">
                            <p class="form-la">Bukti Pembayaran</p>
                            <img src="<?= base_url('aset/') ?>images/tf/<?= $Pesanan['gambar']; ?>" alt="Generic placeholder image" class="img-fluid m-3" style="width: 100%; border-radius: 10px;">
                        </div>
                        <div class="p-5 m-0">
                            <h4>Detail Pesanan</h4>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la m-0">Nama Penerima</p>
                                </b>
                                <p class="form-la"><?= $Pesanan['nama_penerima']; ?></p>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la m-0" for="form1Example2">Nomor Telepon
                                    </p>
                                </b>
                                <p class="form-la"><?= $Pesanan['no_telp']; ?>
                                </p>
                                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la m-0" for="form1Example2">Total Harga Pesanan
                                    </p>
                                </b>
                                <p class="form-la">Rp.<?= $Pesanan['total']; ?>,00-
                                </p>
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la m-0" for="form1Example2">Jumlah Bayar</p>
                                </b>
                                <p class="form-la">Rp.<?= $Pesanan['bayar']; ?>,00-
                                </p>
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la m-0" for="form1Example2">Status</p>
                                </b>
                                <p class="m-0"><?= $Pesanan['status']; ?>
                                </p>
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b>
                                    <p class="form-la m-0" for="form1Example2">Tanggal Pemesanan</p>
                                </b>
                                <p class=""><?= date('d F Y', $Pesanan['tanggal']); ?>
                                </p>
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <p class="form-la m-2" for="form1Example2">Ubah Status</p>
                            <a href="<?= base_url('') ?>Pemesanan_designer/packing?id_pesanan=<?= $Pesanan['id']; ?>" class="btn btn-primary ">Packing</a>
                            <a href="<?= base_url('') ?>Pemesanan_designer/dikirim?id_pesanan=<?= $Pesanan['id']; ?>" class="btn btn-secondary ">Dikirim</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>