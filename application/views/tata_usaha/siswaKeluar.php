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
          <h3 class="text-dark mb-0">Data Siswa Keluar</h3>
        </div>
        <div class="card-body bg-transparent border-0">
          <!-- <form action="" method="get">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Tahun</label>
                  <select name="tahun" id="tahun" class="form-control">
                    <?php
                      $tg_awal    = date('Y')-10;
                      $tgl_akhir  = date('Y')+3;
                      for ($i = $tgl_akhir; $i >= $tg_awal; $i--) {
                        echo "
                          <option value='$i'";
                          if(date('Y') == $i) {
                            echo "selected";
                          }
                        echo">$i</option>";
                      }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <button class="btn btn-primary mb-3" type="submit">Filter</button>
          </form> -->
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
                  <th scope="col">Tanggal Keluar</th>
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
                      <td><?= $key['nama_kelas']; ?></td>
                      <td><?= $key['status']; ?></td>
                      <td><?= tgl_indo($key['tanggal_siswa_keluar']); ?></td>
                      <td>
                        <a href="<?= base_url('tata_usaha/siswa_keluar/detail/' . $key['id_siswa']); ?>" class="btn btn-primary">Lihat Detail</a>  
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