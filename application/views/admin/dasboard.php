<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="container pt-4">
    <div class="row">
        <div class="col">
            <div id="myChart" style="width:100%; max-width:800px; height:300px;">
            </div>
        </div>
        <div class="col">
            <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
        </div>
    </div>
</div>
<div style="margin: 0 10% 0 10%;">
    <div style="justify-content: flex-start;" class="blog-posts">
        <?php $i = 1; ?>
        <?php foreach ($Barang as $b) : ?>
            <div class="post">
                <img src="<?= base_url('aset/') ?>images/barang/<?= $b['gambar']; ?>" alt="" class="post-img">
                <div style="text-align: left;" href="../view/view.php" class="post-content">
                    <h3>
                        <dt><?= $b['nama']; ?></dt><br>
                        <dt>Rp.<?= number_format($b['harga']); ?></dt><br>
                        <a style="text-decoration: none;" href="<?= base_url('Admin/detail_barang') ?>?id_barang=<?= $b['id']; ?>" class="text-white badge badge-primary rounded-pill d-inline">Detail</a>
                        <a style="text-decoration: none;" href="<?= base_url('Admin/Hapus') ?>?id_barang=<?= $b['id']; ?>" class="text-white badge badge-danger rounded-pill d-inline">Hapus</a>
                </div>

                </h3>
            </div>
            <?php $i++; ?>
        <?php endforeach; ?>
    </div>
</div>


<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Kateogir', 'Penjualan'],
            ['Pakaian', <?= $penjualan[2]['jumlah']; ?>],
            ['Celana', <?= $penjualan[1]['jumlah']; ?>],
            ['Aksesories', <?= $penjualan[0]['jumlah']; ?>]
        ]);

        var options = {
            title: 'Presentasi Barang Terjual menurut Kategori'
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }

    let xValues = [];
    let yValues = [];
    let barColors = ["#45938b", "#295753", "#77A9FE", "#FD3A3A", "#7BFD3A"];

    <?php
    $i = 0;
    foreach ($designer as $d) {
    ?>xValues.push("<?= $d['nama']; ?>");
    <?php
    ?>yValues.push("<?= $d['jumlah']; ?>");
    <?php
        $i++;
        if ($i == 4) {
            break;
        }
    }
    ?>
    xValues.push('');
    yValues.push(0);

    new Chart("myChart2", {
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
                text: "5 Daftar Penjual Terbaik"
            }
        }
    });
</script>