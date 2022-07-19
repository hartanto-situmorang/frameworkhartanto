<div style="padding: 0 2% 0 5%;">
    <div style="justify-content: flex-start;" class="blog-posts mt-3">
        <?php $i = 0; ?>
        <?php foreach ($Barang as $b) { ?>
            <div class="post">
                <img src="<?= base_url('aset/') ?>images/barang/<?= $b['gambar']; ?>" alt="" class="post-img">
                <div style="text-align: left;" href="../view/view.php" class="post-content">
                    <h3>
                        <dt><?= $b['nama']; ?></dt><br>
                        <dt>Rp.<?= number_format($b['harga']); ?></dt><br>
                        <?php
                        if ($this->session->userdata('role') == 'customer') {
                        ?>
                            <a href="<?= base_url('Barang/beli') ?>?id_barang=<?= $b['id']; ?>" class="badge badge-primary rounded-pill d-inline">Beli barang</a>
                            <a href="<?= base_url('Barang/detail_barang') ?>?id_barang=<?= $b['id']; ?>" class="badge badge-secondary rounded-pill d-inline">Detail</a>
                        <?php
                        } elseif ($this->session->userdata('role') == 'designer') {
                        ?>
                            <a href="<?= base_url('Barang/edit') ?>?id_barang=<?= $b['id']; ?>" class="badge badge-primary rounded-pill d-inline">Edit Barang</a>
                            <a href="<?= base_url('Barang/hapus') ?>?id_barang=<?= $b['id']; ?>" class="badge badge-secondary rounded-pill d-inline">Hapus Barang</a>
                        <?php
                        }
                        ?>
                </div>
                </h3>
            </div>
        <?php $i++;
        }
        ?>
    </div>
</div>
<?php
if ($i == 0) {
?>
    <div class="container">
        <div class="text-center alert alert-primary m-4 p-5" role="alert" data-mdb-color="primary">
            <i class="mdi mdi-shopping"></i>Untuk Saat ini Aksesories belum ada dalam Toko
        </div>
    </div>
<?php
} ?>