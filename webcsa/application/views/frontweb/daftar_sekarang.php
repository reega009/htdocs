<!DOCTYPE html>
<html>
<title> Pendaftaran </title>

<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/daftar.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/normalize.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">
    <script src="<?php echo base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url()?>assets/images/favicon-blue.png" />
    <style>
        .mainmenu-area.affix {
            width: max-content;
            width: 100%;
        }

        ul.nav.navbar-nav.mainmenu {
            margin-top: 15px;
            margin-right: 50px
        }

        .bttn-default,
        .bttn-submit {
            padding: 12px 30px;
            background-color: #ffffff;
            display: inline-block;
            color: #ffffff;
            text-transform: uppercase;
            border-radius: 50px;
            letter-spacing: 1.5px;
            font-weight: 700;
            font-size: 14px;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
            border: none;
        }

        .bttn-default,
        .bttn-reset {
            padding: 12px 30px;
            background-color: #ffffff;
            display: inline-block;
            color: #ffffff;
            text-transform: uppercase;
            border-radius: 50px;
            letter-spacing: 1.5px;
            font-weight: 700;
            font-size: 14px;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
            border: none;
        }
    </style>
</head>

<body>
    
    <nav class="mainmenu-area bg-warna01" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?php echo base_url()?>assets/images/Logo CSA WHITE.png" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">        
                <div class="right-button hidden-xs">
                    <a href="Signup.html">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    <form method="post" action="<?php echo base_url('Pendaftaran_csa/input_aksi');?>" >
        <div class="container">
            <h2> Formulir Pendaftaran </h2>
            <div class="form-group">
                <label>NIM:</label>
                <input type="text" name="nim" class="form-control" placeholder="Masukan NIM" />
                <?php echo form_error('nim','<div class="text-danger small" ml-3></div>')?>
            </div>
            <div class="form-group">
                <label>Nama Lengkap:</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama" />
                <?php echo form_error('nama_lengkap','<div class="text-danger small" ml-3></div>')?>
            </div>
            <div class="form-group">
                <label>Tempat, Tanggal Lahir:</label>
                <input type="date" name="tempat_tanggal_lahir" class="form-control" placeholder="Masukan Tempat, Tanggal Lahir" />
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                    <option value=""> Pilih Jenis Kelamin </option>
                    <option value=""> Laki-Laki </option>
                    <option value=""> Perempuan </option>
                </select>
            </div>
            <div class="form-group">
                <label for="agama">Agama:</label>
                <select id="agama" name="agama" class="form-control">
                    <option value=""> Pilih Agama </option>
                    <option value=""> Islam </option>
                    <option value=""> Kristen </option>
                    <option value=""> Katolik </option>
                    <option value=""> Hindu </option>
                    <option value=""> Budha </option>
                </select>
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" />
            </div>
            <div class="form-group">
                <label>Hobby:</label>
                <input type="text" name="hobby" class="form-control" placeholder="Masukan Hobby" />
            </div>
            <div class="form-group">
                <label for="program_studi">Program Studi:</label>
                <select id="program_studi" name="program_studi" class="form-control">
                    <option value=""> Pilih Program Studi </option>
                    <option value="program_studi"> Teknik Informatika-S1 </option>
                    <option value="program_studi"> Rekayasa Perangkat Lunak-S1 </option>
                    <option value="program_studi"> Manajemen Informatika-D3 </option>
                    <option value="program_studi"> Komputerisasi Akuntansi </option>
                </select>
                <?php echo form_error('program_studi','<div class="text-danger small" ml-3></div>')?>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" class="form-control" placeholder="Masukan Email" />
            </div>
            <div class="form-group">
                <label>No HP:</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" />
            </div>
            <div class="form-group">
                <label for="pengalaman"> Pengalaman Organisasi </label>
                <select id="pengalaman" name="pengalaman_organisasi" class="form-control">
                    <option value="">Apakah Sebelumnya Memiliki Pengalaman Organisasi? </option>
                    <option value="1"> Ya </option>
                    <option value="2"> Tidak </option>
                </select>
            </div>
            <div class="form-group" id="organisasi">
                <label>Pengalaman Organisasi:</label>
                <input type="text" name="quis_1" class="form-control"
                    placeholder="Masukan Pengalaman Organisasi" />
            </div>
            <div class="form-group">
                <label>Apa Yang Kamu Ketahui Tentang CSA?</label>
                <input type="text" name="quis_2" class="form-control" placeholder="Masukan Keterangan" />
            </div>
            <div class="form-group">
                <label>Alasan Mendaftar Menjadi Anggota CSA:</label>
                <input type="text" name="quis_3" class="form-control" placeholder="Masukan Alasan" />
            </div>
            <div class="form-group">
                <label for="divisi"> Divisi Yang Akan Diambil? </label>
                <select id="divisi" name="quis_4" class="form-control">
                    <option value=""> Pilih Divisi </option>
                    <option value=""> Pemrograman </option>
                    <option value=""> Multimedia </option>
                </select>
            </div>
            <div class="form-group">
                <label> Output/Hasil Yang Ingin Dicapai:</label>
                <input type="text" name="quis_5" class="form-control"
                    placeholder="Masukan Output/Hasil Yang Ingin Dicapai" />
            </div>
            <button type="submit" name="daftar" class="bttn-submit">Daftar</button>
            <button reset="reset" name="reset" class="bttn-reset">Reset</button>
    </form>
    </div>
</body>
<script src="<?php echo base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/jquery-ui.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url()?>assets/js/contact-form.js"></script>
<script src="<?php echo base_url()?>assets/js/ajaxchimp.js"></script>
<script src="<?php echo base_url()?>assets/js/scrollUp.min.js"></script>
<script src="<?php echo base_url()?>assets/js/magnific-popup.min.js"></script>
<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
<!--Main-active-JS-->
<script src="<?php echo base_url()?>assets/js/main.js"></script>
<script>
    $(document).ready(function () {
        hideDiv();
        $("select#pengalaman").change(function () {
            // hide all optional elements

            if (this.value == '1') {
                $("#organisasi").show();
            }
            else {
                $("#organisasi").hide();
            }
        });
        function hideDiv() {
            $("#organisasi").hide();
        }
    });
</script>

</html>