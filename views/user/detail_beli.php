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
                <div class="row">
                <div class="table-responsive p-0">
                        <?= $this->session->flashdata('message');
                        ?>
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">No</td>
                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">No Pembelian</td>
                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Tanggal</td>
                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Total</td>
                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pembelian as $us) : ?>
                                    <tr>
                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><h6 class="text-secondary"><?= $i; ?>.</h6></td>
                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><h6 class="text-secondary"><?= $us['no_penjualan']; ?></h6></td>
                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><h6 class="text-secondary"><?= $us['tanggal']; ?></h6></td>
                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><h6 class="text-secondary"><?= $us['total_bayar']; ?></h6></td>
                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><h6 class="text-secondary"><?= $us['status']; ?></h6></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                    </div>
                    <form action="" method="POST">
                        <div class="col-md-12">
                            <table class="table align-items-center mb-0" id="datatable-basic">
                                <thead>
                                    <tr>
                                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">No</td>
                                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">No Pembelian</td>
                                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Sepatu</td>
                                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Jumlah</td>
                                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($detailbeli as $us) : ?>
                                        <tr>
                                            <td  class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><h6 class="text-secondary"><?= $i; ?>.</h6></td>
                                            <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['no_penjualan']; ?></h6></td>
                                            <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['nama_produk']; ?></h6></td>
                                            <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['jumlah']; ?></h6></td>
                                            <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['total']; ?></h6></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" name="no_penjualan" value="<?= $us['no_penjualan']; ?>">
                            <table class="table">
                                <tr>
                                    <td>Apakah Pesanan Sudah Anda Terima ?</td>
                                    <td>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">Pilih Status</option>
                                            <option value="Diterima">Sudah</option>
                                            <option value="Gagal">Belum</option>
                                        </select>
                                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </td>
                                    <td>

                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-detail"><i class="fa fa-save"></i>&nbsp;&nbsp;Ubah Status</button>

                                    </td>
                                </tr>
                            </table>

                            <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="modal-detail" aria-hidden="true">
                            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="modal-title-detail">Status Pengiriman</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="py-3 text-center">
                                    <i class="ni ni-check-bold ni-3x"></i>
                                    <h4 class="text-gradient text-success mt-4">Validasi Status </h4>
                                    <p>Terimakasih, Validasi status sudah kami terima .</p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-dark">Oke</button>
                                </div>
                                </div>
                            </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>