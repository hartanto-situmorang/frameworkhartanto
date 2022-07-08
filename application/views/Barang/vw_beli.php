<?= $this->session->flashdata('message'); ?>
<div style="margin: 20px;" class="row">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-md-9 col-lg-12 col-xl-5">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-3">
                    <div class="d-flex text-black">
                        <div class="flex-shrink-0">
                            <img src="<?= base_url('aset/') ?>images/barang/<?= $barang['gambar']; ?>" alt="Generic placeholder image" class="img-fluid m-3" style="width: 100%; border-radius: 10px;">
                        </div>
                        <form action="" method="POST" class="p-5 m-0" enctype="multipart/form-data">
                            <div class="form-outline mb-2">
                                <b><label class="form-label" for="form1Example1">Nama</label></b><br>
                                <label class="form-label" for="form1Example1"><?= $barang['nama']; ?></label>
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b><label class="form-label" for="form1Example2">stok</label></b><br>
                                <label class="form-label" for="form1Example1"><?= $barang['stok']; ?></label>
                                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b><label class="form-label" for="form1Example2">Harga Barang</label></b><br>
                                <label class="form-label" for="form1Example1"><?= $barang['harga']; ?></label>
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b><label class="form-label" for="form1Example2">jenis</label></b><br>
                                <label class="form-label" for="form1Example1"><?= $barang['jenis']; ?></label>
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b><label class="form-label" for="form1Example2">Jumlah Pembelian</label></b><br>
                                <input value="<?= set_value('jumlah'); ?>" name="jumlah" type="number" min="1" max="<?= $barang['stok']; ?>" id="jumlah" class="form-control" placeholder="Input Jumlah" />
                                <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button onclick="return confirm('Apakah Anda Yakin Ingin Memberli?');" type="submit" class="btn btn-primary">Beli Barang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>