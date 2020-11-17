


<div class="container-fluid">
    <form action="<?php echo base_url('administrator/matakuliah/tambah_matakuliah_aksi')?>" method="post">
        <div class="form-group">
            <label for="">Kode Matakuliah</label>
            <input type="text" name="kode_matakuliah" class="form-control">
            <?php echo form_error('kode_matakuliah','<div class="text-danger sm ml-3"></div>')?>
        </div>
        <div class="form-group">
            <label for="">Nama Matakuliah</label>
            <input type="text" name="nama_matakuliah" class="form-control">
            <?php echo form_error('nama_matakuliah','<div class="text-danger sm ml-3"></div>')?>
        </div>
        <div class="form-group">
            <label for="">SKS</label>
            <select name="sks" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5 </option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Semester</label>
            <select name="sks" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5 </option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Nama Prodi</label>
            <select name="nama_prodi" class="form-control">
                <option value="">--PILIH PRODI--</option>
                <?php foreach($prodi as $prd): ?>
                    <option value="<?php echo $prd->nama_prodi?>"><?php echo $prd->nama_prodi?></option>
                <?php endforeach ;?>
            </select>
            <?php echo form_error('nama_prodi','<div class="text-danger sm ml-3"></div>')?>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
    </form>

</div>