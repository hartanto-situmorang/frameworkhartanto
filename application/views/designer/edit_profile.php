<div style="margin: 30px 30px 30px 30px;" class="center">
    <div class="row">
        <?= $this->session->flashdata('message'); ?>
        <div style="margin: 20px;" class="row">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-md-9 col-lg-8 col-xl-5">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-3">
                            <div class="d-flex text-black">
                                <div style="max-width: 600px;" class="flex-shrink-0">
                                    <img src="<?= base_url('aset/') ?>images/faces/<?= $user['gambar']; ?>" alt="Generic placeholder image" class="img-fluid m-3" style="width: 180px; border-radius: 10px;">
                                </div>
                                <form  action="" method="POST" class="p-3 m-3" enctype="multipart/form-data">
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form1Example1">Nama</label>
                                        <input value="<?= $user2['nama']; ?>" name="nama" type="text" id="namna" class="form-control" placeholder="Username" />
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form1Example2">Alamat</label>
                                        <input value="<?= $user2['alamat']; ?>" name="alamat" type="text" id="alamat" class="form-control" placeholder="Alamat" />
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form1Example2">Nomor Telepon</label>
                                        <input value="<?= $user2['no_telp']; ?>" name="no_telp" type="text" id="no_telp" class="form-control" placeholder="Nomor Telepon" />
                                        <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form1Example2">Email</label>
                                        <input value="<?= $user2['email']; ?>" name="email" type="text" id="email" class="form-control" placeholder="Email" />
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label for="formFileDisabled" class="form-label">Ganti Profile</label>
                                        <input name="gambar" class="form-control " type="file" id="formFileDisabled" />
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ubah Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>