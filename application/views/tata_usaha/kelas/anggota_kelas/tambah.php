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
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>tata_usaha/kelas/lihat">Lihat Anggota</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah</li>
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
              <h3 class="mb-0">Tambah Anggota Kelas</h3>
            </div>
          </div>
        </div>
        <div class="card-body bg-transparent border-0">
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <form action="<?= base_url('tata_usaha/kelas/anggota/tambah/' . $id_kelas); ?>" method="post">
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="myTable">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">No. Induk</th>
                    <th scope="col">Nama</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php
                    foreach ($siswa as $key) { ?>
                      <tr>
                        <td><input type="checkbox" name="siswa[]" value="<?= $key['id_siswa']; ?>"></td>
                        <td><?= $key['nisn']; ?></td>
                        <td><?= $key['nama']; ?></td>
                      </tr>
                    <?php }
                  ?>
                </tbody>
              </table>
            </div>
            <button type="submit" class="btn btn-success">Pilih</button>
          </form>
        </div>
      </div>
    </div>
  </div>