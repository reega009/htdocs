<div class="container-fluid">  
    <div class="alert alert-success" role="alert">
        <i class="fas fa-eye mx-2"></i><b>DETAIL MATAKULIAH</b>
    </div>
    <table class="table table-hover table-bordered table-striped">

        <?php foreach($detail as $dt) : ?>

        <tr>
            <th>Matakuliah</th>
            <td><?php echo $dt->kode_matakuliah; ?></td>
        </tr>
        <tr>
            <th>Nama Matakuliah</th>
            <td><?php echo $dt->nama_matakuliah; ?></td>
        </tr>
        <tr>
            <th>Jumlah SKS</th>
            <td><?php echo $dt->sks; ?></td>
        </tr>
        <tr>
            <th>Semester</th>
            <td><?php echo $dt->semester; ?></td>
        </tr>
        <tr>
            <th>Nama Program Studi</th>
            <td><?php echo $dt->nama_prodi; ?></td>
        </tr>

        <?php endforeach ; ?>
    </table>

    <?php echo anchor('administrator/matakuliah','<button class="btn btn-danger btn-sm">KEMBALI</button>');?>
</div>