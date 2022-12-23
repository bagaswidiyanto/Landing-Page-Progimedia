<?php
$numberAPI = $website->phone;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>

<div class="container-fluid landing-page bg-orange">
    <div class="container py-4 px-lg-5">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-3">
                <img src="<?= base_url(); ?>assets/imagenew/img_250k.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 my-4 my-lg-0">
                <div class="title">
                    <h2 class="text-white">Sudah bisa dapat <br> Landing Page Professional</h2>
                </div>
            </div>
            <div class="col-lg-3">
                <a href="#price"
                    class="btn bg-blue fw-bold py-sm-2 px-3 rounded-10 me-3 mt-3 animated slideInLeft">Pilihan
                    Paket Harga <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1>Kenapa Anda Harus Punya <span class="txt-orange">Landing Page ?</span></h1>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-5 text-center">
            <?php foreach ($fitur as $f) { ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item rounded p-4">
                    <div class="img">
                        <img src="https://admin.progimedia.com/upload/landing_page/fitur/<?= $f->image; ?>"
                            class="img-fluid" alt="">
                    </div>
                    <h5 class="my-3"><?= $f->title; ?></h5>
                    <p><?= $f->deskripsi; ?></p>
                </div>
            </div>
            <?php } ?>
            <div class="text-center mt-5">
                <a href="<?= $waLink; ?>" target="_blank"
                    class="btn bg-green-light fw-bold py-sm-2 fw-bold w-auto px-3 rounded-10 me-3 mt-3 animated slideInLeft">PESAN
                    SEKARANG</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid creativity px-0">
    <div class="bg-orange">
        <div class="container py-5 px-lg-5 text-center">
            <h1 class="text-white wow fadeInUp" data-wow-delay="0.1s">Namun masalahnya, Membuat Landing Page yang
                menarik & menjual itu tidak mudah</h1>
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="content py-5">
            <div class="row g-5">
                <?php foreach ($about as $a) { ?>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row align-items-center">
                        <div class="col-2 text-end">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="col-10">
                            <p><?= $a->deskripsi; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>

<div class="container-xxl features-2">
    <div class="container py-5 px-lg-5">
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.1s">
            <?php foreach ($pengguna as $p) { ?>
            <div class="col-lg-4 col-md-4">
                <div class="box-item">
                    <h1><?= $p->persen; ?>%</h1>
                    <p><?= $p->deskripsi; ?></p>
                </div>
            </div>
            <?php } ?>
            <div class="text-center mt-5">
                <a href="<?= $waLink; ?>" target="_blank"
                    class="btn bg-green-light fw-bold py-sm-2 w-auto px-3 rounded-10 me-3 mt-3 animated slideInLeft">PESAN
                    SEKARANG</a>
            </div>
        </div>
        <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <img src="<?= base_url(); ?>assets/imagenew/logo_header.png" class="img-fluid" alt="">
        </div>
    </div>
</div>

<div class="container-fluid landing-page2" id="why-us">
    <div class="container py-4 px-lg-5">
        <div class="row text-center">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <h2>Hanya di <span class="txt-orange">Progimedia</span> anda dapat membuat landing page profesional
                    dengan <span class="txt-orange">harga super murah <br><br> tanpa mahal, tanpa ribet dan tanpa
                        pusing</span></h2>
            </div>
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <a href="<?= $waLink; ?>" target="_blank"
                    class="btn bg-green-light fw-bold py-sm-2 px-3 rounded-10 me-3 mt-3 animated slideInLeft">PESAN
                    SEKARANG</a>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl features">
    <div class="container py-5 px-lg-5">
        <div class="header-title text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1>Kenapa Harus Menggunakan jasa pembuatan Landing Page <span class="txt-orange">Progimedia ?</span></h1>
        </div>
        <div class="row mt-5 g-4 text-center">
            <?php foreach ($keunggulan as $k) { ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="features-item rounded p-4">
                    <div class="img">
                        <img src="https://admin.progimedia.com/upload/landing_page/keunggulan/<?= $k->image; ?>"
                            class="img-fluid" alt="">
                    </div>
                    <h5 class="my-4"><?= $k->title; ?></h5>
                    <p><?= $k->deskripsi; ?></p>
                </div>
            </div>
            <?php } ?>
            <div class="text-center mt-5">
                <a href="<?= $waLink; ?>" target="_blank"
                    class="btn bg-green-light fw-bold py-sm-2 px-3 rounded-10 me-3 mt-3 animated slideInLeft">PESAN
                    SEKARANG</a>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl portofolio" id="portofolio">
    <div class="container py-5 px-lg-4">
        <div class="header-title text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1>Portofolio <span class="txt-orange">Progimedia</span></h1>
        </div>
        <div class="row mt-2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline rounded mb-5" id="portofolio-flters">
                    <li class="mx-2 my-1 my-md-2 active" data-filter="*">All</li>
                    <?php foreach ($filter as $filter) { ?>
                    <li class="mx-2 my-1 my-md-2" data-filter=".filter-<?= $filter->slug ?>">
                        <?= $filter->filter ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row text-center g-4 portofolio-container wow fadeInUp" data-wow-delay="0.1s">
            <?php foreach ($this->db->query("SELECT * FROM tbl_library")->result() as $l) { ?>
            <?php $slug = $this->db->query("SELECT * FROM tbl_master_filter_library WHERE id = '" . $l->id_filter . "'")->row(); ?>
            <div class="col-lg-4 col-6 portofolio-item filter-<?= $slug->slug ?>">
                <div class="portofolio-wrap">
                    <a href="#" data-gallery="portfolioGallery" title="Mas Kargo" data-bs-toggle="modal"
                        data-bs-target="#myModal<?= $l->id; ?>">
                        <img src="https://admin.progimedia.com/upload/library/<?= $l->image; ?>" class="img-fluid"
                            alt="">
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <a href="<?= $waLink; ?>" target="_blank"
                class="btn bg-green-light fw-bold py-sm-2 px-3 rounded-10 me-3 mt-3 animated slideInLeft">PESAN
                SEKARANG</a>
        </div>
    </div>
</div>

<div class="container-xxl px-0 feature py-5" id="product">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.1s">
                <div class="header-title">
                    <h1>Layanan Landing Page Profesional <span class="txt-orange">Progimedia</span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <img src="<?= base_url(); ?>assets/imagenew/bubble-right.png" class="img-fluid bg1" alt="">
        <div class="container px-lg-5">

            <div class="row mt-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="header-title-feature">
                        <h2 class="mb-4 txt-orange">Fitur Spesial yang akan Anda dapatkan.</h2>
                        <p><?= $fitur_special->deskripsi; ?></p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 g-4">
                <div class="col-lg-5">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-2 text-end">
                                <div class="img">
                                    <img src="<?= base_url(); ?>assets/imagenew/icon-cklis-box.svg" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-10 col-lg-10 col-xl-8">
                                <div class="title mt-3">
                                    <h5 class="txt-orange mb-3 fw-bold"><?= $fs1->title; ?></h5>
                                    <p><?= $fs1->deskripsi; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-2 text-end">
                                <div class="img">
                                    <img src="<?= base_url(); ?>assets/imagenew/icon-cklis-box.svg" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-10 col-lg-10 col-xl-8">
                                <div class="title mt-3">
                                    <h5 class="txt-orange mb-3 fw-bold"><?= $fs2->title; ?></h5>
                                    <p><?= $fs2->deskripsi; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-2 text-end">
                                <div class="img">
                                    <img src="<?= base_url(); ?>assets/imagenew/icon-cklis-box.svg" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-10 col-lg-10 col-xl-8">
                                <div class="title mt-3">
                                    <h5 class="txt-orange mb-3 fw-bold"><?= $fs3->title; ?></h5>
                                    <p><?= $fs3->deskripsi; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content d-block d-lg-none wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-2 text-end">
                                <div class="img">
                                    <img src="<?= base_url(); ?>assets/imagenew/icon-cklis-box.svg" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="title mt-3">
                                    <h5 class="txt-orange mb-3 fw-bold"><?= $fs4->title; ?></h5>
                                    <p><?= $fs4->deskripsi; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-laptop mb-5">
                        <img src="https://admin.progimedia.com/upload/landing_page/<?= $fitur_special->image; ?>"
                            class="img-fluid" alt="">
                    </div>
                    <div class="row d-none d-lg-block wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-9">
                            <div class="content pt-4">
                                <div class="row">
                                    <div class="col-2 text-end">
                                        <div class="img">
                                            <img src="<?= base_url(); ?>assets/imagenew/icon-cklis-box.svg"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="title mt-3">
                                            <h5 class="txt-orange mb-3 fw-bold"><?= $fs4->title; ?></h5>
                                            <p><?= $fs4->deskripsi; ?></p>
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

<div class="container-xxl px-0 position-relative feature">
    <img src="<?= base_url(); ?>assets/imagenew/bubble-left.png" class="img-fluid bg2" alt="">
    <div class="container px-lg-5">
        <div class="row justify-content-end text-end">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="header-title-feature">
                    <h2 class="mb-4 txt-orange">Kelebihan Utama Buat Landing Page di Progimedia</h2>
                    <p><?= $kelebihan->deskripsi; ?></p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-7">
                <div class="bg-laptop mb-5">
                    <img src="https://admin.progimedia.com/upload/landing_page/<?= $kelebihan->image; ?>"
                        class="img-fluid" alt="">
                </div>
                <div class="row justify-content-end wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-9">
                        <div class="content pt-5">
                            <div class="row ">

                                <div class="col-10 col-lg-10 col-xl-8 text-end">
                                    <div class="title mt-4">
                                        <h5 class="txt-orange mb-3 fw-bold"><?= $kl4->title; ?></h5>
                                        <p><?= $kl4->deskripsi; ?></p>
                                    </div>
                                </div>
                                <div class="col-2 text-start">
                                    <div class="img">
                                        <img src="<?= base_url(); ?>assets/imagenew/icon-cklis-box.svg"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="content wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row justify-content-end">
                        <div class="col-10 col-lg-10 col-xl-8 text-end">
                            <div class="title mt-4">
                                <h5 class="txt-orange mb-3 fw-bold"><?= $kl1->title; ?></h5>
                                <p><?= $kl1->deskripsi; ?></p>
                            </div>
                        </div>
                        <div class="col-2 text-start">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/imagenew/icon-cklis-box.svg" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row justify-content-end">
                        <div class="col-10 col-lg-10 col-xl-8 text-end">
                            <div class="title mt-4">
                                <h5 class="txt-orange mb-3 fw-bold"><?= $kl2->title; ?></h5>
                                <p><?= $kl2->deskripsi; ?></p>
                            </div>
                        </div>
                        <div class="col-2 text-start">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/imagenew/icon-cklis-box.svg" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row justify-content-end">
                        <div class="col-10 col-lg-10 col-xl-8 text-end">
                            <div class="title mt-4">
                                <h5 class="txt-orange mb-3 fw-bold"><?= $kl3->title; ?></h5>
                                <p><?= $kl3->deskripsi; ?></p>
                            </div>
                        </div>
                        <div class="col-2 text-start">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/imagenew/icon-cklis-box.svg" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <a href="<?= $waLink; ?>" target="_blank"
                    class="btn bg-green-light fw-bold py-sm-2 px-3 rounded-10 me-3 mt-3 animated slideInLeft">PESAN
                    SEKARANG</a>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl testimoni" id="testimoni">
    <div class="container px-lg-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="header-title">
                    <h1 class="mt-5">Testimoni</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="slider-container">
                    <div class="swiper-container testimoni-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($testimoni as $t) { ?>
                            <div class="swiper-slide">
                                <div class="box-testimoni text-center p-4 ">
                                    <div
                                        class="img text-center d-inline-flex align-items-center justify-content-center">
                                        <img src="https://admin.progimedia.com/upload/testimonials/<?= $t->image; ?>"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="name">
                                        <h5><?= $t->nama; ?></h5>
                                    </div>
                                    <div class="star my-2">
                                        <?php if ($t->rating == 5) { ?>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <?php } else if ($t->rating == 4) { ?>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star-o"></small>
                                        <?php } else if ($t->rating == 3) { ?>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star-o"></small>
                                        <small class="fas fa-star-o"></small>
                                        <?php } else if ($t->rating == 2) { ?>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star-o"></small>
                                        <small class="fas fa-star-o"></small>
                                        <small class="fas fa-star-o"></small>
                                        <?php } else if ($t->rating == 1) { ?>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star-o"></small>
                                        <small class="fas fa-star-o"></small>
                                        <small class="fas fa-star-o"></small>
                                        <small class="fas fa-star-o"></small>
                                        <?php } else { ?>
                                        <small class="fas fa-star-o"></small>
                                        <small class="fas fa-star-o"></small>
                                        <small class="fas fa-star-o"></small>
                                        <small class="fas fa-star-o"></small>
                                        <small class="fas fa-star-o"></small>
                                        <?php } ?>
                                    </div>
                                    <div class="desk">
                                        <p><?= $t->testimoni; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-0 service-price" id="price">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                <div class="header-title">
                    <h1>Jasa Website Landing Page <span class="txt-orange">Professional</span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="price">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center ">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="header-price text-center">
                        <h5 class="txt-orange"><?= $jasa->deskripsi; ?></h5>
                    </div>
                </div>
            </div>
            <div class="row py-5 g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="box-price">
                        <div class="header">
                            <h4><?= $silver->nama; ?></h4>
                            <p>Rp <?= number_format($silver->price_discount, 0, ",", "."); ?></p>
                            <h3>Rp <?= $silver->price; ?>k</h3>
                        </div>
                        <div class="content mt-3">
                            <?= $silver->list; ?>
                        </div>
                        <!-- <div class="feature position-relative">
                                    <a href="#" class="txt-orange">Fitur Selengkapnya</a>
                                </div> -->
                        <div class="order text-center mt-4">
                            <a href="<?= $waLink; ?>" target="_blank"
                                class="btn py-sm-2 px-4 rounded-10 me-3 animated slideInLeft">PESAN SEKARANG</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="box-price">
                        <div class="header">
                            <h4><?= $gold->nama; ?></h4>
                            <p>Rp <?= number_format($gold->price_discount, 0, ",", "."); ?></p>
                            <h3>Rp <?= $gold->price; ?>k</h3>
                        </div>
                        <div class="content mt-3">
                            <?= $gold->list; ?>
                        </div>
                        <!-- <div class="feature position-relative">
                                    <a href="#" class="txt-orange">Fitur Selengkapnya</a>
                                </div> -->
                        <div class="order text-center mt-4">
                            <a href="<?= $waLink; ?>" target="_blank"
                                class="btn py-sm-2 px-4 rounded-10 me-3 animated slideInLeft">PESAN SEKARANG</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="box-price">
                        <div class="header">
                            <h4><?= $platinum->nama; ?></h4>
                            <p>Rp <?= number_format($platinum->price_discount, 0, ",", "."); ?></p>
                            <h3>Rp <?= $platinum->price; ?>k</h3>
                        </div>
                        <div class="content mt-3">
                            <?= $platinum->list; ?>
                        </div>
                        <!-- <div class="feature position-relative">
                                    <a href="#" class="txt-orange">Fitur Selengkapnya</a>
                                </div> -->
                        <div class="order text-center mt-4">
                            <a href="<?= $waLink; ?>" target="_blank"
                                class="btn py-sm-2 px-4 rounded-10 me-3 animated slideInLeft">PESAN SEKARANG</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="box-price">
                        <div class="header">
                            <h4><?= $spesial->nama; ?></h4>
                            <p>Rp <?= number_format($spesial->price_discount, 0, ",", "."); ?></p>
                            <h3>Rp <?= $spesial->price; ?>k</h3>
                        </div>
                        <div class="content mt-3">
                            <?= $spesial->list; ?>
                        </div>
                        <!-- <div class="feature position-relative">
                                    <a href="#" class="txt-orange">Fitur Selengkapnya</a>
                                </div> -->
                        <div class="order text-center mt-4">
                            <a href="<?= $waLink; ?>" target="_blank"
                                class="btn py-sm-2 px-4 rounded-10 me-3 animated slideInLeft">PESAN SEKARANG</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid consultation">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.1s">
                <div class="header-title">
                    <h1 class="text-capitalize">Butuh Konsultasi lebih Lanjut Terkait Pembuatan <span
                            class="txt-orange">Landing Page?</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <p class="py-4 wow fadeInUp" data-wow-delay="0.1s"><?= $konsultasi->deskripsi; ?></p>
                <div class="chat mt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="<?= $waLink; ?>" target="_blank"
                        class="btn bg-green fw-bold py-sm-3 d-inline-flex align-items-center px-4 rounded-20 me-0 me-sm-5 m animated slideInLeft"><i
                            class="fa fa-whatsapp me-3"></i>
                        CHAT WHATSAPP</a>
                    <a href="#contact"
                        class="btn bg-orange mt-4 mt-sm-0 fw-bold py-sm-3 d-inline-flex align-items-center px-4 rounded-20  animated slideInLeft"><i
                            class="fas fa-envelope me-3"></i>SEND MASSAGE</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl needs position-relative">
    <div class="container pt-2 px-lg-5">
        <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-5 position-relative">
                <div class="header-title mt-5">
                    <h3 class="text-capitalize">Karena kami akan berikan semua kebutuhan <br> <span
                            class="txt-orange">Landing page</span> anda</h3>
                    <a href="<?= $waLink; ?>" target="_blank"
                        class="btn offer bg-green-light fw-bold py-sm-2 px-4 mt-5 mt-lg-0 rounded-10 animated slideInLeft">DAPATKAN
                        PENAWARAN</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row justify-content-end position-relative bg-row pb-5">
                    <div class="col-lg-12">
                        <div class="slider-container">
                            <div class="swiper-container needs-slider">
                                <div class="swiper-wrapper">
                                    <?php foreach ($kebutuhan as $k) { ?>
                                    <div class="swiper-slide">
                                        <div class="box-free text-center py-4 px-3">
                                            <div class="title">
                                                <h5><?= $k->title; ?></h5>
                                            </div>
                                            <div class="icon py-5">
                                                <img src="https://admin.progimedia.com/upload/landing_page/kebutuhan/<?= $k->image; ?>"
                                                    class="img-fluid" alt="">
                                            </div>
                                            <div class="desk">
                                                <p><?= $k->deskripsi; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                                <div class="position-absolute end-0 bottom-0">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid note">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-11 wow fadeInUp" data-wow-delay="0.1s">
                <h2>Segera Miliki Landing Page Anda Sekarang Juga <br><span class="txt-yellow">Dan Bersiaplah untuk
                        kebanjiran order</span></h2>
                <a href="<?= $waLink; ?>" target="_blank"
                    class="btn bg-green-light fw-bold py-sm-2 px-4 rounded-10 mt-5 animated slideInLeft">PESAN
                    SEKARANG</a>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl faq" id="faq">
    <div class="container py-5 px-lg-5">
        <div class="row">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                <div class="header-title">
                    <h4 class="fw-normal">FAQs</h4>
                    <h1>Frequently Asked Questions</h1>
                    <p>Pertanyaan yang sering muncul mengenai layanan Jasa Landing Page Development</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="custom-accordion" id="accordion_1">
                    <?php foreach ($this->db->query("SELECT * FROM lp_faq order by id ASC LIMIT 1")->result() as $f) { ?>
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?= $f->id ?>" aria-expanded="true"
                                aria-controls="collapse<?= $f->id ?>"><?= $f->title ?></button>
                        </h2>

                        <div id="collapse<?= $f->id ?>" class="collapse show" aria-labelledby="heading<?= $f->id ?>"
                            data-bs-parent="#accordion_<?= $f->id ?>">
                            <div class="accordion-body">
                                <?= $f->deskripsi ?>
                            </div>
                        </div>
                    </div> <!-- .accordion-item -->
                    <?php } ?>

                    <?php foreach ($this->db->query("SELECT * FROM lp_faq order by id ASC LIMIT 1,20")->result() as $faq) { ?>
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?= $faq->id ?>" aria-expanded="false"
                                aria-controls="collapse<?= $faq->id ?>"><?= $faq->title ?></button>
                        </h2>
                        <div id="collapse<?= $faq->id ?>" class="collapse" aria-labelledby="heading<?= $faq->id ?>"
                            data-bs-parent="#accordion_1">
                            <div class="accordion-body">
                                <?= $faq->deskripsi ?>
                            </div>
                        </div>
                    </div> <!-- .accordion-item -->
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl contact" id="contact">
    <div class="container py-5 px-lg-5">
        <div class="header-title wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="txt-orange">HUBUNGI KAMI</h1>
        </div>
        <div class="row mt-5">
            <div class="col-lg-5">
                <div class="content">
                    <div class="address mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-2 pe-0 text-center">
                                <img src="<?= base_url(); ?>assets/imagenew/location.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-10 col-md-8">
                                <h3> Alamat :</h3>
                                <p><?= $website->address; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="email mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-2 pe-0 text-center">
                                <img src="<?= base_url(); ?>assets/imagenew/email.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-10 col-md-8">
                                <h3> Email :</h3>
                                <p><?= $website->email; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="call mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-2 pe-0 text-center">
                                <img src="<?= base_url(); ?>assets/imagenew/phone.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-10 col-md-8">
                                <?php
                                $number = $website->phone;
                                $n1 = substr($number, 0, 3);
                                $n2 = substr($number, 3, 4);
                                $n3 = substr($number, 7);
                                $wa = $n1 . ' ' . $n2 . ' ' . $n3;
                                ?>
                                <h3> Call :</h3>
                                <p><?= $wa; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">

                            <form id="help" class="form-contact">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="text" id="nama" name="nama" class="form-control rounded-0"
                                                placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="email" id="email" name="email" class="form-control rounded-0"
                                                placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <input type="text" id="telp" name="telp" class="form-control rounded-0"
                                                placeholder="Ex: 0896********" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <textarea id="message" name="message" class="form-control rounded-0"
                                                placeholder="Leave a message here" style="height: 150px"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn bg-orange rounded-10 py-2 px-5">Send
                                            Message <i class="fas fa-arrow-right ms-2"></i></button>
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

<div class="visitor" style="background: #575757;">
    <div class="container py-5 px-lg-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-duration="1000">
                <div class="box-visitor p-3">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <div class="icon text-center">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="total">
                                <h4><?= date('d'); ?></h4>
                            </div>
                            <div class="text">
                                <p><?= date('F Y'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-duration="2300">
                <div class="box-visitor p-3">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <div class="icon text-center">
                                <i class="fa fa-signal"></i>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="total">
                                <h4><?= $online->jml; ?></h4>
                            </div>
                            <div class="text">
                                <p>Online Visitor Today</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-duration="2600">
                <div class="box-visitor p-3">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <div class="icon text-center">
                                <i class="fa fa-male"></i>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="total">
                                <h4><?= $today->jml; ?></h4>
                            </div>
                            <div class="text">
                                <p>Visitor Today</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-duration="2900">
                <div class="box-visitor p-3">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <div class="icon text-center">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="total">
                                <h4><?= $all->jml; ?></h4>
                            </div>
                            <div class="text">
                                <p>Total Visitor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

$(document).ready(function() {
    base_url = '<?= base_url() ?>';

    $("#help").submit(function() {
        $(".btn").attr("disabled", true);

        var data = {
            nama: $("#nama").val(),
            email: $("#email").val(),
            telp: $("#telp").val(),
            message: $("#message").val()
        }

        $.ajax({
            type: "POST",
            url: base_url + "bantuan",
            data: data,

            success: function(response) {
                $('.success').fadeIn(1000);
                $("#help .btn").attr("disabled", false);
                setInterval(function() {
                    alert("Terima Kasih, Pesan anda akan kami proses secepatnya.")
                    window.location = base_url;
                }, 1000)
            },
            error: function() {
                $(".error").fadeIn(1000);
                $("#help .btn").attr("disabled", false);
            }
        });
        return false;
    });
});
</script>