<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
            <div class="col-12">
              <h3 class="mb-0">Profile</h3>
            </div>
          </div>
        </div>
        <form action="<?= base_url(); ?>tata_usaha/profile/edit" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <?php
              if ($this->session->pesan) { ?>
              <div class="alert alert-success" role="alert">
                <?= $this->session->pesan; ?>
              </div>
              <?php }
              
              if ($this->session->error) { ?>
              <div class="alert alert-danger" role="alert">
                <?= $this->session->error; ?>
              </div>
              <?php }
            ?>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Username</label>
                    <input type="text" name="username" class="form-control" required value="<?= $profile['username']; ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Password Konfirmasi</label>
                    <input type="password" name="password_konfirmasi" class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editProfile">Edit</button>

            <!-- Modal -->
            <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfimasi Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Apakah anda yakin akan mengedit profile?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Edit</button>
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

<div class="container">
  <div class="row">
    <div class="col"><div class="col-xl-12 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-12">
              <h3 class="mb-0">Edit Profile Sekolah</h3>
            </div>
          </div>
        </div>
        <form action="<?= base_url(); ?>tata_usaha/profile_sekolah/edit" method="post">
          <div class="card-body">
            <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">NPSN</label>
                    <input type="text" class="form-control" name="npsn" value="<?= $npsn; ?>" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Bentuk Pendidikan</label>
                    <input type="text" class="form-control" name="bentuk_pendidikan" value="<?= $bentuk_pendidikan; ?>" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Status</label>
                    <input type="text" class="form-control" name="status" value="<?= $status; ?>" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" value="<?= $kecamatan; ?>" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Kabupaten</label>
                    <input type="text" class="form-control" name="kabupaten" value="<?= $kabupaten; ?>" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Provinsi</label>
                    <input type="text" class="form-control" name="provinsi" value="<?= $provinsi; ?>" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Kepala Sekolah</label>
                    <input type="text" class="form-control" name="kepala_sekolah" value="<?= $kepala_sekolah; ?>" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Operator</label>
                    <input type="text" class="form-control" name="operator" value="<?= $operator; ?>" required>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= $email; ?>" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit">Edit</button>

            <!-- Modal -->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfimasi Edit Profile Sekolah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Apakah anda yakin akan mengedit profile sekolah?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Edit</button>
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