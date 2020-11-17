<div class="container-fluid">

    <form method="post" action="<?php echo base_url('administrator/prodi/tambah_prodi_aksi');?>">
        <div class="form-group">
            <label>Kode Prodi</label>
            <input type="text" name="kode_prodi" placeholder="Masukan Kode Prodi" class="form-control">
            <?php echo form_error('kode_prodi','<div class="text-danger small" ml-3></div>')?>
        </div>
        <div class="form-group">
            <label>Nama Prodi</label>
            <input type="text" name="nama_prodi" placeholder="Masukan Nama Prodi" class="form-control">
            <?php echo form_error('nama_prodi','<div class="text-danger small" ml-3></div>')?>
        </div>
        <div class="form-group">
            <label>Nama Jurusan</label>
            <select name="nama_jurusan" class="form-control">
                <option value="">--PILIH JURUSAN--</option>
                <?php foreach($jurusan as $jrs): ?>
                <option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <button class="btn btn-primary">SIMPAN</button>
    </form>

</div>