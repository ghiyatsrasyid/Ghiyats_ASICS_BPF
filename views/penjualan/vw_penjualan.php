<div class="container-fluid py-4">
      <div class="row text-center">
        <div class="col-12">
          <div class="card mb-4">
              <hr>
            <div class="card-body px-0 pt-0 pb-2">
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
                </div>
                <div class="float-right">

                    <a href="<?= base_url('Penjualan/export') ?>" class="btn btn-danger btn-md"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export to .pdf</a>
                    <!-- <a href="<?= base_url('Penjualan/excel') ?>" class="btn btn-success btn-md"><i class="fa fa-file-excel"></i>&nbsp;&nbsp;Export to .xls</a> -->

                </div>
                    </div>
                            <div class="row">
                            <div class="col-md-12">
                        <?= $this->session->flashdata('message');
                        ?>
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">No</td>
                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">No Penjualan</td>
                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Tanggal</td>
                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Pelanggan</td>
                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Total</td>
                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Status</td>
                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($penjualan as $us) : ?>
                                    <tr>
                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $i; ?>.</h6></td>
                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['no_penjualan']; ?></h6></td>
                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['tanggal']; ?></h6></td>
                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['nama']; ?></h6></td>
                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary">RP. <?= $us['total_bayar']; ?></h6></td>
                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['status']; ?></h6></td>
                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary">

                                            <a class="btn btn-link text-success text-gradient px-3 mb-0" href="<?= base_url('Penjualan/detail/') . $us['no_penjualan']; ?>"><i class="ni ni-active-40 me-2"></i>Detail</a>

                                        </td>
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
      </div>