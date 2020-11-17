<div class="alert alert-success" role="alert">
  <h4 class="alert-heading"><i class="far fa-list-alt mx-2"></i><b>DASHBOARD</b></h4> <!-- Mx untuk margin icon -->
  <hr>
  <p><strong>SELAMAT DATANG!</strong> ,Di Sistem Administrasi Kampus STMIK Mardira Indonesia .</p>
  <br>
  <br>
  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-stream mx-1"></i> <strong>MENU ADMINISTRASI</strong>
  </button>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SUB MENU ADMINISTRASI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3 text-info text-center"><!-- 12 dibagi 4 = 3 , text-info = warna biru muda -->
            <a href="<?php echo base_url() ?>"><p class="nav-link text-info">MAHASISWA</p></a>
            <i class="fas fa-4x fa-user-graduate"></i>
          </div>
          <div class="col-md-3 text-info text-center"><!-- 12 dibagi 4 = 3 , text-info = warna biru muda -->
            <a href="<?php echo base_url() ?>"><p class="nav-link text-info">TAHUN AKADEMIK</p></a>
            <i class="fas fa-4x fa-calendar-alt"></i>
          </div>
          <div class="col-md-3 text-info text-center"><!-- 12 dibagi 4 = 3 , text-info = warna biru muda -->
            <a href="<?php echo base_url() ?>"><p class="nav-link text-info">KRS</p></a>
            <i class="fas fa-4x fa-edit"></i>
          </div>
          <div class="col-md-3 text-info text-center"><!-- 12 dibagi 4 = 3 , text-info = warna biru muda -->
            <a href="<?php echo base_url() ?>"><p class="nav-link text-info">KHS</p></a>
            <i class="fas fa-4x fa-file-alt"></i>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-md-3 text-info text-center"><!-- 12 dibagi 4 = 3 , text-info = warna biru muda -->
            <a href="<?php echo base_url() ?>"><p class="nav-link text-info">INPUT NILAI</p></a>
            <i class="fas fa-4x fa-share-square"></i>
          </div>
          <div class="col-md-3 text-info text-center"><!-- 12 dibagi 4 = 3 , text-info = warna biru muda -->
            <a href="<?php echo base_url() ?>"><p class="nav-link text-info small">CETAK TRANSKRIP</p></a>
            <i class="fas fa-4x fa-print"></i>
          </div>
          <div class="col-md-3 text-info text-center"><!-- 12 dibagi 4 = 3 , text-info = warna biru muda -->
            <a href="<?php echo base_url() ?>"><p class="nav-link text-info">KATEGORI</p></a>
            <i class="fas fa-4x fa-list-ul"></i>
          </div>
          <div class="col-md-3 text-info text-center"><!-- 12 dibagi 4 = 3 , text-info = warna biru muda -->
            <a href="<?php echo base_url() ?>"><p class="nav-link text-info">INFO KAMPUS</p></a>
            <i class="fas fa-4x fa-bullhorn"></i>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-md-3 text-info text-center"><!-- 12 dibagi 4 = 3 , text-info = warna biru muda -->
            <a href="<?php echo base_url() ?>"><p class="nav-link text-info">IDENTITAS</p></a>
            <i class="fas fa-4x fa-id-card-alt"></i>
          </div>
          <div class="col-md-3 text-info text-center"><!-- 12 dibagi 4 = 3 , text-info = warna biru muda -->
            <a href="<?php echo base_url() ?>"><p class="nav-link text-info small">TENTANG KAMPUS</p></a>
            <i class="fas fa-4x fa-info-circle"></i>
          </div>
          <div class="col-md-3 text-info text-center"><!-- 12 dibagi 4 = 3 , text-info = warna biru muda -->
            <a href="<?php echo base_url() ?>"><p class="nav-link text-info">FASILITAS</p></a>
            <i class="fas fa-4x fa-laptop"></i>
          </div>
          <div class="col-md-3 text-info text-center"><!-- 12 dibagi 4 = 3 , text-info = warna biru muda -->
            <a href="<?php echo base_url() ?>"><p class="nav-link text-info">GALERI</p></a>
            <i class="fas fa-4x fa-images"></i>
          </div>
        </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
