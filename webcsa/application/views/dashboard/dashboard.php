<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Creative Student Association</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href=" images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url()?>assets/images/favicon-blue.png" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">
    <script src="<?php echo base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .team-box {
            max-height: 400px;
            min-height: 400px;
            position: relative;
            padding: 55px 30px 30px 30px;
            -webkit-box-shadow: 0 0 30px -5px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 30px -5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 40px;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
            margin-bottom: 30px;
            margin-left: 15px;
            margin-right: 15px;
            height: 300px;
        }
    </style>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>
    <!-- MainMenu-Area -->
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>assets/images/Logo CSA WHITE.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li class="active"><a href="#home_page">Beranda</a></li>
                    <li><a href="#about_page">Tentang</a></li>
                    <li><a href="#features_page">Program Kerja</a></li>
                    <li><a href="#gallery_page">Galeri</a></li>
                    <li><a href="#testimonial_page">Pengurus</a></li>
                    <li><a href="blog.html">Berita</a></li>
                    <li><a href="#contact_page">Kontak</a></li>
                </ul>
                <div class="right-button hidden-xs">
                    <a href="Signup.html">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->
    <!-- Home-Area -->
    <header class="home-area overlay" id="home_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 hidden-sm col-md-5">
                    <figure class="mobile-image wow fadeInUp" data-wow-delay="0.2s">
                        <img src="images/header-mobile.png" alt="">
                    </figure>
                </div>
                <div class="col-xs-12 col-md-7">
                    <div class="space-80 hidden-xs"></div>
                    <h1 class="wow fadeInUp" data-wow-delay="0.4s">Welcome to CSA</h1>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>Selamat datang di website Creative Student Association (CSA) STMIK Mardira Indonesia.</p>
                    </div>
                    <div class="space-20"></div>
                    <a href="<?php echo base_url('dashboard/daftar_sekarang')?>" class="bttn-white wow fadeInUp" data-wow-delay="0.8s"><i
                            class="lnr lnr-arrow-right"></i>Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Home-Area-End -->
    <!-- About-Area -->
    <section class="section-padding" id="about_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="page-title text-center">
                        <img src="images/Logo1.png" alt="Logo" style="max-width:70%;">
                        <div class="space-20"></div>
                        <h5 class="title">Tentang CSA</h5>
                        <div class="space-30"></div>
                        <h3 class="blue-color"> Creative Student Association (CSA) merupakan regenerasi dari Unit
                            Kegiatan Mahasiswa (UKM) yang sebelumnya pernah terbentuk yaitu bernama HMJ IF. CSA
                            diresmikan pada tanggal 15 Mei 2018.</h3>
                        <div class="space-20"></div>
                        <style>
                            .text_content {
                                text-indent: 60px;
                            }
                        </style>
                        <p align="justify" class="text_content">Awal mula CSA berdiri karena pada tahun 2016 dan 2017 di
                            kampus berbasis informatika ini
                            tidak aktif nya ke organisasian unit kegiatan mahasiswa yang khusus ke pemrograman, unit
                            kegiatan mahasiswa terdahulu yang berfokus ke pemrograman adalah HMJ IF. Namun karena tidak
                            adanya estapet penerus sehingga HMJ keorganisasiannya tidak lagi aktif.</p>
                        <p align="justify" class="text_content"> Lalu di akhir tahun 2017 muncul ide untuk mengaktifkan
                            kembali organisasi berfokus pada informatika dan
                            program yang di mulai dari : M. Fauzi Ramadhan, Diansyah, Febri Ridwansyah, M. Ilman Nur
                            hakim dan Yanti Mandasari lalu kami juga dapat dorongan dari bpk. Pimpinan STMIK Mardira
                            Indonesia yaitu bpk Dr. Marjito untuk mengaktifkan keorganisasian tersebut. </p>
                        <p align="justify" class="text_content"> Namun karena ada hal yang kurang dari organisasi yang
                            lama, lalu kami menambah format baru dalam
                            fokus keorganisasian yang mula nya hanya HMJ saja kami tambahkan creative pada isi
                            organisasi ini yang didalam nya bisa pembuatan video animasi, desain, dan game. </p>
                        <p align="justify" class="text_content"> Dengan adanya tambahan format, otomatis kami menambah
                            arti nama yang terkandung awal mula nama yang
                            muncul adalah : PMC ( Persatuan Mahasiswa Creative ), ada juga Mardira Creative, namun
                            saudara M. Fauzi Ramadhan memiliki ide yaitu CSA ( Creative Student Association ) yang
                            bermakna kumpulan mahasiswa kreatif. </p>
                        <p align="justify" class="text_content">Pada tanggal 15 Mei 2018 atas izin Allah SWT
                            akhirnya CSA diresmikan setelah meminta izin kepada BEM dan organisasi yang lainya seperti :
                            UDMI, WALET, KST, PMK. Dan diresmikan bersama Pimpinan, Ketua Prodi, dan Ketua
                            Kemahasiswaan. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-Area-End -->
    <!-- Progress-Area -->
    <section class="gray-bg" id="progress_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="page-title text-center">
                        <h5 class="title">Creative Student Association </h5>
                        <div class="space-10"></div>
                        <h3>Visi dan Misi</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="page-title section-padding">
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">Visi</h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p>Membangun pribadi yang inovatif, kreatif, dan produktif dalam bekarya. Sehingga individu
                                dapat berdiri sendiri dalam menjalankan usaha terutama dalam bidang teknologi informasi
                                dan digital ataupun bekerja dengan orang lain.</p>
                        </div>
                        <div class="space-50"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <figure class="mobile-image">
                        <img src="images/11.jpg" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Progress-Area-End -->
    <!-- Video-Area -->
    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="video-photo">
                        <img src="images/5.jpg" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-md-5 col-md-offset-1">
                    <div class="space-60 hidden visible-xs"></div>
                    <div class="page-title">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s"></h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">Misi</h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p>
                            <ol class="dark-color wow fadeInUp">
                                <li>Membuat karya multimedia baik animasi maupun non-animasi.</li>
                                <li>Menjalin kerjasama dengan sesama anggota dalam berkarya.</li>
                                <li>Memperkenalkan karya kita kepada orang lain.</li>
                                <li>Mampu menciptakan karya yang berbeda atau membuat suatu ide karya yang baru.
                                </li>
                                <li>Mampu mengembangkan suatu karya yang sudah ada menjadi inovasi baru.</li>
                                <li>Mampu beradaptasi di berbagai macam software yang berbeda dan bahasa pemrograman
                                    yang berbeda-beda.</li>
                                <li>Mampu berpikir kritis dalam melihat jaman yang maju dengan cepat akan
                                    perkembangan teknologi sehingga tidak ketinggalan apa yang harus kita ciptakan
                                    dalam bentuk karya baik pemrograman aplikasi ataupun multimedia.</li>
                                <li>Membuat karya pemrograman aplikasi yang bermanfaat.</li>
                            </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video-Area-End -->
    <!-- Feature-Area -->
    <section class="feature-area section-padding-top" id="features_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="page-title text-center">
                        <h5 class="title">Creative Student Association </h5>
                        <div class="space-10"></div>
                        <h3>Program Kerja Kami</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <h4>Forum Belajar</h4>
                        <p>Pemrograman dan Multimedia</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-paperclip"></i>
                        </div>
                        <h4>Project</h4>
                        <p>Membuat Sebuah Karya Di Bidang IT</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-cloud-download"></i>
                        </div>
                        <h4>Lomba</h4>
                        <p>Mengikuti Lomba</p>
                    </div>
                    <div class="space-60"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-4">
                    <figure class="mobile-image">
                        <img src="images/feature-image.png" alt="Feature Photo">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-clock"></i>
                        </div>
                        <h4>Mengadakan Event</h4>
                        <p>CSA Fest dan Membuat Lomba antar SMK</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-laptop-phone"></i>
                        </div>
                        <h4>Mengadakan Seminar</h4>
                        <p>Seminar tentang IT</p>
                    </div>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature-Area-End -->
    <!-- Testimonial-Area -->
    <section class="testimonial-area" id="testimonial_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">Creative Student Association</h5>
                        <h3 class="dark-color">Pendiri</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="team-slide">
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/Herwin.png" alt="">
                            </div>
                            <h4>Herwin Firdaus Putra Setiawan, MTCNA</h4>
                            <h6 class="position">Ketua</h6>
                            <p>Ketua bertanggung jawab untuk memimpin dan mengendalikan kegiatan para anggota dalam
                                melaksanakan tugasnya. Dan bertanggung jawab terhadap segala permasalahan dalam
                                organisasi.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/Syifa.png" alt="">
                            </div>
                            <h4>Syifa Nuurunnisa Wijaksana</h4>
                            <h6 class="position">Wakil Ketua</h6>
                            <p>Wakil ketua bertanggung jawab untuk melaksanakan tugas-tugas ketua apabila ketua
                                berhalangan. Dan membantu ketua dalam menyusun program kerja jangka pendek dan jangka
                                panjang, pelaksanaan dan pengorganisasian</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/nurul1.png" alt="">
                            </div>
                            <h4>Nurul Azizah</h4>
                            <h6 class="position">Sekretaris</h6>
                            <p>Sekretaris bertanggung jawab untuk menjalankan dan membantu pekerjaan ketua, pengarsipan,
                                mengatur jadwal, dan lain sebagainya. </p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/Dian.png" alt="">
                            </div>
                            <h4>Dian Agustin</h4>
                            <h6 class="position">Bendahara</h6>
                            <p>Bendahara bertanggung jawab untuk menyimpan uang, membuat pembukuan, serta mengelola
                                bukti transaksi.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/Ica.png" alt="">
                            </div>
                            <h4>Annisa Nur Hasanah</h4>
                            <h6 class="position">Wakil Bendahara</h6>
                            <p>Wakil bendahara bertanggung jawab untuk melaksanakan tugas-tugas bendahara apabila
                                berhalangan. Dan membantu bendahara dalam melaksanakan tugasnya.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/novan1.png" alt="">
                            </div>
                            <h4>Novan Tiano</h4>
                            <h6 class="position">Penelitian dan Pengembangan</h6>
                            <p>Penelitian dan pengembangan bertanggung jawab untuk menyiapkan dan membuat kurikulum
                                divisi.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/Pipit.png" alt="">
                            </div>
                            <h4>Dyah Pitaloka Permata Hadi</h4>
                            <h6 class="position">Hubungan Masyarakat</h6>
                            <p>Hubungan masyarakat bertanggung jawab untuk mengkomunikasikan segala bentuk informasi
                                tentang kegiatan organisasi.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/kang jef.png" alt="">
                            </div>
                            <h4>Jefri Maruli H, S.Kom</h4>
                            <h6 class="position">Mentor Divisi Pemrograman</h6>
                            <p>Memberikan bimbingan atau arahan tentang bahasa pemrograman kepada anggota divisi
                                pemrograman.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/" alt="">
                            </div>
                            <h4>Nandi Irpan Supandi</h4>
                            <h6 class="position">Mentor Divisi Pemrograman</h6>
                            <p>Memberikan bimbingan atau arahan tentang bahasa pemrograman kepada anggota divisi
                                pemrograman.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/" alt="">
                            </div>
                            <h4>Muhammad Daniel Parhan</h4>
                            <h6 class="position">Mentor Divisi Multimedia</h6>
                            <p>Memberikan bimbingan atau arahan tentang desain grafis kepada anggota divisi multimedia.
                            </p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/" alt="">
                            </div>
                            <h4>Sandi Indrawan</h4>
                            <h6 class="position">Mentor Divisi Multimedia</h6>
                            <p>Memberikan bimbingan atau arahan tentang desain grafis kepada anggota divisi multimedia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-area" id="testimonial_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">Creative Student Association</h5>
                        <h3 class="dark-color">Pengurus</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="team-slide">
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/Herwin.png" alt="">
                            </div>
                            <h4>Herwin Firdaus Putra Setiawan, MTCNA</h4>
                            <h6 class="position">Ketua</h6>
                            <p>Ketua bertanggung jawab untuk memimpin dan mengendalikan kegiatan para anggota dalam
                                melaksanakan tugasnya. Dan bertanggung jawab terhadap segala permasalahan dalam
                                organisasi.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/Syifa.png" alt="">
                            </div>
                            <h4>Syifa Nuurunnisa Wijaksana</h4>
                            <h6 class="position">Wakil Ketua</h6>
                            <p>Wakil ketua bertanggung jawab untuk melaksanakan tugas-tugas ketua apabila ketua
                                berhalangan. Dan membantu ketua dalam menyusun program kerja jangka pendek dan jangka
                                panjang, pelaksanaan dan pengorganisasian</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/nurul1.png" alt="">
                            </div>
                            <h4>Nurul Azizah</h4>
                            <h6 class="position">Sekretaris</h6>
                            <p>Sekretaris bertanggung jawab untuk menjalankan dan membantu pekerjaan ketua, pengarsipan,
                                mengatur jadwal, dan lain sebagainya. </p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/Dian.png" alt="">
                            </div>
                            <h4>Dian Agustin</h4>
                            <h6 class="position">Bendahara</h6>
                            <p>Bendahara bertanggung jawab untuk menyimpan uang, membuat pembukuan, serta mengelola
                                bukti transaksi.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/Ica.png" alt="">
                            </div>
                            <h4>Annisa Nur Hasanah</h4>
                            <h6 class="position">Wakil Bendahara</h6>
                            <p>Wakil bendahara bertanggung jawab untuk melaksanakan tugas-tugas bendahara apabila
                                berhalangan. Dan membantu bendahara dalam melaksanakan tugasnya.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/novan1.png" alt="">
                            </div>
                            <h4>Novan Tiano</h4>
                            <h6 class="position">Penelitian dan Pengembangan</h6>
                            <p>Penelitian dan pengembangan bertanggung jawab untuk menyiapkan dan membuat kurikulum
                                divisi.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/Pipit.png" alt="">
                            </div>
                            <h4>Dyah Pitaloka Permata Hadi</h4>
                            <h6 class="position">Hubungan Masyarakat</h6>
                            <p>Hubungan masyarakat bertanggung jawab untuk mengkomunikasikan segala bentuk informasi
                                tentang kegiatan organisasi.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/kang jef.png" alt="">
                            </div>
                            <h4>Jefri Maruli H, S.Kom</h4>
                            <h6 class="position">Mentor Divisi Pemrograman</h6>
                            <p>Memberikan bimbingan atau arahan tentang bahasa pemrograman kepada anggota divisi
                                pemrograman.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/" alt="">
                            </div>
                            <h4>Nandi Irpan Supandi</h4>
                            <h6 class="position">Mentor Divisi Pemrograman</h6>
                            <p>Memberikan bimbingan atau arahan tentang bahasa pemrograman kepada anggota divisi
                                pemrograman.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/" alt="">
                            </div>
                            <h4>Muhammad Daniel Parhan</h4>
                            <h6 class="position">Mentor Divisi Multimedia</h6>
                            <p>Memberikan bimbingan atau arahan tentang desain grafis kepada anggota divisi multimedia.
                            </p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="images/" alt="">
                            </div>
                            <h4>Sandi Indrawan</h4>
                            <h6 class="position">Mentor Divisi Multimedia</h6>
                            <p>Memberikan bimbingan atau arahan tentang desain grafis kepada anggota divisi multimedia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial-Area-End -->
    <!-- Gallery-Area -->
    <section class="gallery-area section-padding" id="gallery_page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 gallery-slider">
                    <div class="gallery-slide">
                        <div class="item"><img src="images/gallery-1.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-2.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-3.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-4.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-1.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-2.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-3.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-1.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-2.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-3.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-4.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-1.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-2.jpg" alt=""></div>
                        <div class="item"><img src="images/gallery-3.jpg" alt=""></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-lg-3">
                    <div class="page-title">
                        <h5 class="white-color title wow fadeInUp" data-wow-delay="0.2s">Galeri</h5>
                        <div class="space-10"></div>
                        <h3 class="white-color wow fadeInUp" data-wow-delay="0.4s">Kegiatan</h3>
                    </div>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut
                            labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                    </div>
                    <div class="space-50"></div>
                    <a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery-Area-End -->
    <!-- How-To-Use -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="page-title">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">Creative Student Association</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">Divisi</h3>
                    </div>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>UKM Creative Student Association dikelompokkan dalam dua divisi, yaitu divisi pemrograman dan
                            divisi multimedia.</p>
                        <img src="images/LOGO PEMRO FIX.png" style="max-width: 100px">
                        <img src="images/logo mm.png" style="max-width: 90px">
                    </div>
                    <div class="space-50"></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                    <div class="space-60 hidden visible-xs"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <img src="images/pemrograman.png">
                        </div>
                        <h4>Pemrograman</h4>
                        <p>Divisi pemrograman yang berperan dalam mempelajari, menulis, menguji, memperbaiki (debug),
                            dan memelihara kode yang membangun sebuah program komputer.</p>
                    </div>
                    <div class="space-50"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <img src="images/Multimedia.png">
                        </div>
                        <h4>Multimedia</h4>
                        <p>Divisi multimedia yang berperan dalam Design grafis yang melahirkan suatu bentuk komunikasi
                            visual yang menggunakan teks dan atau gambar design collection untuk menyampaikan informasi
                            atau pesan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Price-Area-End -->
    <!--Questions-Area -->
    <section id="questions_page" class="questions-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">FAQ</h5>
                        <h3 class="dark-color">Frequently Asked Questions</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="toggole-boxs">
                        <h3>Apa itu Creative Student Association ?</h3>
                        <div>
                            <p>CSA (Creative Student Association) yaitu suatu organisasi berbasis IT yang bertempat di
                                STMIK Mardira Indonesia, yang dimana organisasi ini menyangkut semua hal tentang IT
                                seperti bahasa pemrograman, multimedia.</p>
                        </div>
                        <h3>Kegiatan apa saja yang ada di CSA ? </h3>
                        <div>
                            <p>Untuk saat ini kegiatan di CSA yaitu study group antar divisi dimana study group itu
                                adalah kegiatan pembelajaran sebelum kita ingin membuat project dan kegiatan CSA
                                selanjutnya adalah membuat project dimana kita diharus kan membuat sebuah project dari
                                hasil study group yang telah kita pelajari sebelumnya.</p>
                        </div>
                        <h3>Divisi apa saja yang ada di CSA ?</h3>
                        <div>
                            <p>CSA memiliki dua divisi yaitu divisi pemrograman dan divisi multimedia.</p>
                        </div>
                        <h3>Apa saja kegiatan yang dilakukan divisi pemrograman ? </h3>
                        <div>
                            <p>Mempelajari bahasa-bahasa pemograman seperti php,html,pyton,dll.lalu membuat suatu karya berupa suatu program aplikasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="space-20 hidden visible-xs"></div>
                    <div class="toggole-boxs">
                        <h3>Apa saja kegiatan yang dilakukan divisi multimedia ? </h3>
                        <div>
                            <p>Kegiatan yang sering dilakukan divisi multimedia yaitu membuat video animasi, game dan
                                buku komik.</p>
                        </div>
                        <h3>Apakah di CSA bisa mengikuti 2 (dua) divisi ? </h3>
                        <div>
                            <p>Tidak bisa, bilamana hanya untuk pengetahuan atau belajar diperbolehkan.</p>
                        </div>
                        <h3>Mengapa hanya bisa mengikuti 1 (satu) divisi ? </h3>
                        <div>
                            <p>Minimal anggota memiliki satu skill unggulan yang akan mereka kuasai. Bila dalam
                                mengerjakan project dengan
                                mengerjakan bidang lainnya itu akan mengganggu fokus individu, itu alasan kuat untuk
                                hanya memilih satu divisi.</p>
                        </div>
                        <h3>Bagaimana cara daftar untuk masuk ke CSA ? </h3>
                        <div>
                            <p>Klik button Daftar Sekarang yang berada di beranda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Questions-Area-End -->
    <!-- Subscribe-Form -->
    <div class="subscribe-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="subscribe-form text-center">
                        <h3 class="blue-color">Subscribe for More Information</h3>
                        <div class="space-20"></div>
                        <form id="mc-form">
                            <input type="email" class="control" placeholder="Enter your email" required="required"
                                id="mc-email">
                            <button class="bttn-white active" type="submit"><span class="lnr lnr-location"></span>
                                Subscribe</button>
                            <label class="mt10" for="mc-email"></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe-Form-Area -->
    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Kontak</h5>
                            <h3 class="dark-color">Temukan Kami Dengan Detail Di Bawah</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                            <p>Lokasi <br /> STMIK Mardira Indonesia</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p>WhatsApp <br /> +62 857-0339-5603</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p>E-mail <br /> csaworks2017@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <span>Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Creative Student Association | This template is made with <i
                                class="lnr lnr-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a></span>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Tentang</a></li>
                                <li><a href="#">Program Kerja</a></li>
                                <li><a href="#">Galeri</a></li>
                                <li><a href="#">Pengurus</a></li>
                                <li><a href="#">Berita</a></li>
                                <li><a href="#">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom-End -->
    </footer>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/jquery-ui.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
</body>

</html>