<div class="container-fluid py-4">
      <div class="row text-center">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <div class="col-6 d-flex">
                      <h5 class="mb-0"><?php echo $judul; ?></h5>
            </div>
                    <div class="col-12 d-flex justify-content-end">
                      <a class="btn bg-gradient-dark mb-0" href="<?= site_url('Produk/tambah') ?>"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Produk</a>
                    </div>
              </div>
              <hr>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="datatable-basic">
                  <thead>
                    <tr>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">No</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Gambar</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Nama Produk</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Status</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Stok</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Harga</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Kategori</td>
                        <td class="text-center text-uppercase text-primary text-sm font-weight-bolder ">Aksi</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
					<?php foreach ($produk as $us) : ?>
                    <tr>
                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $i; ?>.</h6></td>
                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                      <div>
                            <img src="<?= base_url('assets/img/produk/') . $us['gambar']; ?>" class="thumbnail thumbnail-sm me-5" alt="user1" style="width: 150px;">
                      </div>
                      </td>
                      <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['nama']; ?></h6></td>
                      <td class="text-center text-uppercase text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['status']; ?></h6></td>
                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['stok']; ?></h6></td>
                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary">Rp. <?= $us['harga']; ?></h6></td>
                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"><h6 class="text-secondary"><?= $us['kategori']; ?></h6></td>
                      <td class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="<?= base_url('Produk/hapus/') . $us['id']; ?>"><i class="far fa-trash-alt me-2"></i>Hapus</a>
                      <a class="btn btn-link text-dark px-3 mb-0" href="<?= base_url('Produk/edit/') . $us['id']; ?>"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
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