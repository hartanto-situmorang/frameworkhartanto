<div style="margin: 30px 30px 30px 30px;" class="center">
    <div class="row">
        <?= $this->session->flashdata('message'); ?>
        <div style="margin: 20px;" class="row">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-md-9 col-lg-7 col-xl-5">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-3">
                            <div class="d-flex text-black">
                                <div class="flex-shrink-0">
                                    <img src="<?= base_url('aset/') ?>images/faces/<?= $user['gambar']; ?>" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;">
                                </div>
                                <div style="padding: 20px 20px 0px 20px;">
                                    <table class="table" border="0">
                                        <tbody>
                                            <tr>
                                                <td style="border: 0; padding:0;">
                                                    <h5 class="text-dark ">Nama</h5>
                                                </td>
                                                <td style="border: 0; padding:0;">
                                                    <h5 class="text-dark ">: <?= $user2['nama']; ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border: 0; padding:0;">
                                                    <h5 class="text-dark ">Nomor Telepon</h5>
                                                </td>
                                                <td style="border: 0; padding:0;">
                                                    <h5 class="text-dark ">: <?= $user2['no_telp']; ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border: 0; padding:0;">
                                                    <h5 class="text-dark ">Email </h5>
                                                </td>
                                                <td style="border: 0; padding:0;">
                                                    <h5 class="text-dark ">: <?= $user['email']; ?> </h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border: 0; padding:0;">
                                                    <h5 class="text-dark ">Alamat </h5>
                                                </td>
                                                <td style="border: 0; padding:0;">
                                                    <h5 class="text-dark ">: <?= $user2['alamat']; ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border: 0; padding:0;">
                                                    <h5 class="text-dark ">Bergabung Pada </h5>
                                                </td>
                                                <td style="border: 0; padding:0;">
                                                    <h5 class="text-dark ">: <?= date('d F Y', $user2['tgl_bergabung']); ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="margin-top: 10px;border: 0; padding:0;">
                                                    <a href="<?= base_url('Customer/edit_prodile') ?>" style="margin-top: 10px;color: white;" class="btn btn-primary ">Edit Profile</a>
                                                </td>
                                                <td style="border: 0; padding:0;"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <span class="badge badge-primary rounded-pill d-inline">Dikirim</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="fw-normal mb-1">1</p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('aset/') ?>images/barang/sepatu1.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Sepatu Nike</p>
                                    <p class="text-muted mb-0">Penjual : Hartanto Situmorang</p>
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
                            <p class="fw-normal mb-1">1</p>
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
                            <p class="fw-normal mb-1">1</p>
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