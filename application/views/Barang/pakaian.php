<div style="padding: 0 2% 0 5%;">
    <div style="justify-content: flex-start;" class="blog-posts">
        <?php $i = 1; ?>
        <?php foreach ($Barang as $b) : ?>
            <div class="post">
                <img src="<?= base_url('aset/') ?>images/barang/<?= $b['gambar']; ?>" alt="" class="post-img">
                <div style="text-align: left;" href="../view/view.php" class="post-content">
                    <h3>
                        <dt><?= $b['nama']; ?></dt><br>
                        <dt><?= $b['harga']; ?></dt><br>
                        <?php
                        if ($this->session->userdata('role') == 'customer') {
                           ?><button class="badge badge-primary rounded-pill d-inline">Beli barang</button> <?php
                           ?><button class="badge badge-secondary rounded-pill d-inline">Detail</button> <?php
                        } elseif($this->session->userdata('role') == 'designer') {
                            ?><button class="badge badge-primary rounded-pill d-inline">Edit Barang</button> <?php
                            ?><button class="badge badge-secondary rounded-pill d-inline">Hapus Barang</button> <?php
                        }
                        ?>
                    </div>
                    </h3>
                </div>
            <?php $i++; ?>
        <?php endforeach; ?>
    </div>
</div>