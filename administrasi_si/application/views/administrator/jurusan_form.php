<div class="container-fluid">

    <form method="post" action="<?php echo base_url('administrator/jurusan/input_aksi');?>"> 
        <div class="form-group">
            <label>Kode Jurusan</label>
            <input type="text" name="kode_jurusan" placeholder="Masukan Kode Jurusan" class="form-control" >
            <?php echo form_error('kode_jurusan','<div class="text-danger small >" ml-3></div>')?>
        </div>
        <div class="form-group">
            <label>Nama Jurusan</label>
            <input type="text" name="nama_jurusan" placeholder="Masukan Nama Jurusan" class="form-control">
            <?php echo form_error('nama_jurusan','<div class="text-danger small" ml-3></div>')?>
        </div>
        <div class="form-group">
            <label>Jenjang</label>
            <select name="kode_jenjang" class="form-control">
                <option value="">--PILIH JENJANG--</option>
                <?php foreach($jenjang as $jng) :?>
                <option value="<?php echo $jng->kode_jenjang ?>"><?php echo $jng->kode_jenjang ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>

</div>