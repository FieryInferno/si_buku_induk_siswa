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
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-dark table-flush" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="sort" data-sort="name">No. Induk</th>
                <th scope="col" class="sort" data-sort="budget">Nama</th>
                <th scope="col" class="sort" data-sort="status">Kelas</th>
              </tr>
            </thead>
            <tbody class="list">
              <?php
                foreach ($siswa as $key) { ?>
                  <tr>
                    <td><?= $key['no_induk']; ?></td>
                    <td><?= $key['nama']; ?></td>
                    <td><?= $key['kelas']; ?></td>
                  </tr>
                <?php }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>