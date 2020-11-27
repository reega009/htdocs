<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-edit mx-2"></i><b>EDIT MATAKULIAH</b>
    </div> 
    <?php foreach($matakuliah as $mk) : ?>

    <form action="<?php echo base_url('administrator/matakuliah/update_aksi')?>" method="post">
        <div class="form-group">
            <label>Nama Matakuliah :</label>
            <input type="hidden" name="kode_matakuliah" class="form-control" value="<?php echo $mk->kode_matakuliah ?>">
            <input type="text" name="nama_matakuliah" class="form-control" value="<?php echo $mk->nama_matakuliah ?>">
        </div>
        <div class="form-group">
            <label>Jumlah SKS :</label>
            <select name="sks" class="form-control">
                <option value="<?php echo $mk->sks ?>"><?php echo $mk->sks ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group">
            <label>Semester :</label>
            <select name="semester" class="form-control">
                <option value="<?php echo $mk->semester ?>"><?php echo $mk->semester ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>
        <div class="form-group">
            <label>Nama Program Studi :</label>
            <select name="nama_prodi" class="form-control">
                <option value="<?php echo $mk->nama_prodi ?>"><?php echo $mk->nama_prodi ?></option>
                <?php foreach($prodi as $prd) : ?>
                    <option value="<?php echo $prd->nama_prodi?>"><?php echo $prd->nama_prodi?></option>
                <?php endforeach ; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    </form>

    <?php endforeach ; ?>
</div>