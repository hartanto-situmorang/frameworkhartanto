<div class="container">
    <div class="pt-4">
        <div class="row">
            <div class="col">
                <canvas id="Penjualan" style="width:100%;max-width:600px"></canvas>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3 class="font-weight-bold text-dark"><?= $user2['nama']; ?></h3>
                                <p class="text-dark"><?=  date('j F Y') ?></p>
                                <div class="d-lg-flex align-items-baseline mb-3">
                                    <h2>Bonus : </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mt-4 mt-lg-0">
                                <div class="bg-primary text-white px-4 py-4 card">
                                    <div class="row">
                                        <div class="col-sm-7 pl-lg-4">
                                            <p class="mb-0">Pendapatan Anda</p>
                                            <h2>Rp.<?= number_format($presentasi['total']); ?></h2>
                                        </div>
                                        <div class="col-sm-4 climate-info-border mt-lg-0 mt-2">
                                            <p class="mb-0">Total Barang</p>
                                            <h2><?= $presentasi['jml']; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 mt-md-1">
                            <div class="col">
                                <div class="d-flex purchase-detail-legend align-items-center">
                                    <div>
                                        <p class="font-weight-medium text-dark text-small">Pakaian
                                        </p>
                                        <h3 class="font-weight-bold text-dark  mb-0"><?= $persentpakaian; ?>%</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex purchase-detail-legend align-items-center">
                                    <div>
                                        <p class="font-weight-medium text-dark text-small">Celana</p>
                                        <h3 class="font-weight-bold text-dark  mb-0"><?= $persentcelana; ?>%</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex purchase-detail-legend align-items-center">
                                    <div>
                                        <p class="font-weight-medium text-dark text-small">Aksesories</p></p>
                                        <h3 class="font-weight-bold text-dark  mb-0"><?= $persentaksesories; ?>%</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var xValues = ["Celana", "Pakaian", "Aksesories", ""];
    var yValues = [<?= $Transaksi[1]['jumlah'];?>, <?= $Transaksi[2]['jumlah'];?>, <?= $Transaksi[0]['jumlah'];?>, 0];
    var barColors = ["#0901FE", "#5751FE", "#FE51ED"];

    new Chart("Penjualan", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "Detail Penjualan"
            }
        }
    });
</script>