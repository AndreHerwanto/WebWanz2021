<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<!-- ***** Welcome Area Start ***** -->
<div class="welcome-area" id="welcome">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">

                    <h1><strong>WANZHOSTING</strong></h1>
                    <p> Penyedia Domain dan Pembuatan website secara moderen dan kami memberikan layanan yang bagus dan baik</p>
                    <a href="#about" class="main-button-slider">Find Out More</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="<?php echo base_url("images/why-us.png"); ?>" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->


<!-- ***** Features Big Item Start ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="<?php echo base_url("images/left-image.png"); ?>" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                <div class="left-heading">
                    <h5>WANZHOSTING</h5>
                </div>
                <div class="left-text">
                    <p>WanzHosting Adalah Bidang bisnis diteknologi Hosting Digital Website, berawal dari pertemuan sekelompok anak muda yang professional dan gigih terhadap cita-citanya, yang memiliki impian membangun usaha hosting website dan pembuatan website yang berkualitas dan moderen.</p>
                    <a href="#about2" class="main-button">Discover More</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->


<!-- ***** Features Big Item Start ***** -->
<section class="section" id="about2">
    <div class="container">
        <div class="row">
            <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                <div class="left-heading">
                    <h5>Keunggulan Utama Menggunakan WanzHosting</h5>
                </div>
                <p>Kami memberikan </p>
                <ul>
                    <li>
                        <img src="<?php echo base_url("images/customer-service-agent2.png"); ?>" alt="">
                        <div class="text">
                            <h6>Memberikan Layanan yang terbaik</h6>
                            <p>Kami Memberikan pelayanan prioritas bagi Client dan kami sangat tanggap dalam menerima keluhan serta pertanyaan Client. Customer Service kami siap melayani 24jam/7 hari.</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo base_url("images/secure-data.png"); ?>" alt="">
                        <div class="text">
                            <h6>Menjaga Keamanan Data Website Pelanggan</h6>
                            <p>Keamanan data pelanggan adalah utama yang kami prioritaskan untuk menjaga kerahasiaan pelanggan kami dari terbocor yang tidak diinginkan</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo base_url("images/web-design.png"); ?>" alt="">
                        <div class="text">
                            <h6>Memberikan Desain yang sesuai Kepada Pelanggan</h6>
                            <p>Web Desain yang kreatif, Unik dan Menarik, mengikuti perkembangan Designer Website. kami memberikan desain yang sesuai dengan keingginan pelanggan kami

                                <!-- <a rel="nofollow" href="https://templatemo.com/contact">contact</a> us on TemplateMo.</p> -->
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <br><br> <br><br>
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_mlqrzeeg.json" background="transparent" speed="1" style="width: 617px; height: 617px;" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->

<!-- ***** AWAL CRAD ***** -->
<section class="section" id="crad">
    <div class="demo">
        <div class="container">
            <div class="row text-center">
                <h1 class="heading-title">PRODUCT</h1>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                PERSONAL
                            </span>
                        </div>
                        <div class="pricing-plans">
                            <span class="price-value"> <s><i>Rp 350.000</i></s> </span>
                            <span class="price-value"><span>Rp 239.000</span></span>
                            <span class="subtitle">Masa Aktif 1 Tahun</span>
                        </div>
                        <div class="pricingContent">
                            <ul>
                                <li><b>100 Mb</b> Disk Space</li>
                                <li><b>Unlimited</b>Bandwidth</li>
                                <li><b>Free</b> SSL</li>
                                <li><b>Free</b> Domain</li>
                                <li><b>Always</b> Backup</li>
                                <li><b>24/7</b> Support</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <!-- BUTTON BOX-->
                            <a href="<?php echo base_url("productdata"); ?>" class="btn btn-block btn-default" target="_blank">BELI SEKARANG</a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                COMMERCIAL
                            </span>
                        </div>
                        <div class="pricing-plans">
                            <span class="price-value"> <s><i>Rp 650.000</i></s> </span>
                            <span class="price-value"><span>Rp537.000</span></span>
                            <span class="subtitle"><span> Masa Aktif 1 Tahun</span>
                        </div>
                        <div class="pricingContent">
                            <ul>
                                <li><b>Unlimited</b> Disk Space</li>
                                <li><b>Unlimited</b>Bandwidth</li>
                                <li><b>Unlimited</b>Web Revision</li>
                                <li><b>Free</b> SSL</li>
                                <li><b>Free</b> Domain</li>
                                <li><b>Always</b> Backup</li>
                                <li><b>24/7</b> Support</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <!-- BUTTON BOX-->
                            <a href="<?php echo base_url("productdata"); ?>" target="_blank" class="btn btn-block btn-default">BELI SEKARANG</a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <span class="heading">
                                BUSINESS
                            </span>
                        </div>
                        <div class="pricing-plans">
                            <span class="price-value"> <s><i>Rp 2.000.000</i></s> </span>
                            <span class="price-value"><span>Rp 1.390.000</span></span>
                            <span class="subtitle">Masa Aktif 1 Tahun</span>
                        </div>
                        <div class="pricingContent">
                            <ul>
                                <li><b>Unlimited</b> Disk Space</li>
                                <li><b>Unlimited</b>Bandwidth</li>
                                <li><b>Unlimited</b> Web Revision</li>
                                <li><b>Free</b> SSL</li>
                                <li><b>Free</b> Domain</li>
                                <li><b>Layanan</b> Prioritas</li>
                                <li><b>Graphic</b> Animation</li>
                                <li><b>Always</b> Backup</li>
                                <li><b>24/7</b> Support</li>
                            </ul>
                        </div><!-- /  CONTENT BOX-->

                        <div class="pricingTable-sign-up">
                            <!-- BUTTON BOX-->
                            <a href="<?php echo base_url("productdata"); ?>" class="btn btn-block btn-default" target="_blank">BELI SEKARANG</a>
                        </div><!-- BUTTON BOX-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** AKHIR CRAD ***** -->

