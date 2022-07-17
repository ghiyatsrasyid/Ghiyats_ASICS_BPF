<div class="container-fluid py-4">
    <div class="row text-center">
        <div class="col-12">
            <div class="card mb-4">
                    <div class="card">
                        <!-- Card image-->
                        <!-- Card body -->
                        <div class="col-12">
                            <div class="card card-profile">
                                <img src="<?= base_url('assets/img/profil/bg-profil.jpg'); ?>" alt="Image placeholder" class="h-50 card-img-top ">
                                <div class="row justify-content-center">
                                    <div class="col-4 col-lg-4 order-lg-2">
                                        <div class="mt-n4 mt-lg-n10 mb-4 mb-lg-0">
                                            <a href="javascript:;">
                                                <img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" class="rounded-circle img-fluid border border-2 border-white">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="text-center mt-4">
                                        <h5><?= $user['nama']; ?></h5>
                                        <div class="h6 font-weight-300">
                                        <i class="ni location_pin mr-2"></i><?= $user['email']; ?>
                                        </div>
                                        <div class="h6 mt-4">
                                        <i class="ni business_briefcase-24 mr-2"></i>Bergabung Sejak : <i class="ni education_hat mr-2"></i><?= date('d F Y', $user['date_created']); ?>
                                        </div>
                                    <div>
                                    </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0">User Profile</p>
                                            
                                            <!-- <button type="button" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#EditProfileModal">Edit Profile</button> -->
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
                                                                        <form role="form text-left" action="<?= base_url('User/edit').$user['id']; ?>" method="POST" enctype="multipart/form-data">
                                                                        <input type="hidden" name="id" value="<?= $user['id']; ?>">
                                                                        <label>Nama</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control" placeholder="Nama" aria-label="Nama" value="<?= $user['nama']; ?>" name="nama" id="nama" >
                                                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                        <label>Email</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="email" class="form-control" placeholder="Email" aria-label="Email" value="<?= $user['email']; ?>" name="email" id="email" >
                                                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                        <label>Foto Profil</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="file" class="form-control" placeholder="Choose File" value="<?= $user['gambar']; ?>" name="gambar" id="gambar" >
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
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama</label>
                                                <input class="form-control" readonly type="text" value="<?= $user['nama']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Email</label>
                                                <input id="stok" class="form-control" name="stok" readonly type="text" value="<?= $user['email']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Foto Profil</label>
                                                <input class="form-control" readonly type="text" value="<?= $user['gambar']; ?> ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
