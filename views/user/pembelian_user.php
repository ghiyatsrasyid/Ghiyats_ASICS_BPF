<div class="container-fluid py-4">
      <div class="row text-center">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="col-6 d-flex">
                    <h5 class="mb-0"><?php echo $judul; ?></h5>
                </div>
            </div>
            <hr>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="datatable-basic">
                  <thead>
                    <tr>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">No</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">No Pembelian</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Tanggal</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Total</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Status</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Aksi</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
					          <?php foreach ($pembelian as $us) : ?>
                    <tr>
                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $i; ?>.</h6></td>
                      <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['no_penjualan']; ?></h6></td>
                      <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['tanggal']; ?></h6></td>
                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary">Rp. <?= $us['total_bayar']; ?></h6></td>
                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['status']; ?></h6></td>
                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                      <a class="btn btn-link text-success text-gradient px-3 mb-0" href="<?= base_url('User/statusbeli/') . $us['no_penjualan']; ?>"><i class="ni ni-active-40 me-2"></i>Detail</a>
                    </tr>
                    <?php $i++; ?>
					          <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>