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
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Tanggal</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Nama Barang</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Harga</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Jumlah</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Total</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Aksi</td>
                    </tr>
                  </thead>
                  <tbody>
                  <form action="<?= base_url('User/pesanan');?>" method="POST" enctype="multipart/form-data">
                        <?php
                        function rupiah($angka)
                        {
                            $hasil_rupiah = "Rp" . number_format($angka, 2, ',', '.');
                            return $hasil_rupiah;
                        }
                        $i = 1;
                        $total_bayar = 0;
                        $total_p = 0; ?>
                        <?php foreach ($keranjang as $us) :
                            $total_bayar += $us['total'];
                        ?>
                            <tr>
                                <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['tanggal']; ?></td>
                                <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['nama']; ?></td>
                                <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['harga']; ?></td>
                                <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['jumlah']; ?></td>
                                <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['total']; ?></td>
                                <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary"><a href="<?= base_url('User/delkeranjang/') . $us['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></a></td>
                            </tr>
                            <input type="hidden" name="produk[]" value="<?= $us['id_produk']; ?>">
                            <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                            <input type="hidden" name="harga" value="<?= $us['harga']; ?>">
                            <input type="hidden" name="jumlah_p[]" value="<?= $us['jumlah']; ?>">
                            <input type="hidden" name="total_p[]" value="<?= $us['total']; ?>">
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td>Alamat Pengiriman</td>
                            <td colspan="5"><input name="alamat" type="text" class="form-control" id="alamat"></td>
                        </tr>
                        <tr>
                            <td>Pembayaran</td>
                            <td colspan="5">
                                <select name="pembayaran" id="pembayaran" class="form-control">
                                    <option value="">Pilih Bank</option>
                                    <option value="BRI">BRI - 1111-11111-11111-1111</option>
                                    <option value="MANDIRI">MANDIRI - 2222-2222-2222</option>
                                    <option value="BNI">BNI - 3333-3333-3333</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Bukti Transfer</td>

                            <td colspan="5">
                                <div class="mb-3">
                                    <input type="file" class="form-control" placeholder="Choose File" name="gambar" id="gambar">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td colspan="5"><input name="keterangan" type="text" class="form-control" id="keterangan"></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="right"><strong>Total:</strong></td>
                            <td><?= rupiah($total_bayar); ?> </td>
                            <td>
                                <input type="hidden" name="no_penjualan" value="PJ<?= time() ?>" readonly class="form-control">
                                <input type="hidden" name="bayar" value="<?= $total_bayar; ?>"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-detailbeli"><i class="fa fa-save"></i>&nbsp;&nbsp;Pesan</button>
                            </td>
                        </tr>
                        </tr>

                        <div class="modal fade" id="modal-detailbeli" tabindex="-1" role="dialog" aria-labelledby="modal-detailbeli" aria-hidden="true">
                          <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-detailbeli">Checkout !</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true"></span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="py-3 text-center">
                                  <i class="ni ni-check-bold ni-3x"></i>
                                  <h4 class="text-gradient text-success mt-4">Halo !</h4>
                                  <p> Pastikan data pembelian sudah benar ! </p>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-dark">Ya, Data Pembelian Benar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </form>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>