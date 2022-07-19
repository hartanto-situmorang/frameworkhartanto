<?= $this->session->flashdata('message'); ?>.
<div style="margin: 30px 30px 30px 30px;" class="center">
    <div class="row">
        <div style="padding: 0% 5% 0% 5%;" class="container-fluid">
            <h2> Daftar Customer</h2>
            <!-- Design -->
            <div class="row d-flex justify-content-left align-items-left h-100">
                <?php $i = 1; ?>
                <?php foreach ($customer as $c) : ?>
                    <div class="col col-md-10 col-lg-6 col-xl-3" style="max-width: 330px;">
                        <div style="border-radius: 15px; background-color: #93e2bb;">
                            <div class="card-body p-3 text-black" >
                                <div class="d-flex align-items-center mb-6">
                                    <div class="flex-shrink-0">
                                        <img src="<?= base_url('aset/') ?>images/barang/<?= $c['gambar']; ?>" alt="Tidak Ditemukan" class="img-fluid rounded-circle border border-dark border-3" style="max-height: 70px;">
                                    </div>
                                    <div class="flex ms-3">
                                        <div class="d-flex flex-row align-items-center mb-6">
                                            <p class="mb-0 me-2"><?= $c['nama'] ?></p>
                                        </div>
                                        <div>
                                            <a href="<?= base_url('Admin/Hapus_customer') ?>?id_d=<?= $c['id'] ?>" class="btn-danger btn-rounded btn-sm mt-2" data-mdb-ripple-color="dark">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
                <!-- Design -->
            </div>
        </div>
    </div>