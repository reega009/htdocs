<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-graduation-cap mx-2"></i><b>MAHASISWA</b>
    </div>
    <?php echo anchor('administrator/mahasiswa/input_data','<button class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus fa-sm mr-2"></i>Tambah Data</button>');?>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA LENGKAP</th>
            <th>NAMA PROGRAM STUDI</th>
            <TH colspan="3" class="text-center">AKSI</TH>
        </tr>

        <?php
        $no=1;
        foreach($mahasiswa as $mhs) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mhs->nim ?></td>
                <td><?php echo $mhs->nama_lengkap ?></td>
                <td><?php echo $mhs->nama_prodi ?></td>
                <td width="20px"><?php echo anchor('administrator/mahasiswa/update/'.$mhs->nim,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
                <td width="20px"><?php echo anchor('administrator/mahasiswa/delete/'.$mhs->nim,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td> 
                <td width="20px"><?php echo anchor('administrator/mahasiswa/detail/'.$mhs->nim,'<div class="btn btn-sm btn-success"><i class="fa fa-eye"></i></div>')?></td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>