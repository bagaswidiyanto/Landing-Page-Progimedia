<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $website->metaTitle; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?= $website->metaTitle; ?>" name="keywords">
    <meta content="<?= $website->metaDescription; ?>" name="description">


    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $website->metaTitle; ?>" />
    <meta property="og:description" content="<?= $website->metaDescription; ?>" />
    <meta property="og:url" content="https://page.progimedia.com/" />
    <meta property="og:image" content="<?= base_url(); ?>assets/imagenew/logo_link.png" />

    <!-- Favicon -->
    <link href="<?= base_url(); ?>assets/imagenew/url_logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700' rel='stylesheet'>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/flaticon/font/flaticon.css">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <!-- <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <link href="<?= base_url(); ?>assets/lib/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">

    <?php
    $numberAPI = $website->phone;
    $n1API = substr($numberAPI, 1);
    $apiWa = $n1API;

    $waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
    ?>

    <div class="container-fluid position-relative p-0" id="home">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3">
            <div class="container">
                <a href="" class="navbar-brand p-0">
                    <!-- <h1 class="m-0">FitApp</h1> -->
                    <img src="<?= base_url(); ?>assets/imagenew/logo_header.png" class="img-fluid" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fab fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#portofolio" class="nav-item nav-link">Portofolio</a>
                        <a href="#price" class="nav-item nav-link">Price</a>
                        <a href="#product" class="nav-item nav-link">Product</a>
                    </div>
                    <div class="d-flex align-items-center pt-2">
                        <a href="<?= $waLink; ?>" target="_blank" class="btn bg-orange fw-bold rounded-pill py-2 px-lg-2 px-xl-4 me-lg-2 me-xl-5">Hubungi
                            Kami</a>
                        <?php foreach ($sosmed as $s) { ?>
                            <a class="btn btn-outline-light btn-social" href="<?= $s->link; ?>" title="<?= $s->nama; ?>"><i class="fab <?= $s->icon; ?>"></i></a>
                        <?php } ?>
                        <!-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a> -->
                        <!-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a> -->
                        <!-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin"></i></a> -->
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-xxl hero-header">
            <div class="container px-lg-5">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h2 class="animated slideInDown">Jasa Pembuatan <br> <span class="txt-orange">Landing
                                Page</span> Profesional</h2>
                        <p class="py-4 animated slideInDown"><?= $home->deskripsi; ?></p>
                        <a href="#price" class="btn bg-blue fw-bold py-sm-2 px-3 rounded-10 me-3 mt-3 animated slideInLeft">Pilihan
                            Paket Harga <i class="fas fa-arrow-right ms-4"></i></a>
                    </div>
                    <div class="col-lg-6 d-flex mt-5 mt-lg-0 justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-laptop position-relative">
                            <img src="<?= base_url(); ?>assets/imagenew/bg_laptop.png" class="img-fluid" alt="">
                            <div class="box-watch-video bg-orange text-center rounded-10 text-white text-uppercase rounded-20" data-aos="fade-left" data-aos-delay="200">
                                <a href="<?= $home->video; ?>" class="glightbox btn-watch-video w-100 ">
                                    <div class="d-flex align-items-center position-relative px-4 py-2 rounded-20">
                                        <img class="img-fluid bgvideo me-2" src="<?= base_url(); ?>assets/imagenew/icon-video.png" alt="">
                                        <h6 class="text-white mb-0">Watch Video</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="features-header pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="slider-container">
                        <div class="swiper-container features-slider">
                            <div class="swiper-wrapper align-items-center">
                                <?php foreach ($keunggulan as $k) { ?>
                                    <div class="swiper-slide">
                                        <div class="row align-items-center px-3">
                                            <div class="col-sm-2 px-0 text-center text-sm-end">
                                                <img src="https://admin.progimedia.com/upload/landing_page/keunggulan/<?= $k->image; ?>" class="img-fluid me-3" alt="">
                                            </div>
                                            <div class="col-sm-10">
                                                <p><?= $k->title; ?></p>
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