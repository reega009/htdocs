<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-eye mx-2"></i><b>DETAIL MAHASISWA</b>
    </div>
    <table class="table table-bordered table-hover table-striped">
        
        <?php foreach($detail as $dt) : ?>
        

        <img src="<?php echo base_url('assets/img/').$dt->photo?>" class="mb-4" style="width:20%">   
        <tr>
            <td>NIM</td>
            <td><?php echo $dt->nim; ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><?php echo $dt->nama_lengkap; ?></td>
        </tr>
        <tr>
            <td>Nama Program Studi</td>
            <td><?php echo $dt->nama_prodi; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $dt->alamat; ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td><?php echo $dt->telepon; ?></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td><?php echo $dt->tempat_lahir; ?>, <?php echo $dt->tanggal_lahir; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $dt->email; ?></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td><?php echo $dt->jenis_kelamin; ?></td>
        </tr>
        

        <?php endforeach; ?>

    </table>

    <?php echo anchor('administrator/mahasiswa','<div class="btn btn-danger mb-3">KEMBALI</div>')?>
</div>