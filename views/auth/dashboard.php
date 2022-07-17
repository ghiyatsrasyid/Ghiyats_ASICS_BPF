<div class="container-fluid py-4">
    <div class="row text-center">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                <h5 class="mb-0"><?php echo $judul; ?></h5>
                                <br>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-8 text-center mt-2 mt-lg-0">
                                    <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                                    <h6 class="text-primary text-gradient mb-0">Jumlah Produk</h6>
                                    <h4 class="font-weight-bolder"><span class="small"></span><span id="state1" countTo="<?= $produk ?>"></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-8 text-center mt-2 mt-lg-0">
                                    <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                                    <h6 class="text-primary text-gradient mb-0">Jumlah Penjualan</h6>
                                    <h4 class="font-weight-bolder"><span class="small"></span><span id="state2" countTo="<?= $penjualan ?>"></span></h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-8 text-center mt-2 mt-lg-0">
                                    <div class="border-dashed border-1 border-secondary border-radius-md py-3">
                                    <h6 class="text-primary text-gradient mb-0">Jumlah User</h6>
                                    <h4 class="font-weight-bolder"><span class="small"></span><span id="state3" countTo="<?= $us ?>"></span></h4>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                <h5 class="mb-0">Statistik Penjualan Produk</h5>
                                <br>
                            </div>
                            <div class="card mb-3">
                            <div class="card-body p-3">
                                <div class="chart">
                                <canvas id="bar-chart" class="chart-canvas" height="300px"></canvas>
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
<script src="https://demos.creative-tim.com/test/argon-dashboard-pro/assets/js/plugins/countup.min.js" type="text/javascript"></script>
<script type="text/javascript">
      if (document.getElementById("state1")) {
        const countUp = new CountUp(
          "state1",
          document.getElementById("state1").getAttribute("countTo")
        );
        if (!countUp.error) {
          countUp.start();
        } else {
          console.error(countUp.error);
        }
      }
      if (document.getElementById("state2")) {
        const countUp = new CountUp(
          "state2",
          document.getElementById("state2").getAttribute("countTo")
        );
        if (!countUp.error) {
          countUp.start();
        } else {
          console.error(countUp.error);
        }
      }
      if (document.getElementById("state3")) {
        const countUp = new CountUp(
          "state3",
          document.getElementById("state3").getAttribute("countTo")
        );
        if (!countUp.error) {
          countUp.start();
        } else {
          console.error(countUp.error);
        }
      }
    </script>

<script src="https://demos.creative-tim.com/test/argon-dashboard-pro/assets/js/plugins/chartjs.min.js" type="text/javascript"></script>
<script type="text/javascript">
      // Mixed chart
      var ctx5 = document.getElementById("bar-chart").getContext("2d");

    new Chart(ctx5, {
    type: "bar",
    data: {
        labels: [
            <?php
                foreach($totalb as $data){
                    echo "'" . $data['produk'] . "',";
                }
            ?>
        ],
        datasets: [
        {
            label: "Jumlah Produk Terjual",
            weight: 5,
            borderWidth: 0,
            borderRadius: 4,
            backgroundColor: "#3A416F",
            data: [
                <?php
                foreach ($totalb as $data) {
                    echo $data['jum'] . ", ";
                }
                ?>
            ],
            fill: false,
            maxBarThickness: 35
        }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
        legend: {
            display: false
        }
        },
        scales: {
        y: {
            grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
            },
            ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7"
            }
        },
        x: {
            grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true
            },
            ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10
            }
        }
        }
    }
    });
</script>