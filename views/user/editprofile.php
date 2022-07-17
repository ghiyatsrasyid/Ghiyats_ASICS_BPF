<!-- Modal Start -->
<div class="modal fade" id="EditProfileModal" tabindex="-1" role="dialog" aria-labelledby="EditProfileModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body p-0">
                                                                <div class="card card-plain">
                                                                    <div class="card-header pb-0 text-left">
                                                                        <h3 class="font-weight-bolder text-info text-gradient">Edit Profile</h3>
                                                                        <p class="mb-0">Perbarui Data Anda !</p>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <form role="form text-left" action="<?= base_url('User/edit'); ?>" method="POST" enctype="multipart/form-data">
                                                                        <input type="hidden" name="id" value="<?= $profile['id']; ?>">
                                                                        <label>Nama</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control" placeholder="Nama" aria-label="Nama" value="<?= $profile['nama']; ?>" name="nama" id="nama" >
                                                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                        <label>Email</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="email" class="form-control" placeholder="Email" aria-label="Email" value="<?= $profile['email']; ?>" name="email" id="email" >
                                                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                        <label>Foto Profil</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="file" class="form-control" placeholder="Choose File" value="<?= $profile['gambar']; ?>" name="gambar" id="gambar" >
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Simpan Data</button>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- Modal End -->