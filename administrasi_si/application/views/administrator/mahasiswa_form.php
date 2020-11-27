<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-plus mx-2"></i><b>FORM MAHASISWA</b>
    </div>
    <form action="<?php echo base_url('administrator/mahasiswa/input_data_aksi')?>" method="post">
    <div class="form-group">
        <label>NIM</label>
        <input type="text" class="form-control" name="nim">
        <?php echo form_error('nim','<div class="text-danger sm ml-3"></div>')?>
    </div>
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap">
        <?php echo form_error('nama_lengkap','<div class="text-danger sm ml-3"></div>')?>
    </div>
    <div class="form-group">
        <label>Nama Program Studi</label>
        <select name="nama_prodi" class="form-control">
                <option value="">--PILIH PRODI--</option>
            <?php foreach($prodi as $prd) : ?>
                <option value="<?php echo $prd->nama_prodi ?>"><?php echo $prd->nama_prodi ?></option>
            <?php endforeach; ?>
        </select>
        <?php echo form_error('nim','<div class="text-danger sm ml-3"></div>')?>
    </div>
    </form>
</div>