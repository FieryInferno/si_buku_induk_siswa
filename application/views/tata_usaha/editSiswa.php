<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>tata_usaha/siswa">Siswa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col"><div class="col-xl-12 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Edit Siswa</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <form action="<?= base_url('tata_usaha/siswa/edit/' . $id_user); ?>" method="post">
            <!-- <h6 class="heading-small text-muted mb-4">User information</h6> -->
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <h3>Data Siswa</h3>
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">No. Induk Siswa</label>
                    <input type="text" id="input-username" class="form-control" placeholder="No. Induk Siswa" name="no_induk" required value="<?= $no_induk; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama Siswa</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Nama Siswa" name="nama" required value="<?= $nama; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Alamat</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Alamat" name="alamat" required value="<?= $alamat; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tempat Lahir</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required value="<?= $tempat_lahir; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir</label>
                    <input type="date" id="input-email" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" required value="<?= $tanggal_lahir; ?>">
                  </div>
                </div>
                <div class="col-lg-6">
                  <h3>Data Orang Tua Siswa</h3>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Nama Orang Tua" name="nama_orang_tua" required value="<?= $nama_orang_tua; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tempat Lahir</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir_orang_tua" required value="<?= $tempat_lahir_orang_tua; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir</label>
                    <input type="date" id="input-email" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir_orang_tua" required value="<?= $tanggal_lahir_orang_tua; ?>">
                  </div>
                </div>
              </div>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Edit</button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Tambah</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Apakah anda yakin akan mengedit data ini?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button class="btn btn-primary" type="submit">Edit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>