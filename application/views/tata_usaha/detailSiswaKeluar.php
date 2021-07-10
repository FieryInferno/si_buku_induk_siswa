<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>tata_usaha/siswa_keluar">Siswa Keluar</a></li>
              <li class="breadcrumb-item active" aria-current="page">detail</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-8 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Detail Siswa</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form>
            <h6 class="heading-small text-muted mb-4">Informasi Siswa</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">No. Induk</label>
                    <input type="text" id="input-username" class="form-control" value="<?= $no_induk; ?>" readonly>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama</label>
                    <input type="email" id="input-email" class="form-control" value="<?= $nama; ?>" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Kelas</label>
                    <input type="text" id="input-first-name" class="form-control" value="<?= $nama_kelas; ?>" readonly>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Alamat</label>
                    <input type="text" id="input-last-name" class="form-control" value="<?= $alamat; ?>" readonly>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Tempat Lahir</label>
                    <input type="text" id="input-last-name" class="form-control" value="<?= $tempat_lahir; ?>" readonly>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-last-name">Tanggal Lahir</label>
                    <input type="text" id="input-last-name" class="form-control" value="<?= tgl_indo($tanggal_lahir); ?>" readonly>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Informasi Orang Tua Siswa</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Nama Orang Tua</label>
                    <input id="input-address" class="form-control" value="<?= $nama_orang_tua; ?>" type="text" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-city">Tempat Lahir Orang Tua</label>
                    <input type="text" id="input-city" class="form-control" value="<?= $tempat_lahir_orang_tua; ?>" readonly>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Tanggal Lahir Orang Tua</label>
                    <input type="text" id="input-country" class="form-control" value="<?= tgl_indo($tanggal_lahir_orang_tua); ?>" readonly>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>