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
            <div class="card-body px-4 pt-4 pb-2">
            <form role="form" action="" method="POST">
            <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                  <div class="input-group input-group-lg">
                    <input type="text" class="form-control form-control-lg" placeholder="Tulis Kritik dan Saran Anda Disini" value="<?= set_value('kotak_saran'); ?>" name="kotak_saran" id="kotak_saran">
                    <?= form_error('kotak_saran', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="text-center">
                        <a href="<?= base_url('User') ?>" class="btn bg-gradient-danger w-15 my-4 mb-2">Batal</a>
                        <button type="button" class="btn bg-gradient-primary w-15 my-4 mb-2" data-bs-toggle="modal" data-bs-target="#modal-saran">Simpan</button>
                </div>

                <div class="modal fade" id="modal-saran" tabindex="-1" role="dialog" aria-labelledby="modal-saran" aria-hidden="true">
                  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-saran">Kritik & Saran</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true"></span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="py-3 text-center">
                          <i class="ni ni-trophy ni-3x"></i>
                          <h4 class="text-gradient text-success mt-4">Terimakasih !</h4>
                          <p>Kritik & Saran anda sangat berarti untuk perkembangan aplikasi ini ;) .</p>
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