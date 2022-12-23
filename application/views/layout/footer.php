<?php
$numberAPI = $website->phone;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>

<style>
    .modal-img {
        height: 87%;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        bottom: 0;
        top: auto;
    }
</style>

<!-- Modal Portofolio -->
<?php foreach ($this->db->query("SELECT * FROM tbl_library")->result() as $lModal) { ?>
    <div class="modal modal-img animated fadeInUp" id="myModal<?= $lModal->id; ?>">
        <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
            <div class="modal-content px-5">
                <style>
                    .btn-close {
                        background-color: #fff;
                    }
                </style>
                <!-- Modal Header -->
                <div class="modal-header border-0">
                    <div class="title-header">
                        <h3 class="text-danger fw-bold text-uppercase mb-0"><?= $lModal->nama; ?></h3>
                        <small>Created By <?= $lModal->createBy ?></small>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body ">
                    <img src="https://admin.progimedia.com/upload/library/<?= $lModal->portofolio; ?>" class="img-fluid" alt="">
                </div>


            </div>
        </div>
    </div>
<?php } ?>


<!-- Footer Start -->
<div class="container-fluid py-5 text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container position-relative py-5 px-lg-5">
        <div class="row justify-content-between">
            <div class="col-md-5">
                <div class="img">
                    <img src="<?= base_url(); ?>assets/imagenew/logo_footer.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-5 text-md-end">
                <a href="<?= $waLink; ?>" target="_blank" class="btn bg-green-light fw-bold py-sm-2 px-4 rounded-10 mt-5 animated slideInLeft">Dapatkan
                    Penawaran</a>
            </div>
        </div>
        <div class="row g-4 justify-content-between my-5">
            <div class="col-lg-5">
                <div class="progimedia">
                    <?= $website->description; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="navigation">
                    <h3>Navigation</h3>
                    <div class="row g-3 mt-2">
                        <div class="col-6 col-sm-4">
                            <a href="#home">Home</a>
                        </div>
                        <div class="col-6 col-sm-4">
                            <a href="#testimoni">Testimoni</a>
                        </div>
                        <div class="col-6 col-sm-4">
                            <a href="#portofolio">Portofolio</a>
                        </div>
                        <div class="col-6 col-sm-4">
                            <a href="#why-us">Why Choose Us</a>
                        </div>
                        <div class="col-6 col-sm-4">
                            <a href="#price">Price</a>
                        </div>
                        <div class="col-6 col-sm-4">
                            <a href="#faq">FAQ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 justify-content-between">
            <div class="col-lg-5">
                <div class="information">
                    <p>Informasi Lebih Lanjut Seputar <br>Produk Progimedia : <br><a href="https://progimedia.com/" target="_blank" class="fw-bold">www.progimedia.com</a></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex pt-2">
                    <?php foreach ($sosmed as $s) { ?>
                        <a class="btn btn-outline-light btn-social" href="<?= $s->link; ?>" title="<?= $s->nama; ?>"><i class="fab <?= $s->icon; ?>"></i></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Footer End -->

<a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

<?php
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>
<div class="whatsapp-chat-section">
    <div class="icon-section">
        <img src="<?= base_url(); ?>assets/whatsapp/ic_whatsapp.png" id="whatsapp_chat" onclick="chatWhatsApp();">
    </div>
    <div id="whatsapp-chat-popup" class="animated bounceOutDown" style="z-index: 999999; display: none;">
        <div id="list-chat-section" class="list-chat-section animated fadeIn" style="display: block;">
            <div class="header-section" style="background:  #FF6147">
                <img class="close-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_close_btn.png" onclick="closechatWhatsApp();">
                <div class="header-avatar-section">
                    <?php foreach ($this->db->query("SELECT * FROM lp_chat_wa order by id asc")->result() as $sec1) { ?>
                        <div class="avatar">
                            <img class="avatar" style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;" src="http://admin.progimedia.com/upload/landing_page/wa/<?= $sec1->image; ?>">
                        </div>
                    <? } ?>
                </div>
                <div class="header-desc-section" style="margin-top: 15px;">
                    <p>Kami siap membantu Anda, Silahkan chat dengan customer service kami. </p>
                </div>
            </div>
            <div class="chat-section">
                <?php foreach ($this->db->query("SELECT * FROM lp_chat_wa")->result() as $sec2) { ?>
                    <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                        <div class="avatar">
                            <img class="avatar" src="http://admin.progimedia.com/upload/landing_page/wa/<?= $sec2->image; ?>">
                        </div>
                        <div class="profile">
                            <p class="position">Customer Service </p>
                            <h3 class="name"><?= strtoupper($sec2->nama); ?></h3>
                            <?php if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                                <small class="status">Online <span class="online"><i class="fab fa-circle "></i></span>
                                </small>
                            <? } else { ?>
                                <small class="status">Offline <span class="offline"><i class="fab fa-circle "></i></span>
                                </small>
                            <? } ?>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
        <?php foreach ($this->db->query("SELECT * FROM lp_chat_wa")->result() as $sec3) { ?>
            <div class="chat-section animated fadeIn" id="customer_chat_<?= $sec3->id; ?>" style="display: none;">
                <div class="header-section" style="background: #FF6147">
                    <img class="back-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_back_btn.png" onclick="backListChat(<?= $sec3->id; ?>);">
                    <div class="header-avatar-section">
                        <div class="avatar">
                            <img class="avatar" style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;" src="http://admin.progimedia.com/upload/landing_page/wa/<?= $sec3->image; ?>">
                        </div>
                    </div>
                    <div class="header-desc-section">
                        <h3><?= $sec3->nama; ?></h3>
                        <?php
                        $phone_split = implode(" ", str_split('+62' . $sec3->phone, 4)) . " ";
                        ?>
                        <p><i class="fab fa-phone"></i> <?php echo $phone_split; ?></p>
                    </div>
                </div>
                <div class="inside-chat-section">
                    <div class="chat">
                        <div class="inside-chat">
                            <span>Halo saya <?= ucwords(strtolower($sec3->nama)); ?>, dari
                                <?= $website->name; ?></span>
                        </div>
                        <div class="time">
                            <span><?php echo date('H:i'); ?><img src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="inside-chat">
                            <span>Ada yang bisa saya bantu ?</span>
                        </div>
                        <div class="time">
                            <span><?php echo date('H:i'); ?><img src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                        </div>
                    </div>
                </div>
                <div class="box-chat-section">
                    <div class="text">
                        <input type="hidden" id="telp_wa_<?= $sec3->id; ?>" name="telp_wa_<?= $sec3->id; ?>" value="<?= $sec3->phone; ?>">
                        <input type="text" class="input-message-whatsapp" id="chat_wa_<?= $sec3->id; ?>" name="chat_wa_<?= $sec3->id; ?>" onchange="textChatWhatsapp(<?= $sec3->id; ?>);" onclick="textChatWhatsapp(<?= $sec3->id; ?>);" onmouseover="textChatWhatsapp(<?= $sec3->id; ?>);" onmouseout="textChatWhatsapp(<?= $sec3->id; ?>);" onkeydown="textChatWhatsapp(<?= $sec3->id; ?>);" value="" placeholder="Type a message">
                    </div>
                    <div class="button-send">
                        <a href="" id="btn_wa_<?= $sec3->id; ?>" target="_blank"><img src="<?= base_url(); ?>assets/whatsapp/ic_send_message.png"></a>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
</div>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
<!-- <script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script> -->
<script src="<?= base_url(); ?>assets/lib/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/isotope/isotope.pkgd.min.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url(); ?>assets/js/swiper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>

<script type="text/javascript">
    function chatWhatsApp() {
        var cek_class = document.getElementById('whatsapp-chat-popup');
        if (cek_class.classList.contains('bounceOutDown')) {
            cek_class.classList.remove("bounceOutDown");
            cek_class.classList.add("bounceInUp");
            cek_class.style.display = "block";
        } else {
            cek_class.classList.remove("bounceInUp");
            cek_class.classList.add("bounceOutDown");
        }
    }

    function chatCustomer(id) {
        var list_chat = document.getElementById("list-chat-section");
        var chat = document.getElementById('customer_chat_' + id);

        if (id != 0 && id != '') {
            list_chat.style.display = "none";
            chat.style.display = "block";
        }
    }



    function closechatWhatsApp() {
        var cek_class = document.getElementById('whatsapp-chat-popup');
        if (cek_class.classList.contains('bounceInUp')) {
            cek_class.classList.remove("bounceInUp");
            cek_class.classList.add("bounceOutDown");
        }
    }





    function backListChat(id) {
        var list_chat = document.getElementById("list-chat-section");
        var chat = document.getElementById('customer_chat_' + id);
        if (id != 0 && id != '') {
            chat.style.display = "none";
            list_chat.style.display = "block";
            $("#chat_wa_" + id).val('');
        }
    }



    function textChatWhatsapp(id) {
        var link_wa = 'https://api.whatsapp.com/send?';
        if (id != 0 && id != '') {
            var telp = $("#telp_wa_" + id).val();
            var chat = $("#chat_wa_" + id).val();
            var link = 'https://api.whatsapp.com/send?phone=62' + telp + '&text=' + chat;
            var btn = document.getElementById("btn_wa_" + id);
            btn.setAttribute("href", link);
        }
    }

    function myFunction() {
        var x = document.getElementById("contact");
        if (x.style.display === "none") {
            x.style.display = "block";
            document.getElementById("fa").style.transform = "rotate(90deg)";
        } else {
            x.style.display = "none";
            document.getElementById("fa").style.transform = "rotate(0)";
        }
    }
</script>

</body>

</html>