<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboards</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header bg-transparent">
          <h1>Profile Sekolah</h1>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">NPSN</label>
              <div class="col-sm-10">
                <p class="form-control"><?= $npsn; ?></p>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Nama Sekolah</label>
              <div class="col-sm-10">
                <p class="form-control"><?= $bentuk_pendidikan; ?></p>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <p class="form-control"><?= $status; ?></p>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Kecamatan</label>
              <div class="col-sm-10">
                <p class="form-control"><?= $kecamatan; ?></p>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Kabupaten</label>
              <div class="col-sm-10">
                <p class="form-control"><?= $kabupaten; ?></p>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Provinsi</label>
              <div class="col-sm-10">
                <p class="form-control"><?= $provinsi; ?></p>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Kepala Sekolah</label>
              <div class="col-sm-10">
                <p class="form-control"><?= $kepala_sekolah; ?></p>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Operator</label>
              <div class="col-sm-10">
                <p class="form-control"><?= $operator; ?></p>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <p class="form-control"><?= $email; ?></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer pt-0">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6">
        <div class="copyright text-center  text-lg-left  text-muted">
          &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          <li class="nav-item">
            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
          </li>
          <li class="nav-item">
            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
</div>