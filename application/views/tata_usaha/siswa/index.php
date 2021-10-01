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
          <!-- <a class="btn btn-primary text-white" href="<?= base_url(); ?>tata_usaha/siswa">Semua Data</a>
          <a class="btn btn-primary text-white" href="<?= base_url(); ?>tata_usaha/siswa/aktif">Aktif</a>
          <a class="btn btn-primary text-white" href="<?= base_url(); ?>tata_usaha/siswa/alumni">Alumni</a>
          <a class="btn btn-primary text-white" href="<?= base_url(); ?>tata_usaha/siswa/pindah">Pindah</a> -->
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
                        <a href="<?= base_url('tata_usaha/siswa/' . $key['id_siswa']); ?>" class="btn btn-primary" title="Detail Siswa"><i class="fas fa-info-circle"></i></a>
                        <a href="<?= base_url('tata_usaha/siswa/edit/' . $key['id_siswa']); ?>" class="btn btn-success" title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('tata_usaha/siswa/cetak/' . $key['id_siswa']); ?>" class="btn btn-warning" title="Cetak"><i class="fas fa-print"></i></a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?= $key['id_siswa']; ?>" title="Hapus"><i class="fas fa-trash-alt"></i></button>

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