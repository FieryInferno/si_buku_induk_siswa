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
          <form action="<?= base_url('tata_usaha/siswa/edit/' . $id_siswa); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            <!-- <h6 class="heading-small text-muted mb-4">User information</h6> -->
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-10">
                  <h2>Data Pribadi</h2>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Foto</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto" onchange="previewImg()" name="foto">
                      <input type="hidden" name="foto_lama" value="<?= $foto; ?>">
                      <label class="custom-file-label" for="customFileLang">Select file</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama Siswa</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Nama Siswa" name="nama" required value="<?= $nama; ?>">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="jenis_kelamin1" name="jenis_kelamin" class="custom-control-input" value="laki-laki" <?= $jenis_kelamin == 'laki-laki' ? 'checked' : ''; ?>>
                      <label class="custom-control-label" for="jenis_kelamin1">Laki - Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="jenis_kelamin2" name="jenis_kelamin" class="custom-control-input" value="perempuan" <?= $jenis_kelamin == 'perempuan' ? 'checked' : ''; ?>>
                      <label class="custom-control-label" for="jenis_kelamin2">Perempuan</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NISN</label>
                    <input type="text" id="input-email" class="form-control" placeholder="NISN" name="nisn" required value="<?= $nisn; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NIS</label>
                    <input type="text" id="input-email" class="form-control" placeholder="NIS" name="nis" required value="<?= $nis; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NIK</label>
                    <input type="text" id="input-email" class="form-control" placeholder="NIK" name="nik" required value="<?= $nik; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tempat Lahir</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required value="<?= $tempat_lahir; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir</label>
                    <input type="date" id="input-email" class="form-control" placeholder="NIK" name="tanggal_lahir" required value="<?= $tanggal_lahir; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Alamat</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Alamat" name="alamat" required value="<?= $alamat; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Anak Ke-</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Anak Ke-" name="anak_ke" required value="<?= $anak_ke; ?>">
                  </div>

                  <h2>Data Ayah Kandung</h2>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama Ayah Kandung</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Nama Ayah Kandung" name="nama_ayah" required value="<?= $nama_ayah; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NIK Ayah</label>
                    <input type="text" id="input-email" class="form-control" placeholder="NIK Ayah" name="nik_ayah" required value="<?= $nik_ayah; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir Ayah</label>
                    <input type="date" id="input-email" class="form-control" placeholder="NIK Ayah" name="tanggal_lahir_ayah" required value="<?= $tanggal_lahir_ayah; ?>">
                  </div>
                  
                  <h2>Data Ibu Kandung</h2>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Nama Ibu Kandung</label>
                    <input type="text" id="input-email" class="form-control" placeholder="Nama Ibu Kandung" name="nama_ibu" required value="<?= $nama_ibu; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NIK Ibu</label>
                    <input type="text" id="input-email" class="form-control" placeholder="NIK Ibu" name="nik_ibu" required value="<?= $nik_ibu; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Tanggal Lahir Ibu</label>
                    <input type="date" id="input-email" class="form-control" placeholder="NIK Ibu" name="tanggal_lahir_ibu" required value="<?= $tanggal_lahir_ibu; ?>">
                  </div>
                </div>
                <div class="col-lg-2">
                  <img src="<?= base_url('assets/images/' . $foto); ?>" alt="" width="100%" class="img-preview">
                </div>
              </div>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#exampleModal">Edit</button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Edit</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Apakah anda yakin akan mengedit data ini?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button class="btn btn-success" type="submit">Edit</button>
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