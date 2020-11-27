<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Mata Kuliah
    </div>
    
    <?php echo anchor('administrator/matakuliah/tambah_matakuliah','<button class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus fa-sm"></i> Tambah MataKuliah</button>')?>
    <?php echo $this->session->flashdata('pesan');?>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>NO</th>
            <th>KODE MATAKULIAH</th>
            <th>NAMA MATAKULIAH</th>
            <th>PROGRAM STUDI</th>
            <th colspan="3" class="text-center">AKSI</th>
        </tr>
        <?php
        $no=1;
        foreach($matakuliah as $mk): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $mk->kode_matakuliah?></td>
            <td><?php echo $mk->nama_matakuliah?></td>
            <td><?php echo $mk->nama_prodi?></td>
            <td width="20px"><?php echo anchor('administrator/matakuliah/update/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
            <td width="20px"><?php echo anchor('administrator/matakuliah/delete/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td> 
            <td width="20px"><?php echo anchor('administrator/matakuliah/detail/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-success"><i class="fa fa-eye"></i></div>')?></td> 
        </tr>
        <?php endforeach; ?>


    </table>
</div>