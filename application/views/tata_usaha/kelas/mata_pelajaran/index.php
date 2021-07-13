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
              <li class="breadcrumb-item active" aria-current="page">Mata Pelajaran</li>
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
          <h3 class="text-dark mb-0">Data Mata Pelajaran</h3>
          <a class="btn btn-primary text-white" href="<?= base_url('tata_usaha/kelas/mata_pelajaran/tambah/' . $id_kelas); ?>">Tambah</a>
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
        </div>
        <div class="card-body bg-transparent border-0">
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th scope="col" class="sort" data-sort="budget">Mata Pelajaran</th>
                  <th scope="col" class="sort" data-sort="status">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php
                  foreach ($kelas as $key) { ?>
                    <tr>
                      <td><?= $key['nama_mata_pelajaran']; ?></td>
                      <td>
                        <a href="<?= base_url('tata_usaha/kelas/mata_pelajaran/hapus/' . $id_kelas . '/' . $key['id_kelas_mata_pelajaran']); ?>" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                  <?php }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>