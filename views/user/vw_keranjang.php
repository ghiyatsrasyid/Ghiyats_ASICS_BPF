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
                            <img class="border-radius-lg w-40" src="<?= base_url('assets/img/produk/') . $produk['gambar']; ?>" alt="Image placeholder">
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form action="" method="POST" class="">
                                <div class="row">
                                        <div class="col-md-6">
                                        <input type="hidden" name="id" value="<?= $produk['id']; ?>">
                                        <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                                        <input type="hidden" name="stok" value="<?= $produk['stok'] ?>">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama Produk</label>
                                            <input class="form-control" readonly type="text" value="<?= $produk['nama']; ?>" id="nama">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Stok</label>
                                            <input id="stok" class="form-control" name="stok" readonly type="text" value="<?= $produk['stok']; ?>" id="stok">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Harga</label>
                                                <input class="form-control" id="harga" name="harga" readonly type="text" value="<?= $produk['harga']; ?>" id="harga">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Kategori</label>
                                                <input class="form-control" readonly type="text" value="<?= $produk['kategori']; ?>" id="kategori">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Status</label>
                                                <input class="form-control" readonly type="text" value="<?= $produk['status']; ?>" id="status">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Keterangan</label>
                                                <input class="form-control" readonly type="text" value="<?= $produk['keterangan']; ?>" id="keterangan">
                                            </div>
                                        </div>
                                        <hr class="horizontal dark">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Jumlah</label>
                                                <input class="form-control" type="number" name="jumlah" id="jumlah" min='1'>
                                                <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Total Harga</label>
                                                <input class="form-control" type="text" name="total" id="total" readonly >
                                            </div>
                                        </div>
                                        <hr class="horizontal dark">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button class="btn btn-danger" id="tambah" name="tambah" type="button" data-bs-toggle="modal" data-bs-target="#modal-keranjang">Tambah Ke Keranjang</button>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="modal-keranjang" tabindex="-1" role="dialog" aria-labelledby="modal-keranjang" aria-hidden="true">
                                            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title" id="modal-title-keranjang">Keranjang</h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="py-3 text-center">
                                                    <i class="ni ni-cart ni-3x"></i>
                                                    <h4 class="text-gradient text-success mt-4">Got It !</h4>
                                                    <p>Produk yang anda pilih telah ditambahkan kedalam keranjang ;).<br>Silahkan lihat detail keranjang !</p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-dark">Oke</button>
                                                </div>
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
    </div>
</div>
