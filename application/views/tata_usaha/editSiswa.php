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
    <div class="col"><div class="col-xl-8 order-xl-1">
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
          <form action="<?= base_url('tata_usaha/siswa/edit/' . $id_siswa); ?>" method="post">
            <!-- <h6 class="heading-small text-muted mb-4">User information</h6> -->
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">No. Induk Siswa</label>
                    <input type="text" id="input-username" class="form-control" placeholder="No. Induk Siswa" name="no_induk" required value="<?= $no_induk; ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama Siswa</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Nama Siswa" name="nama" required value="<?= $nama; ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Alamat</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Alamat" name="alamat" required value="<?= $alamat; ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tempat Lahir</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required value="<?= $tempat_lahir; ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir</label>
                    <input type="date" id="input-email" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" required value="<?= $tanggal_lahir; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Status</label>
                    <select name="status" id="status" name="status" class="form-control">
                      <option value="aktif" <?= $status == 'aktif' ? 'selected' : '' ; ?>>Aktif</option>
                      <option value="alumni" <?= $status == 'alumni' ? 'selected' : '' ; ?>>Alumni</option>
                      <option value="pindah" <?= $status == 'pindah' ? 'selected' : '' ; ?>>Pindah</option>
                    </select>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>