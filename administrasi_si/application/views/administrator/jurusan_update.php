<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university mx-2"></i><b>EDIT JURUSAN</b>
    </div>
    <?php foreach($jurusan as $jrs) : ?>
        <form method="POST" action="<?php echo base_url('administrator/jurusan/update_aksi')?>">

        <div class="form-group">
            <label>Kode Jurusan</label>
            <input type="hidden" name="id_jurusan" value="<?php echo $jrs->id_jurusan?>">
            <input type="text" name="kode_jurusan" class="form-control" value="<?php echo $jrs->kode_jurusan?>">
        </div>
        <div class="form-group">
            <label>Nama Jurusan</label>
            <input type="text" name="nama_jurusan" class="form-control" value="<?php echo $jrs->nama_jurusan?>">
        </div>
        <div class="form-group">
            <label>Jenjang</label>
            <select name="kode_jenjang" class="form-control">
                <?php foreach($jenjang as $jng) :?>
                <option value="<?php echo $jng->kode_jenjang ?>"><?php echo $jng->kode_jenjang ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    <?php endforeach; ?>
    
</div>