<!-- ***** Features Small Start ***** -->
<section class="section" id="services">
    <div class="container">
        <div class="row">
            <h1 class="heading-title">SERVICES</h1>
            <div class="owl-carousel owl-theme">
                <div class="item service-item">
                    <div class="icon">
                        <i><img src="<?php echo base_url("images/startup.png"); ?>" alt=""></i>
                    </div>
                    <h5 class="service-title"> Loading Website Cepat</h5>
                    <p>Memberikan Interkoneksi yang stabil dan tidak lemot waktu loading website, sehingga Website selalu bisa diakses sepanjang waktu untuk para pengujung Web.</p>

                </div>
                <div class="item service-item">
                    <div class="icon">
                        <i><img src="<?php echo base_url("images/server.png"); ?>" alt=""></i>
                    </div>
                    <h5 class="service-title">Server</h5>
                    <p> Kecepatan Kinerja server kami sudah tidak diragukan kembali, tidak usah takut jika website kalian tidak Aktif karna server kami sering maintenance dan always on </p>

                </div>
                <div class="item service-item">
                    <div class="icon">
                        <i><img src="<?php echo base_url("images/aman.png"); ?>" alt=""></i>
                    </div>
                    <h5 class="service-title">Keamanan</h5>
                    <p>Perlindungan yang sangat terjaga terhadap data digital yang bersifat privat, untuk mencegah akses yang tidak diinginkan terhadap database maupun Website, Serta Keamanan Sistem yang sudah teruji</p>

                </div>
                <div class="item service-item">
                    <div class="icon">
                        <i><img src="<?php echo base_url("images/warna.png"); ?>" alt=""></i>
                    </div>
                    <h5 class="service-title">Website Design</h5>
                    <p>Web Desain yang kreatif, Unik dan Menarik, mengikuti perkembangan Designer Website untuk memberikan inovasi terbaru namun tidak memberatkan sistem di belakangnya. Sehingga website yang di buat bukan saja indah & menarik, tetapi juga dapat di update dengan mudah.</p>

                </div>
                <div class="item service-item">
                    <div class="icon">
                        <i><img src="<?php echo base_url("images/file.png"); ?>" alt=""></i>
                    </div>
                    <h5 class="service-title">Backup Data</h5>
                    <p>Salah satu cara terbaik bagi pemilik website agar terhindar dari gangguan virtual pada server maupun file website itu sendiri. Backup pada dasarnya adalah menyimpan salinan file ke penyimpanan eksternal, sehingga dapat dipulihkan sewaktu-waktu jika terjadi error atau kehilangan data</p>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->


