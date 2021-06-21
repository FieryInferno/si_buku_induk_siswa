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
          <a href="<?= base_url(); ?>tata_usaha/nilai/cetak" class="btn btn-primary">Cetak</a>
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
        </div>
        <div class="card-body bg-transparent border-0">
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="tableNilai">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No. Induk</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Nilai</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php
                  foreach ($nilai as $key) { ?>
                    <tr>
                      <td><?= $key['no_induk']; ?></td>
                      <td><?= $key['nama']; ?></td>
                      <td><?= $key['rata']; ?></td>
                      <td>
                        <?php
                          if ($key['rata']) { ?>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Detail Nilai
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail Nilai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <?php
                                        foreach ($key['nilai'] as $value) { ?>
                                          <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label"><?= $value['nama_mata_pelajaran']; ?></label>
                                            <div class="col-sm-8">
                                              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $value['nilai']; ?>">
                                            </div>
                                          </div>
                                        <?php }
                                      ?>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <a href="<?= base_url('tata_usaha/nilai/edit/' . $key['id_siswa']); ?>" class="btn btn-primary">
                              Edit Nilai
                            </a>
                          <?php } else { ?>
                            <a href="<?= base_url('tata_usaha/nilai/tambah/' . $key['id_siswa']); ?>" class="btn btn-primary">Input Nilai</a>
                          <?php }
                        ?>
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