<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item active" aria-current="page">Siswa</li>
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
          <h3 class="text-dark mb-0">Data Siswa</h3>
          <a class="btn btn-primary text-white" href="<?= base_url(); ?>tata_usaha/siswa/tambah">Tambah</a>
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
        </div>
        <div class="card-body bg-transparent border-0">
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">NISN</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Tempat/Tanggal Lahir</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php
                  foreach ($siswa as $key) { ?>
                    <tr>
                      <td><?= $key['nisn']; ?></td>
                      <td><?= $key['nama']; ?></td>
                      <td><?= $key['alamat']; ?></td>
                      <td><?= $key['tempat_lahir'] . '/' . tgl_indo($key['tanggal_lahir']); ?></td>
                      <td><?= $key['jenis_kelamin']; ?></td>
                      <td><?= $key['nama_kelas']; ?></td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aksi
                          </button>
                          <div class="dropdown-menu">
                            <a href="<?= base_url('tata_usaha/siswa/' . $key['id_siswa']); ?>" class="dropdown-item btn btn-primary" title="Detail Siswa"><i class="fas fa-info-circle"></i> Detail</a>
                            <a href="<?= base_url('tata_usaha/siswa/edit/' . $key['id_siswa']); ?>" class="dropdown-item btn btn-success" title="Edit"><i class="fas fa-edit"></i> Edit</a>
                            <a href="<?= base_url('tata_usaha/siswa/cetak/' . $key['id_siswa']); ?>" class="dropdown-item btn btn-warning" title="Cetak" target="_blank"><i class="fas fa-print"></i> Cetak</a>
                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#registrasi<?= $key['id_siswa']; ?>" title="Registrasi"><i class="fas fa-retweet"></i> Register</button>
                            <div class="dropdown-divider"></div>
                            <!-- Button trigger modal -->
                            <button type="button" class="dropdown-item btn btn-danger" data-toggle="modal" data-target="#exampleModal<?= $key['id_siswa']; ?>" title="Hapus"><i class="fas fa-trash-alt"></i> Hapus</button>
                          </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= $key['id_siswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus data siswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="<?= base_url('tata_usaha/siswa/hapus/' . $key['id_siswa']); ?>" method="post">
                                <input type="hidden" name="_method" name="delete">
                                <div class="modal-body">
                                  Anda yakin akan menghapus data siswa <?= $key['nama']; ?>?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-danger">Hapus</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="registrasi<?= $key['id_siswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Register Siswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="<?= base_url('tata_usaha/siswa/register/' . $key['id_siswa']); ?>" method="post">
                                <div class="modal-body">
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Tanggal</label>
                                    <div class="col-sm-9">
                                      <input type="date" class="form-control" name="tanggal_siswa_keluar">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Alasan Keluar</label>
                                    <div class="col-sm-9">
                                      <select name="alasan" id="alasan" class="form-control">
                                        <option value="" disabled>Pilih Alasan</option>
                                        <option value="lulus">Lulus</option>
                                        <option value="pindah">Pindah</option>
                                        <option value="mengundurkan_diri">Mengundurkan Diri</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                              </form>
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