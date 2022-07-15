<?= $this->session->flashdata('message'); ?>
<br>
<div class="container-xxl">
    <div class="d-flex justify-content-center align-items-center ">
        <div class="col col-md-9 col-lg-7 col-xl-10 m-4">
            <h2>Data Pesanan</h2>
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
                                        <p class="text-muted mb-0">Designer : <?= $p['namad']; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td><?= date('d F Y', $p['tanggal']) ?></td>
                            <td>
                                <p class="fw-normal mb-1"><?= $p['jumlah']; ?> Buah</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Rp.<?= number_format($p['hargab']); ?>,00-</p>
                            </td>
                            <td>Rp.<?= number_format($p['total']); ?>,00-</td>
                            <td>
                                <?php if ($p['status'] == 'Terima') {
                                ?>
                                    <a class="text-white badge badge-success rounded-pill d-inline">Barang Telah Diterima</a>
                                <?php
                                } else {
                                ?>
                                    <div id="rating" style="display: none;" class=”dropdown”>
                                        <div class="btn-group">
                                            <button class="badge badge-secondary dropdown-toggle mb-3" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Rating
                                            </button>
                                            <div class="dropdown-menu">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="<?= base_url('') ?>Pesanan/stterima?id_pesanan=<?= $p['id']; ?>&r=1" class="badge badge-secondary ml-2">1</a>
                                                    <a href="<?= base_url('') ?>Pesanan/stterima?id_pesanan=<?= $p['id']; ?>&r=2" class="badge badge-secondary ml-2">2</a>
                                                    <a href="<?= base_url('') ?>Pesanan/stterima?id_pesanan=<?= $p['id']; ?>&r=3" class="badge badge-secondary ml-2">3</a>
                                                    <a href="<?= base_url('') ?>Pesanan/stterima?id_pesanan=<?= $p['id']; ?>&r=4" class="badge badge-secondary ml-2">4</a>
                                                    <a href="<?= base_url('') ?>Pesanan/stterima?id_pesanan=<?= $p['id']; ?>&r=5" class="badge badge-secondary ml-2">5</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a style="display: flex;" id="btn2" onclick="showDiv()" class="text-white badge badge-primary rounded-pill d-inline">Diterima</a>
                                    <a style="display: flex;" id="btn2" href="<?= base_url('') ?>Pesanan/belum?id_pesanan=<?= $p['id']; ?>" class="badge badge-secondary rounded-pill d-inline">Belum</a>
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                    <?php $i++;
                    endforeach;
                    if ($i <= 1) {
                    ?>
                        <div class="alert alert-success" role="alert">Belum Ada Pesanan!!</div>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
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
                                    <p class="text-muted mb-0">Designer : <?= $t['namad']; ?></p>
                                </div>
                            </div>
                        </td>
                        <td><?= date('d F Y', $t['tanggal']) ?></td>
                        <td>
                            <p class="fw-normal mb-1"><?= $t['jumlah']; ?> Buah</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">Rp.<?= number_format($t['hargab']); ?>,00-</p>
                        </td>
                        <td>Rp.<?= number_format($t['total']); ?>,00-</td>
                        <td>
                            <?php if ($t['status'] == 'Terima') {
                            ?>
                                <p><b>Barang Telah Diterima</b></p>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                <?php $i++;
                endforeach;
                if ($i <= 1) {
                ?><div class="alert alert-success" role="alert">Belum Ada Pesanan!!</div>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<script>
    function showDiv() {
        document.getElementById('rating').style.display = "flex";
    }
</script>