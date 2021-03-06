<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Tata Usaha</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/buttons.bootstrap5.min.css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <h1>SIBUKLAH</h1>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?= base_url(); ?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>tata_usaha/siswa">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Siswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>tata_usaha/siswa_keluar">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Siswa Keluar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>tata_usaha/kelas">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Kelas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>tata_usaha/nilai">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Nilai</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>tata_usaha/username_password">
                <i class="ni ni-key-25 text-pink"></i>
                <span class="nav-link-text">Kelola Username dan Password</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>tata_usaha/profile_sekolah">
                <i class="ni ni-circle-08 text-black"></i>
                <span class="nav-link-text">Profile Sekolah</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="https://via.placeholder.com/150">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?= $this->session->username; ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <a href="<?= base_url(); ?>tata_usaha/profile" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url(); ?>logout" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php $this->load->view($konten); ?>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/js.cookie.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?= base_url(); ?>assets/js/Chart.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url(); ?>assets/js/argon.js?v=1.2.0"></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/buttons.bootstrap5.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/buttons.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="<?= base_url(); ?>assets/js/buttons.html5.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/buttons.print.min.js"></script>
  <script>
    $(document).ready( function () {
      $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          { extend: 'excel', className: 'btn-success' },
          { extend: 'pdf', className: 'btn-success' },
          { extend: 'print', className: 'btn-success' },
        ]
      });
      $('#tableNilai').DataTable({
        responsive: true
      });
    });
    
    function previewImg() {
      const gambar      = document.querySelector('#foto');
      const label       = document.querySelector('.custom-file-label');
      const imgPreview  = document.querySelector('.img-preview');
      // console.log(gambar);
      label.textContent = gambar.files[0].name;
      const file = new FileReader();
      file.readAsDataURL(gambar.files[0]);
      file.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }

    function tambahMataPelajaran() {
      $mapel  = `<div class="row">
                  <div class="col-4">
                    <input type="text" id="input-username" class="form-control" placeholder="Masukan Mata Pelajaran" name="mata_pelajaran[]" required>
                  </div>
                  <div class="col-4">
                    <input type="text" id="input-username" class="form-control" placeholder="Masukan Nama Guru" name="nama_guru[]" required>
                  </div>
                  <div class="col-2">
                    <input type="text" id="input-username" class="form-control" placeholder="Pengetahuan" name="pengetahuan[]" required>
                  </div>
                  <div class="col-2">
                    <input type="text" id="input-username" class="form-control" placeholder="Keterampilan" name="keterampilan[]" required>
                  </div>
                </div>`;

      $('#mataPelajaran').append($mapel);
    }

    function hapusMataPelajaran() {
      var parent = document.getElementById("mataPelajaran");
      parent.removeChild(parent.lastChild);
    } 
  </script>
</body>

</html>
