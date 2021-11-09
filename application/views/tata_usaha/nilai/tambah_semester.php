<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item active" aria-current="page">Nilai</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header bg-transparent border-0">
          <h3 class="text-dark mb-2">Data Nilai</h3>
        </div>
        <form action="<?= base_url('tata_usaha/nilai/tambah_semester?nisn=' . $this->input->get('nisn')); ?>" method="POST">
          <div class="card-body bg-transparent border-0">
            <div class="form-group">
              <label class="form-control-label" for="input-username">Semester</label>
              <input type="hidden" name="id_siswa" value="<?= $id_siswa; ?>">
              <input type="text" id="input-username" class="form-control" placeholder="Masukan Semester" name="semester" required>
            </div>
            <div class="form-group" id="mataPelajaran">
              <div class="row">
                <div class="col-4">
                  <input type="text" id="input-username" class="form-control" placeholder="Masukan Mata Pelajaran" name="mata_pelajaran[]" required>
                </div>
                <div class="col-4">
                  <input type="text" id="input-username" class="form-control" placeholder="Masukan Nama Guru" name="nama_guru[]" required>
                </div>
                <div class="col-2">
                  <input type="text" id="input-username" class="form-control" placeholder="Pengetahuan" name="pengetahuan[]" required>
                </div>
                <div class="col-2">
                  <input type="text" id="input-username" class="form-control" placeholder="Keterampilan" name="keterampilan[]" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <a class="btn btn-primary text-white" onclick="tambahMataPelajaran()"><i class="fas fa-plus"></i></a>
              <a class="btn btn-danger text-white" onclick="hapusMataPelajaran()"><i class="fas fa-minus"></i></a>
            </div>
            <button class="btn btn-success" type="submit">Tambahkan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>