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
          <a class="btn btn-primary text-white" href="<?= base_url(); ?>tata_usaha/siswa">Semua Data</a>
          <a class="btn btn-primary text-white" href="<?= base_url(); ?>tata_usaha/siswa/aktif">Aktif</a>
          <a class="btn btn-primary text-white" href="<?= base_url(); ?>tata_usaha/siswa/alumni">Alumni</a>
          <a class="btn btn-primary text-white" href="<?= base_url(); ?>tata_usaha/siswa/pindah">Pindah</a>
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
        </div>
        <div class="card-body bg-transparent border-0">
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No. Induk</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Tempat/Tanggal Lahir</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php
                  foreach ($siswa as $key) { ?>
                    <tr>
                      <td><?= $key['no_induk']; ?></td>
                      <td><?= $key['nama']; ?></td>
                      <td><?= $key['alamat']; ?></td>
                      <td><?= $key['tempat_lahir'] . '/' . tgl_indo($key['tanggal_lahir']); ?></td>
                      <td><?= $key['nama_kelas']; ?></td>
                      <td><?= $key['status']; ?></td>
                      <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal<?= $key['id_siswa']; ?>">
                          Data Orang Tua
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= $key['id_siswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Data Orang Tua</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                      <input type="text" readonly class="form-control-plaintext" value="<?= $key['nama_orang_tua']; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-8">
                                      <input type="text" readonly class="form-control-plaintext" value="<?= $key['tempat_lahir']; ?>">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                      <input type="text" readonly class="form-control-plaintext" value="<?= tgl_indo($key['tanggal_lahir']); ?>">
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="<?= base_url('tata_usaha/siswa/edit/' . $key['id_user']); ?>" class="btn btn-primary">Edit</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#registrasi<?= $key['id_user']; ?>">
                          Registrasi
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="registrasi<?= $key['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Registrasi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="<?= base_url('tata_usaha/siswa/registrasi/' . $key['id_user']); ?>" method="post">
                                <div class="modal-body">
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-4 col-form-label">Status</label>
                                    <div class="col-sm-8">
                                      <select name="status" id="status" class="form-control">
                                        <option value="aktif" <?= $key['status'] == 'aktif' ? 'selected' : '' ; ?>>Aktif</option>
                                        <option value="pindah" <?= $key['status'] == 'pindah' ? 'selected' : '' ; ?>>Pindah</option>
                                        <option value="alumni" <?= $key['status'] == 'alumni' ? 'selected' : '' ; ?>>Lulus</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>

                        <a href="<?= base_url('tata_usaha/siswa/cetak/' . $key['id_user']); ?>" class="btn btn-sm btn-primary" target="_blank">Cetak</a>

                        <a href="<?= base_url('tata_usaha/siswa/edit/' . $key['id_user']); ?>" class="btn btn-sm btn-success">Edit</a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal<?= $key['id_user']; ?>">
                          Hapus
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= $key['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus data siswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Anda yakin akan menghapus data siswa <?= $key['nama']; ?>?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="<?= base_url('tata_usaha/siswa/hapus/' . $key['id_user']); ?>" class="btn btn-danger">Hapus</a>
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