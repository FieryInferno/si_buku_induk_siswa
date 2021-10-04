<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>tata_usaha/kelas">Kelas</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('tata_usaha/kelas/mata_pelajaran/' . $kelas_id); ?>">Mata Pelajaran</a></li>
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
    <div class="col-12">
      <div class="card shadow">
        <div class="card-header bg-transparent border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Edit Mata Pelajaran</h3>
            </div>
          </div>
        </div>
        <form action="<?= base_url('tata_usaha/kelas/mata_pelajaran/edit/' . $id_mata_pelajaran); ?>" method="post">
          <div class="card-body bg-transparent border-0">
            <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
            <div class="form-group">
              <label class="form-control-label" for="input-username">Nama Mata Pelajaran</label>
              <input type="hidden" value="<?= $kelas_id; ?>" name="id_kelas">
              <input type="text" id="input-username" class="form-control" placeholder="Nama Mata Pelajaran" name="nama_mata_pelajaran" required value="<?= $nama_mata_pelajaran; ?>">
            </div>
            <div class="form-group">
              <label class="form-control-label" for="input-username">Nama Guru</label>
              <input type="text" id="input-username" class="form-control" placeholder="Nama Guru" name="nama_guru" required value="<?= $nama_guru; ?>">
            </div>
          </div>
          <div class="card-footer bg-transparent border-0">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahMataPelajaran">Edit</button>

            <!-- Modal -->
            <div class="modal fade" id="tambahMataPelajaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Tambah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Anda yakin akan mengedit data?
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