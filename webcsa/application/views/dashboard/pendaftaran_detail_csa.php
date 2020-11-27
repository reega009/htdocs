<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university mx-2"></i><b>DETAIL DATA PENDAFTARAN CSA</b>
    </div>
    <table class="ml-3 ">
        <tr>
            <td>NAMA LENGKAP</td>
            <td> : </td>
            <td><?php echo $pdfcsa->nama_lengkap ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td> : </td>
            <td><?php echo $pdfcsa->nim ?></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td> : </td>
            <td><?php echo $pdfcsa->program_studi ?></td>
        </tr>
        <tr>
            <td>Tempat Tanggal Lahir</td>
            <td> : </td>
            <td><?php echo $pdfcsa->tempat_tanggal_lahir ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td><?php echo $pdfcsa->jenis_kelamin ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td><?php echo $pdfcsa->alamat ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> : </td>
            <td><?php echo $pdfcsa->email ?></td>
        </tr>
        <tr>
            <td>No Handphone</td>
            <td> : </td>
            <td><?php echo $pdfcsa->no_hp ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td> : </td>
            <td><?php echo $pdfcsa->agama ?></td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td> : </td>
            <td><?php echo $pdfcsa->hobby ?></td>
        </tr>
        <tr>
            <td>Pengalaman Organisasi</td>
            <td> : </td>
            <td><?php echo $pdfcsa->quis_1 ?></td>
        </tr>
        <tr>
            <td>Apa Yang Kamu Ketahui Tentang CSA</td>
            <td> : </td>
            <td><?php echo $pdfcsa->quis_2 ?></td>
        </tr>
        <tr>
            <td>Alasan Mendaftar Menjadi Anggota CSA</td>
            <td> : </td>
            <td><?php echo $pdfcsa->quis_3 ?></td>
        </tr>
        <tr>
            <td>Divisi Yang Akan Diambil</td>
            <td> : </td>
            <td><?php echo $pdfcsa->quis_4 ?></td>
        </tr>
        <tr>
            <td>Output/Hasil Yang Ingin Dicapai</td>
            <td> : </td>
            <td><?php echo $pdfcsa->quis_5 ?></td>
        </tr>
        <tr>
            <td>Keahlian yang dimiliki di bidang IT?</td>
            <td> : </td>
            <td><?php echo $pdfcsa->quis_6 ?></td>
        </tr>
        
    </table>
    <?php echo anchor('dashboard/daftar_sekarang','<button  class="btn btn-danger btn-sm mt-3">KEMBALI</button>')?>
    

</div>