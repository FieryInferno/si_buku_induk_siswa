<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Daftar Nilai</title>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/argon.css?v=1.2.0" type="text/css">
</head>
<body>
  <div class="text-center"><strong>DAFTAR NILAI</strong></div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No. Induk</th>
        <th>Nama</th>
        <?php
          foreach ($mata_pelajaran as $key) { ?>
            <th><?= $key['nama_mata_pelajaran']; ?></th>
          <?php }
        ?>
        <th>Nilai Rata - Rata</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($nilai as $key) { ?>
          <tr>
            <td><?= $key['no_induk']; ?></td>
            <td><?= $key['nama']; ?></td>
            <?php
              $kolom  = array_column($key['nilai'], 'id_mata_pelajaran');
              foreach ($mata_pelajaran as $value) {
                if (($cari = array_search($value['id_mata_pelajaran'], $kolom)) !== FALSE) {
                  echo '<td>' . $key['nilai'][$cari]['nilai'] . '</td>';
                } else {
                  echo '<td></td>';
                }
                unset($kolom[$cari]); 
              }
            ?>
            <td><?= $key['rata']; ?></td>
          </tr>
        <?php }
      ?>
    </tbody>
  </table>
</body>

</html>