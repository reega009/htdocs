<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university mx-2"></i><b>PRODI</b>
    </div>

    <!-- TAMBAH PRODI -->
    <?php echo anchor('administrator/prodi/tambah_prodi','<button class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus fa-sm mr-2"></i>Tambah Prodi</button>') ?>

    <!-- Flash Data -->
    <?php echo $this->session->flashdata('pesan');?>

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>NO</th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
            <th>Nama Jurusan</th>
            <th colspan="2" class="text-center">AKSI</th>
        </tr>

        <?php 
        $no=1;
        foreach($prodi as $prd) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $prd->kode_prodi ?></td>
                <td><?php echo $prd->nama_prodi ?></td>
                <td><?php echo $prd->nama_jurusan ?></td>
                <td width="20px"><?php echo anchor('administrator/prodi/update/'.$prd->id_prodi,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
                    <td width="20px"><?php echo anchor('administrator/prodi/hapus_data/'.$prd->id_prodi,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td> 
            </tr>


        <?php endforeach ?>


    </table>
</div>