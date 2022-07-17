<div class="container-fluid py-4" >
      <div class="row text-center">
        <div class="d-flex flex-column">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h5><?php echo $judul; ?></h5>
            </div>
            <div class="card-body content-center" style="padding-left: 200px; padding-right: 200px;">
                <div class="position-center card-body justify-content-center " >
                <form role="form" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $produk['id']; ?>">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nama" value="<?= $produk['nama']; ?>" name="nama" id="nama">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="NEW/SECOND" value="<?= $produk['status']; ?>" name="status" id="status">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Stok" value="<?= $produk['stok']; ?>" name="stok" id="stok">
                        <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Harga" value="<?= $produk['harga']; ?>" name="harga" id="harga">
                        <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Kategori" value="<?= $produk['kategori']; ?>" name="kategori" id="kategori">
                        <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Keterangan" value="<?= $produk['keterangan']; ?>" name="keterangan" id="keterangan">
                        <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control" placeholder="Choose File" value="<?= $produk['gambar']; ?>" name="gambar" id="gambar">
                    </div>
                    <div class="form-check form-check-info text-start">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                    <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                    </label>
                    </div>
                    <div class="text-center">
                        <a href="<?= base_url('Produk') ?>" class="btn bg-gradient-danger w-20 my-4 mb-2">Batal</a>
                        <button type="submit" class="btn bg-gradient-primary w-20 my-4 mb-2">Simpan</button>
                    </div>
                </form>
                </div>
            </div>
          </div>
        </div>
      </div>