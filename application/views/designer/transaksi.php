<div class="d-flex container-xxl justify-content-center align-items-center ">
    <div class="col col-md-9 col-lg-7 col-xl-10 m-4">
        <h2>Data Transaksi</h2>
        <?= $this->session->flashdata('message'); ?>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Transaksi</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($Transaksi as $t) : ?>
                    <tr>
                        <td>
                            <p class="fw-normal mb-1"><?= $i ?></p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('aset/') ?>images/barang/<?= $t['gambarb']; ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?= $t['namab']; ?></p>
                                    <p class="text-muted mb-0">Customer: <?= $t['namac']; ?></p>
                                </div>
                            </div>
                        </td>
                        <td><?= date('d F Y', $t['tanggal']) ?></td>
                        <td>
                            <p class="fw-normal mb-1"><?= $t['jumlah']; ?> Buah</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">Rp.<?= $t['hargab']; ?>,00-</p>
                        </td>
                        <td>Rp.<?= $t['total']; ?>,00-</td>
                        <td>
                            <?php if ($t['status'] == 'Terima') {
                            ?>
                                <a class="text-white badge badge-success rounded-pill d-inline">Barang Telah Diterima</a>
                                <a href="<?= base_url('Pemesanan_designer/detail_transaksi')?>?id_transaksi=<?= $t['id']; ?>" class="text-white badge badge-secondary rounded-pill d-inline">Detail</a>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>