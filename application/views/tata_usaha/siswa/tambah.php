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
              <li class="breadcrumb-item active" aria-current="page">Tambah</li>
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
              <h3 class="mb-0">Tambah Siswa</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <form action="<?= base_url(); ?>tata_usaha/siswa/tambah" method="post" enctype="multipart/form-data">
            <!-- <h6 class="heading-small text-muted mb-4">User information</h6> -->
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-2">
                  <img src="<?= base_url(); ?>assets/images/user.jpg" alt="" width="100%" class="img-preview">
                </div>
                <div class="col-lg-10">
                  <h2>Data Pribadi</h2>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Foto</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto" onchange="previewImg()" name="foto">
                      <label class="custom-file-label" for="customFileLang">Select file</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama Siswa</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Nama Siswa" name="nama" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NISN</label>
                    <input type="text" id="input-email" class="form-control" placeholder="NISN" name="nisn" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NIS</label>
                    <input type="text" id="input-email" class="form-control" placeholder="NIS" name="nis" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NIK</label>
                    <input type="text" id="input-email" class="form-control" placeholder="NIK" name="nik" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tempat Lahir</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir</label>
                    <input type="date" id="input-email" class="form-control" placeholder="NIK" name="tanggal_lahir" required>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="jenis_kelamin1" name="jenis_kelamin" class="custom-control-input" value="laki-laki">
                      <label class="custom-control-label" for="jenis_kelamin1">Laki - Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="jenis_kelamin2" name="jenis_kelamin" class="custom-control-input" value="perempuan">
                      <label class="custom-control-label" for="jenis_kelamin2">Perempuan</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Anak Ke-</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Anak Ke-" name="anak_ke" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Masuk</label>
                    <input type="date" class="form-control" name="tanggal_masuk" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" required placeholder="Masukan Jurusan">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Asal Sekolah</label>
                    <input type="text" class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">No. Ijazah</label>
                    <input type="text" class="form-control" placeholder="No. Ijazah" name="no_ijazah" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">No. Akte Kelahiran</label>
                    <input type="text" class="form-control" placeholder="no_akte" name="no_akte" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10" placeholder="Masukan Alamat"></textarea>
                  </div>

                  <h2>Data Ayah Kandung</h2>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama Ayah Kandung</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Nama Ayah Kandung" name="nama_ayah" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NIK Ayah</label>
                    <input type="text" id="input-email" class="form-control" placeholder="NIK Ayah" name="nik_ayah" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir Ayah</label>
                    <input type="date" id="input-email" class="form-control" placeholder="NIK Ayah" name="tanggal_lahir_ayah" required>
                  </div>
                  
                  <h2>Data Ibu Kandung</h2>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama Ibu Kandung</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Nama Ibu Kandung" name="nama_ibu" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NIK Ibu</label>
                    <input type="text" id="input-email" class="form-control" placeholder="NIK Ibu" name="nik_ibu" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir Ibu</label>
                    <input type="date" id="input-email" class="form-control" placeholder="NIK Ibu" name="tanggal_lahir_ibu" required>
                  </div>
                </div>
              </div>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Tambah</button>

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
                      Apakah anda yakin akan menambah data ini?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button class="btn btn-primary" type="submit">Tambah</button>
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