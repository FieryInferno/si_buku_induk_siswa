<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
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
          <a class="btn btn-primary text-white" href="<?= base_url(); ?>tata_usaha/mata_pelajaran/tambah">Tambah</a>
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
        </div>
        <div class="card-body bg-transparent border-0">
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Mata Pelajaran</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php
                  $no = 1;
                  foreach ($mata_pelajaran as $key) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $key['nama_mata_pelajaran']; ?></td>
                      <td>
                        <a href="<?= base_url('tata_usaha/mata_pelajaran/edit/' . $key['id_mata_pelajaran']); ?>" class="btn btn-success">Edit</a>
                        <a href="<?= base_url('tata_usaha/mata_pelajaran/hapus/' . $key['id_mata_pelajaran']); ?>" class="btn btn-danger">Hapus</a>
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