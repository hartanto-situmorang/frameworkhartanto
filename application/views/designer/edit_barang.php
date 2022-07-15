<div style="margin: 30px 30px 30px 30px;" class="center">
    <div class="row">
        <?= $this->session->flashdata('message'); ?>
        <div style="margin: 20px;" class="row">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-md-9 col-lg-8 col-xl-5">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-3">
                            <div class="d-flex text-black">
                                <div class="flex-shrink-0">
                                    <img src="<?= base_url('aset/') ?>images/barang/<?= $barang['gambar']; ?>" alt="Generic placeholder image" class="img-fluid m-3" style="width: 180px; border-radius: 10px;">
                                </div>
                                <form action="" method="POST" class="p-3 m-3" enctype="multipart/form-data">
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form1Example1">Nama</label>
                                        <input value="<?= $barang['nama']; ?>" name="nama" type="text" id="namna" class="form-control" placeholder="Nama Barang" />
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form1Example2">stok</label>
                                        <input value="<?= $barang['stok']; ?>" name="stok" type="number" id="alamat" class="form-control" placeholder="Stok" />
                                        <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form1Example2">Harga Barang</label>
                                        <input value="<?= $barang['harga']; ?>" name="harga" type="number" id="harga" class="form-control" placeholder="Nomor Telepon" />
                                        <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form1Example2">Jenis Barang</label>
                                        <select name="jenis" class="form-control text-black">
                                            <option>Pilih jenis Barang</option>
                                            <option value="celana" <?php if ($barang['jenis'] == 'celana') echo 'selected'; ?>>celana</option>
                                            <option value="pakaian" <?php if ($barang['jenis'] == 'pakaian') echo 'selected'; ?>>Pakaian</option>
                                            <option value="aksesories" <?php if ($barang['jenis'] == 'aksesories') echo 'selected'; ?>>Aksessories</option>
                                        </select>
                                        <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label for="formFileDisabled" class="form-label">Ganti Profile</label>
                                        <input name="gambar" class="form-control " type="file" id="formFileDisabled" />
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ubah Barang</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>