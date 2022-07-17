<div class="container-fluid py-4">
    <div class="row text-center">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="card">
                        <!-- Card image -->
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <h5 class="mb-0"><?php echo $judul; ?></h5>
                        <br>
                            <img class="border-radius-lg w-40" src="<?= base_url('assets/img/pembayaran/') . $penjualan['gambar']; ?>" alt="Image placeholder">
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">No Penjualan</label>
                                            <input class="form-control" readonly type="text" value="<?= $penjualan['no_penjualan']; ?>" id="no_penjualan">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Customer</label>
                                            <input id="stok" class="form-control" name="nama" readonly type="text" value="<?= $penjualan['nama']; ?>" id="nama">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Alamat</label>
                                                <input class="form-control" id="alamat" name="alamat" readonly type="text" value="<?= $penjualan['alamat']; ?>" id="alamat">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Total Pembayaran</label>
                                                <input class="form-control" readonly type="text" value="<?= $penjualan['total_bayar']; ?>" id="total_bayar">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="status" class="form-control-label">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                <option value="">Pilih Status</option>
                                                <option value="Pengemasan">Pengemasan</option>
                                                <option value="Proses Pengiriman">Proses Pengiriman</option>
                                                <option value="Dikirm">Dikirim</option>
                                                </select>
                                                <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>


                                        <hr class="horizontal dark">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button class="btn btn-primary" id="tambah" name="tambah" type="submit">Ubah Status</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                            <div class="card mb-4">
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">No</td>
                                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">No Penjualan</td>
                                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Pelanggan</td>
                                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Produk</td>
                                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Jumlah</td>
                                                    <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Total</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($detail as $us) : ?>
                                                    <tr>
                                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $i; ?>.</h6></td>
                                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['no_penjualan']; ?></h6></td>
                                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['nama']; ?></h6></td>
                                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['produk']; ?> </h6></td>
                                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['jumlah']; ?></h6></td>
                                                        <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['total']; ?></h6></td>
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
        </div>  
    </div>
</div>