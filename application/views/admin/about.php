<?= $this->session->flashdata('message'); ?>
<img style="
                width: 100%;
                height: 500px;
                object-fit: cover;
                margin-bottom: 10px;
                " src="<?= base_url('aset/') ?>/images/barang/bground.jpg" alt="Responsive image">
<div class="col-12 col-md-10 offset-md-1">
    <div class="col-12 grid-margin" id="doc-intro">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-4 mt-4">Tentang Template</h3>
                <p>Template ini diambil dari <b>Kapella Admin Pro</b></p>
                <p><a href="https://www.bootstrapdash.com/html5-basic-template/">https://www.bootstrapdash.com/html5-basic-template/</a></p>
                <p class="d-inline"><strong>Catatan </strong>: Untuk Penggunaan secara Komersial harus melakukan Pembelian Pada Template</a></p>
            </div>
        </div>
    </div>
    <div class="col-12 grid-margin" id="doc-started">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-4">Project Ini Di buat dengan Keperluan :</h3>
                <p class="mt-1">1. Menyelesaikan Ujian Akhir Semester Mata Kuliah 20TIC Bengkel Pemrograman Framework</p>
                <p class="mt-1">2. Sebagai Bukti Bahwasannya mahasiswa mampu dalam mengikuri Kegiatan Perkuliahan dan memahami Materi</p>
                <p class="mt-1">2. Sebagai Media Belajar untuk mengembangkan Diri dalam Pembuatan aplikasi berbasis Web Site</p>

            </div>
        </div>
    </div>
</div>

<div style="margin: 0 20 0 20;padding: 1% 5% 1% 5%;">
    <div class="row">
        <?php $i = 0; ?>
        <?php foreach ($designer as $des) { ?>
            <div class="col col-md-10 col-lg-6 col-xl-3 p-4">
                <div style="border-radius: 15px; background-color: #93e2bb;">
                    <div class="card-body p-3 text-black">
                        <div class="d-flex align-items-center mb-6">
                            <div class="flex-shrink-0">
                                <img src="<?= base_url('aset/') ?>images/faces/<?= $des['gambar']; ?>" alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3" style="width: 70px;">
                            </div>
                            <div class="flex ms-3">
                                <div class="d-flex flex-row align-items-center mb-6">
                                    <p class="mb-0 me-2"><?= $des['nama'] ?></p>
                                    <div class="d-flex flex-row align-items-center mb-6 mb-2">
                                        <?php
                                        $i = 1;
                                        if ($des['rating'] != 0) {
                                            foreach (range($i, $des['rating']) as $number) {
                                                $i++; ?>
                                                <p style="margin: 0;color: yellowgreen; font-size: 130%;" class="mdi mdi-star"></p>
                                            <?php
                                            }
                                        }
                                        foreach (range($i, 5) as $number) {
                                            $i++; ?>
                                            <p style="margin: 0;font-size: 130%;" class="mdi mdi-star"></p>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div>
                                    <a style="text-decoration: none;" href="<?= base_url('Customer/pesandesign') ?>?id_d=<?= $des['id'] ?>" class="btn-secondary btn-rounded btn-sm" data-mdb-ripple-color="dark">Pesan Design</a>
                                    <a style="text-decoration: none;" href="<?= base_url('Customer/detail_designer') ?>?id_d=<?= $des['id'] ?>" class="btn-primary btn-rounded btn-sm" data-mdb-ripple-color="dark">Lihat Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
            if ($i <= 4) {
                break;
            }$i++;
        } ?>
    </div>
</div>
</div>