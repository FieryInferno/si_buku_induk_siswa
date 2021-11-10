<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item active" aria-current="page">Kelas</li>
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
          <h3 class="text-dark mb-0">Data Kelas</h3>
          <a class="btn btn-primary text-white" href="<?= base_url(); ?>tata_usaha/kelas/tambah">Tambah</a>
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
        </div>
        <div class="card-body bg-transparent border-0">
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Kelas</th>
                  <th scope="col">Wali Kelas</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php
                  foreach ($kelas as $key) { ?>
                    <tr>
                      <td><?= $key['nama_kelas']; ?></td>
                      <td><?= $key['nama_wali_kelas']; ?></td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aksi
                          </button>
                          <div class="dropdown-menu">
                            <a href="<?= base_url('tata_usaha/kelas/lihat/' . $key['id_kelas']); ?>" class="dropdown-item">Lihat Anggota</a>
                            <a href="<?= base_url('tata_usaha/kelas/edit/' . $key['id_kelas']); ?>" class="dropdown-item">Edit</a>
                            <div class="dropdown-divider"></div>
                            <!-- Button trigger modal -->
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal<?= $key['id_kelas']; ?>">Hapus</button>
                          </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= $key['id_kelas']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Anda yakin akan menghapus data ini?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="<?= base_url('tata_usaha/kelas/hapus/' . $key['id_kelas']); ?>" class="btn btn-danger">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>
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