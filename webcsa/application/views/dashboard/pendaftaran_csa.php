<div class="container fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university mx-2"></i><b>DATA PENDAFTARAN CSA</b>
    </div>
    <?php echo $this->session->flashdata('pesan'); ?>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>PRODI</th>
            <th colspan="2" class="text-center">AKSI</th>
            
        </tr>

        <?php
            $no = 1;
            foreach($pendaftaran_csa as $pdfcsa) :
            ?>
                <tr>
                    <td width="20px"><?php echo $no++ ?></td>
                    <td><?php echo $pdfcsa->nim ?></td>
                    <td><?php echo $pdfcsa->nama_lengkap ?></td>
                    <td><?php echo $pdfcsa->program_studi ?></td>
                    <td width="20px"><?php echo anchor('dashboard/detail/'.$pdfcsa->nim,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
                    <td width="20px"><?php echo anchor('dashboard/hapus_data/'.$pdfcsa->nim,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>             
                </tr>

        <?php endforeach; ?>
    </table>
</div>