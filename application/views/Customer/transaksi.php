<div style="margin: 30px 30px 30px 30px;" class="center">
    <div class="row">
        <?= $this->session->flashdata('message'); ?>
        <div class="container">
            <h2>Data Transaksi</h2>
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>No.</th>
                        <th>Nama Barang</th>
                        <th>Total</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p class="fw-normal mb-1">1</p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('aset/') ?>images/barang/baju1.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Baju Pink Kerah</p>
                                    <p class="text-muted mb-0">Penjual : Hartanto Situmorang</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">1 Buah</p>
                        </td>
                        <td>1 Juni 2022</td>
                        <td>Rp. 300000,00-</td>
                        <td>
                            <span class="badge badge-success rounded-pill d-inline">Diterima</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fw-normal mb-1">2</p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('aset/') ?>images/barang/sepatu1.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Sepatu Nike</p>
                                    <p class="text-muted mb-0">Penjual : Diana Doo</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">2 Buah</p>
                        </td>
                        <td>87 Juni 2022</td>
                        <td>Rp. 968432,00-</td>
                        <td>
                            <span class="badge badge-success rounded-pill d-inline">Diterima</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fw-normal mb-1">3</p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('aset/') ?>images/barang/jam1.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Jam Tangan</p>
                                    <p class="text-muted mb-0">Penjual : Hartanto Situmorang</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">1 Buah</p>
                        </td>
                        <td>1 Juni 2022</td>
                        <td>Rp. 300000,00-</td>
                        <td>
                            <span class="badge badge-danger rounded-pill d-inline">Gagal</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fw-normal mb-1">4</p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('aset/') ?>images/barang/celana2.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Celana Keren</p>
                                    <p class="text-muted mb-0">Penjual : Hartanto Situmorang</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">1 Buah</p>
                        </td>
                        <td>1 Juni 2022</td>
                        <td>Rp. 300000,00-</td>
                        <td>
                            <span class="badge badge-success rounded-pill d-inline">Diterima</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>