<!-- ***** Frequently Question Start ***** -->
<section class="section" id="frequently-question">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="section-heading">
                    <p>berbagai macam pertayaan yang sering kami terima. kami akan fast respon pada client kami</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            <div class="left-text col-lg-6 col-md-6 col-sm-12">
                <h5>Sekilas Tentang WanzHosting</h5>
                <div class="accordion-text">
                    <p>Maka dari itu kami WanzHosting.com akan Memberikan product product unggulan Penyewaan Domain dan Pembuatan Website yang berkualitas dengan interkoneksi yang stabil untuk para pelanggan kami. Domain menjadi kebutuhan utama dalam pembuatan website untuk memastikan website memiliki alamat tersendiri dan konten yang baru.
                    </p>
                    <p>
                        WanzHosting.com Adalah solusi terbaik untuk mewujudkan impian kesuksesan mu. Kami akan membantu meningkatkan eksistensimu dengan mudah. Mari melangkah lebih maju dari sekarang ! kesuksesanmu adalah prioritas kami. Yuk gabung sekarang juga bersama WanzHosting.com Dunia dalam genggaman</a><br><br></span>
                        <a href="#contact-us" class="main-button">Contact Us</a>
                        <a href="https://api.whatsapp.com/send/?phone=6281315892813&text&app_absent=0" class="main-button" target="_blank">Contact WhatsApp</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="accordions is-first-expanded">
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Apa keuntungan menggunakan WanzHosting.com</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>keuntungan nya adalah bisa memperluas network dan target pengujung website kalian. dengan menggunakan layanan kami
                                    kalian tidak usah cemas,
                                    Dengan ada nya kami kalian tidak usah repot untuk memikirkan bagaimana cara membuat website untuk bisnis kalian. WanzHosting.com adalah solusi utama untuk membuat website dan memberikan domain
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Apa paket yang cocok untuk membuat bisnis online dan website perusahaan </span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Paket yang cocok untuk membuat website bisnis seperti toko online kalian bisa menggunakan Kedua paket andalan kami yaitu paket COMMERCIAL dan BUSINESS

                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Apa saja Domain yang tersedia </span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>
                                    Kami Meberikan Katagori domain yang lengkap terutama Top Level Domain (TLD) yaitu ada .COM, .NET, .ORG, dan lain lain nya.
                                    <br><br>
                                    jangan takut untuk tidak ada jenis domain yang kalian inginkan. di WanzHosting lebih dari 10 domain yang kami punya

                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Keuntungan Membuka toko online </span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>
                                    Meningkatkan kredibilitas usaha kecil <br>
                                    keuntungan memiliki website untuk bisnis anda yang pertama adalah meningkatkan kredibilitas usaha kecil. Jadi jika usaha anda masih kecil, tidak usah khawatir karena anda bisa meningkatkan kredibilitas nya melalui website. <br> <br>

                                    Menjangkau target market yang lebih luas dan pas <br>
                                    Selanjutnya adalah bagi anda yang memiliki perusahaan yang sudah cukup stabil, website akan membuat anda menjangkau target market dengan lebih luas.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Apakah sudah tersedia desain jika menggunakan WanzHosting</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>
                                    Keunggulan menggunakan kami kalian tidak usah repot untuk memikirkan bagaimana desain dan cara buat nya, kami memiliki Team Desainer UI/UX yang handal untuk membantu membuat desain dengan kemauan kalian
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Apakah bisa mengganti dan menambahkan atribut yang ada di website pelanggan</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>
                                    Bisa. jika kalian ingin menambahkan atribut diwebsite kalian, kalian bisa berkomunikasi langsung dengan Team Programmer.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Frequently Question End ***** -->


<!-- ***** Contact Us Start ***** -->
<section class="section" id="contact-us">
    <div class="container-fluid">
        <div class="row">
            <!-- ***** Contact Map Start ***** -->
            <div class="col-lg-6 col-md-6 col-sm-12">

                <img src="<?php echo base_url("images/customer-service.png"); ?>" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">

            </div>
            <!-- ***** Contact Map End ***** -->

            <!-- ***** Contact Form Start ***** -->

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="contact-form">
                    <form action="/contactus/save" id="contact" action="" method="post">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="nama" type="text" id="nama" placeholder="Full Name" required="" class="contact-field">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" placeholder="E-mail" required="" class="contact-field">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="komentar" rows="6" id="komentar" placeholder="Your Message" required="" class="contact-field"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Send It</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- ***** Contact Form End ***** -->
        </div>
    </div>
</section>
<!-- ***** Contact Us End ***** -->



<?= $this->endSection(); ?>