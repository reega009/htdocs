<div class="container fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university mx-2"></i><b>JURUSAN</b>
    </div>

    <!-- Tambah Jurusan -->
    <?php echo anchor('administrator/jurusan/input','<button class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus fa-sm"></i>  Tambah Jurusan</button>') ?>
    <!--mb = margin bottom , btn-sm ( button small)  -->
    
    <!-- Flash Data -->
    <?php echo $this->session->flashdata('pesan');?>
    

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>KODE JURUSAN</th>
            <th>NAMA JURUSAN</th>
            <th>JENJANG</th>
            <th colspan="2" class="text-center">AKSI</th>
            
        </tr>

        <?php
            $no = 1;
            foreach ($jurusan as $jrs) : ?>

                <tr>
                    <td width="20px"><?php echo $no++ ?></td>
                    <td><?php echo $jrs->kode_jurusan ?></td>
                    <td><?php echo $jrs->nama_jurusan ?></td>
                    <td><?php echo $jrs->kode_jenjang ?></td>
                    <td width="20px"><?php echo anchor('administrator/jurusan/update/'.$jrs->id_jurusan,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
                    <td width="20px"><?php echo anchor('administrator/jurusan/delete/'.$jrs->id_jurusan,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>             
                </tr>

        <?php endforeach; ?>
    </table>
</div>