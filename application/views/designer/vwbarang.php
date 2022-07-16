<?= $this->session->flashdata('message'); ?>.
<div class="m-2" style="padding: 0 2% 0 5%;display: flex;">
    <!-- <div style="justify-content: space-between;display: flex; "> -->
    <!-- <a style="display: flex;" href="<?= base_url('Barang_designer/tambah') ?>" type="button" class="btn btn-primary d-flex mt-3">Tambahkan Barang</a> -->
    <button style="display: flex;" type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModalCenter">
        Tambah Barang
    </button>
    <!-- Basic dropdown -->
</div>
<div style="margin: 0 3% 0 3%;" class="blog-posts pl-5 pr-5">
    <?php $i = 1;
    foreach ($barang as $b) : ?>
        <div class="post">
            <img src="<?= base_url('aset/') ?>images/barang/<?= $b['gambar']; ?>" alt="" class="post-img">
            <div href="../view/view.php" class="post-content">
                <h3>
                    <dt style="text-align: center;"><?= $b['nama']; ?></dt>
                    <dt>Stok : <?= $b['stok']; ?></dt>
                    <dt>Harga : <?= number_format($b['harga']); ?></dt>
                </h3>
                <span class="date">
                    <div class="cell">
                        <form method="POST" action="<?= base_url('Barang_designer/edit') ?>">
                            <input type="hidden" name="nama" value="Headset  ">
                            <a href="<?= base_url('Barang_designer/edit') ?>?id_barang=<?= $b['id']; ?>" name="edit" class="badge badge-primary" type="submit">Edit</a>
                            <a  href="<?= base_url('Barang_designer/hapus') ?>?id_barang=<?= $b['id']; ?>"  name="edit" class="text-white badge badge-danger" type="submit">Hapus</a>
                        </form>
                    </div>
                </span>
            </div>
        </div>
    <?php $i++;
    endforeach;
    if ($i <= 1) {
    ?><div class="alert alert-success" role="alert">Belum Ada Barang Yang Akan Dijual!!</div>
    <?php
    } ?>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div style="min-width: 800px;" class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex text-black">
                    <div class="flex-shrink-0">
                        <img src="<?= base_url('aset/') ?>images/auth/tambah.svg" alt="Generic placeholder image" class="img-fluid m-3" style="max-width: 250px; border-radius: 10px;">
                    </div>
                    <form action="<?= base_url('Barang_designer/tambah') ?>" style="min-width: 300px;" method="POST" class="p-3 m-3" enctype="multipart/form-data">
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form1Example1">Nama Barang</label>
                            <input value="<?= set_value('nama'); ?>" name="nama" type="text" id="namna" class="form-control" placeholder="Nama" />
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form1Example2">Harga</label>
                            <input value="<?= set_value('harga'); ?>" name="harga" type="text" id="harga" class="form-control" placeholder="Harga" />
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form1Example2">Stok Barang</label>
                            <input value="<?= set_value('stok'); ?>" name="stok" type="text" id="stok" class="form-control" placeholder="Stok Barang" />
                        </div>
                        <div class="form-outline mb-2">
                            <?php $jenis = set_value('jenis'); ?>
                            <label class="form-label" for="form1Example2">Jenis Barang</label>
                            <select name="jenis" class="form-control text-black">
                                <option>Pilih jenis Barang</option>
                                <option value="celana" <?php if ($jenis == 'celana') echo 'selected' ?>>celana</option>
                                <option value="pakaian" <?php if ($jenis == 'pakaian') echo 'selected' ?>>Pakaian</option>
                                <option value="aksesories" <?php if ($jenis == 'aksesories') echo 'selected' ?>>Aksessories</option>
                            </select>
                        </div>
                        <div class="form-outline mb-2">
                            <label for="formFileDisabled" class="form-label">Gambar</label>
                            <input name="gambar" class="form-control " type="file" id="formFileDisabled" />
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary mt-3">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>