<div class="d-flex container-xxl justify-content-center align-items-center ">
    <div class="col">
        <h2>Data Pesanan</h2>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Alamat</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th style="min-width: 250;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($Pesanan as $p) : ?>
                    <tr>
                        <td>
                            <p class="fw-normal mb-1"><?= $i ?></p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('aset/') ?>images/barang/<?= $p['gambarb']; ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?= $p['namab']; ?></p>
                                    <p class="text-muted mb-0">Pemesan : <?= $p['namac']; ?></p>
                                </div>
                            </div>
                        </td>
                        <td><?= $p['alamat']; ?></td>
                        <td><?= date('d F Y', $p['tanggal']) ?></td>
                        <td>
                            <p class="fw-normal mb-1"><?= $p['jumlah']; ?> Buah</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">Rp.<?= $p['hargab']; ?>,00-</p>
                        </td>
                        <td>Rp.<?= $p['total']; ?>,00-</td>
                        <td>
                            <span class="secondary"><?= $p['status']; ?></span>
                        </td>
                        <td>
                            <?php if ($p['status'] == 'Terima') {
                            ?>
                                <a class="text-white badge badge-success rounded-pill d-inline">Barang Telah Diterima</a>
                            <?php
                            } else {
                            ?>
                                <a href="<?= base_url('') ?>Pemesanan_designer/packing?id_pesanan=<?= $p['id']; ?>" class="badge badge-primary rounded-pill d-inline">Packing</a>
                                <a href="<?= base_url('') ?>Pemesanan_designer/dikirim?id_pesanan=<?= $p['id']; ?>" class="badge badge-secondary rounded-pill d-inline">Dikirim</a>
                                <a href="<?= base_url('') ?>Pemesanan_designer/detail?id_pesanan=<?= $p['id']; ?>" class="badge badge-success rounded-pill d-inline">detail</a>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                <?php $i++;
                endforeach;
                if ($i <= 1) {
                ?><div class="alert alert-success" role="alert">Belum Ada Yang Mesan!!</div>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
</div>