<?= $this->session->flashdata('message'); ?>
<div style="margin: 20px;" class="row">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-md-9 col-lg-12 col-xl-5">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-3">
                    <div class="d-flex text-black">
                        <div style="max-width: 500px;" class="flex-shrink-1">
                            <img src="<?= base_url('aset/') ?>images/barang/<?= $barang['gambar']; ?>" alt="Generic placeholder image" class="img-fluid m-3" style="width: 100%; border-radius: 10px;">
                        </div>
                        <div class="p-5 m-0">
                            <form id="beli" action="<?= base_url('') ?>Pesanan/Pesanan" style="max-width: 500px;min-width: 200px;" method="POST" enctype="multipart/form-data" onsubmit="return chek()" >
                                <div class="form-outline mb-2">
                                    <b><label class="form-label" for="form1Example1">Nama</label></b><br>
                                    <b><label class="form-label" for="form1Example1"><?= $barang['id_design']; ?></label></b><br>
                                    <label class="form-label" for="form1Example1"><?= $barang['nama']; ?></label>
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-outline mb-2">
                                    <b><label class="form-label" for="form1Example2">stok</label></b><br>
                                    <label class="form-label" for="form1Example1"><?= $barang['stok']; ?></label><br>
                                    <input name="nama" type="hidden" id="nama" value="<?= $barang['nama']; ?>">
                                    <input name="jenis" type="hidden" id="jenis" value="<?= $barang['jenis']; ?>">
                                    <input name="harga" type="hidden" id="harga" value="<?= $barang['harga']; ?>">
                                    <input name="stok" type="hidden" id="stok" value="<?= $barang['stok']; ?>">
                                    <input name="id_barang" type="hidden" id="stok" value="<?= $barang['id']; ?>">
                                    <input name="id_design" type="hidden" id="stok" value="<?= $barang['id_design']; ?>">
                                    <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-outline mb-2">
                                    <b><label class="form-label" for="form1Example2">Harga Barang</label></b><br>
                                    <label class="form-label" for="form1Example1"><?= $barang['harga']; ?></label>
                                    <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-outline mb-2">
                                    <b><label class="form-label" for="form1Example2">jenis</label></b><br>
                                    <label class="form-label" for="form1Example1"><?= $barang['jenis']; ?></label>
                                    <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-outline mb-2">
                                    <b><label class="form-label" for="form1Example2">Jumlah Pembelian</label></b><br>
                                    <input id="jumlah" name="jumlah" type="number" class="form-control" placeholder="Input Jumlah">
                                    <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <P onclick="showDiv()" class="btn btn-primary">Beli Barang</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display:none;" id="data2" class="col col-md-9 col-lg-12 col-xl-3">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-3">
                    <div class="d-flex text-black">
                        <div style="max-width: 500px; min-width: 300px;" class="p-5 m-0">
                            <h4>Lengkapi Data Diri</h4>
                            <div class="form-outline mb-2">
                                <b><label class="form-label" for="form1Example1">Nama Pembeli</label></b><br>
                                <input class="form-control" name="namapembeli" value="<?= $user2['nama']; ?>" class="form-label" for="form1Example1">
                                <?= form_error('namauser', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b><label class="form-label" for="form1Example2">Alamat Penerima</label></b><br>
                                <input class="form-control" name="alamat" value="<?= $user2['alamat']; ?>" class="form-label" for="form1Example1">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b><label class="form-label" for="form1Example2">Nomor Telepon</label></b><br>
                                <input class="form-control" name="no_telp" value="<?= $user2['no_telp']; ?>" class="form-label" for="form1Example1">
                                <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b><label class="form-label" for="form1Example2">Total Harga</label></b><br>
                                <input id="totalharga" class="form-control" name="totalharga" type="number" value="<?= set_value('totalharga'); ?>" class="form-label" readonly>
                                <?= form_error('bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <b><label class="form-label" for="form1Example2">Total Bayar</label></b><br>
                                <input id="bayar" class="form-control" name="bayar" type="number" value="<?= set_value('bayar'); ?>" class="form-label" for="form1Example1">
                                <?= form_error('bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-outline mb-2">
                                <label for="formFileDisabled" class="form-label">Bukti Transaksi</label>
                                <input name="gambar" class="form-control " type="file" id="formFileDisabled" />
                            </div>
                            <button form="beli" id="tombol" type="submit" class="btn btn-primary">Beli Barang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showDiv() {
        let jumlah = parseInt(document.getElementById("jumlah").value);
        let stok = parseInt(document.getElementById("stok").value);
        let harga = parseInt(document.getElementById("harga").value);
        let total = (harga*jumlah);
        if (jumlah <= 0) {
            alert("Jumlah Barang Yang Dibeli Minimal 1");
            document.getElementById("jumlah").value = 1;
        } else if (jumlah >= (stok + 1)) {
            var pesan = "Jumlah Barang Yang Dibeli Maximal : " + stok;
            alert(pesan);
            document.getElementById("jumlah").value = stok;
        } else if ((jumlah > 0) && (jumlah <= (stok + 1))) {
            document.getElementById("totalharga").value = total;
            document.getElementById('data2').style.display = "flex";
        } else {
            alert("Jumlah Barang Yang Dibeli Minimal 1");
            document.getElementById("jumlah").value = 1;
            document.getElementById('data2').style.display = "none";
        }
    }

    function chek() {
        let jumlah = parseInt(document.getElementById("jumlah").value);
        let harga = parseInt(document.getElementById("harga").value);
        let bayar = parseInt(document.getElementById("bayar").value);
        let total = jumlah * harga;
        document.getElementById("totalharga").value = total;
        if (bayar < total) {
            alert("Harap Masukkan Harga Bayar yang sesuai !!")
            return false;
        } else {
            if (confirm('Apakah Anda Yakin ??') == true) {
                return true;
            } else {
                return false;
            }
        }
    }
</script>