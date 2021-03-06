<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Dashboards</a></li>
              <li class="breadcrumb-item active" aria-current="page">Kelola Username dan Password</li>
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
          <h3 class="text-dark mb-0">Data Username dan Password</h3>
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
        </div>
        <div class="card-body bg-transparent border-0">
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No. Induk</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Username</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php
                  foreach ($siswa as $key) { ?>
                    <tr>
                      <td><?= $key['nisn']; ?></td>
                      <td><?= $key['nama']; ?></td>
                      <td><?= $key['username']; ?></td>
                      <td>
                        <?php
                          switch ($key['status_user']) {
                            case 'aktif': ?>
                              <a href="<?= base_url('tata_usaha/username_password/update/non_aktif/' . $key['id_user']); ?>" class="btn btn-danger">Non Aktifkan</a>
                              <?php break;

                            case 'non_aktif': ?>
                              <a href="<?= base_url('tata_usaha/username_password/update/aktif/' . $key['id_user']); ?>" class="btn btn-success">Aktifkan</a>
                              <?php break;
                            
                            default:
                              # code...
                              break;
                          }
                        ?>
                      </td>
                      <td>
                        <a href="<?= base_url('tata_usaha/username_password/edit/' . $key['id_user']); ?>" class="btn btn-success">Edit</a>
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