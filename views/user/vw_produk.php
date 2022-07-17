<div class="container-fluid py-0">
        <div class="row text-center">
            <div class="col-15">
                <div class="card mb-3 text-center">
                        <div class="card-body px-0 pt-2 pb-0">
                            <div class="container-fluid">
                            <div class="row">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                <div class="carousel-item">
                                    <div class="page-header min-vh-65 m-4 border-radius-xl" style="background-image: url('https://images.unsplash.com/photo-1533468659570-9cc9354310e4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1317&q=80');">
                                    <span class="mask bg-gradient-dark"></span>
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-lg-8 my-auto">
                                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Kendaraan</h4>
                                            <h1 class="text-white fadeIn2 fadeInBottom">Sepeda Motor & Mobil</h1>
                                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Kami menjual berbagai kendaraan classic dan antik, baik sepeda motor maupun mobil.<br> WE JUST SELL CLASSICS VEHICLE</p>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="page-header min-vh-65 m-4 border-radius-xl" style="background-image: url('https://images.unsplash.com/photo-1635517006593-cd753762f253?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');">
                                    <span class="mask bg-gradient-dark"></span>
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-lg-8 my-auto">
                                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Senjata</h4>
                                            <h1 class="text-white fadeIn2 fadeInBottom">Katana, keris, dll.</h1>
                                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Kami menjual berbagai jenis senjata antik, senjata tradisional dari berbagai belahan dunia.<br> WE JUST SELL REPLICA WEAPON, IT'S SAFETY !</p>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="carousel-item active">
                                    <div class="page-header min-vh-65 m-4 border-radius-xl" style="background-image: url('https://images.unsplash.com/photo-1584382179644-9c11f8e6ee0c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3RhbXB8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60');">
                                    <span class="mask bg-gradient-dark"></span>
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-lg-8 my-auto">
                                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Perangko</h4>
                                            <h1 class="text-white fadeIn2 fadeInBottom">Perangko Domestik & Internasional</h1>
                                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Kami menjual perangko kuno dan langka, yang hanya bisa anda dapatkan disini.</p>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="min-vh-75 position-absolute w-100 top-0">
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <?= $this->session->flashdata('message');?>
                                </div>   
                                <div class="card-header pt-0 p-3 text-center">
                                <div class="col-6 d-flex">
                                    <h5 class="text-center mb-0"><?php echo $judul; ?></h5>
                                </div>
                            </div>
                                <?php $i = 1; ?>
                                <?php foreach ($produk as $us) : ?>
                                    <div class="col-xl-3 col-md-4 mb-4 " id="datatable-basic">
                                        <div class="card border-left-primary shadow h-80 py-2 bg-gray-200">
                                        <div class="card-header align-items-center text-center bg-gray-200">
                                            <a href="javascript:;" class="d-block">
                                            <img src="<?= base_url('assets/img/produk/') . $us['gambar']; ?>" class="col-auto img-fluid border-radius-lg" style="height:150px" >
                                            </a>
                                            <?php
                                            if ($us['status'] == 'NEW') { ?>
                                                <span class="badge bg-gradient-info"><?= $us['status'] ?></span>
                                            <?php } else { ?>
                                                <span class="badge bg-gradient-secondary"><?= $us['status'] ?></span>
                                            <?php
                                            } ?>
                                        </div>
                                        <div class="card-body px-0 pt-0 pb-0">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-1">
                                                    <div><?= $us['nama'] ?></div>
                                                    <div class="tetxt-xs font-weight-bold text-gray-800">Rp.<?= $us['harga'] ?></div>
                                                    <div class="text-gradient text-primary text-uppercase text-sm font-weight-bold my-1">Stok <a><?= $us['stok'] ?></a></div>
                                                </div>
                                            </div>
                                            <div class="align-items-center">
                                                <a class="btn btn-icon btn-2 btn-success" href="<?= base_url('User/keranjang/') . $us['id'] ?>" type="button">
                                                    <span class="btn-inner--icon"><i class="ni ni-send"></i></span>  Beli
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    