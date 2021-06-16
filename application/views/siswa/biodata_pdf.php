<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/argon.css?v=1.2.0" type="text/css">
</head>
<body>
  <div class="text-center">BIODATA SISWA</div>
  <table width="100%">
    <tr>
      <td width="45%">No. Induk</td>
      <td width="1%">:</td>
      <td width="54%"><?= $no_induk; ?></td>
    </tr>
    <tr>
      <td width="45%">Nama</td>
      <td width="1%">:</td>
      <td width="54%"><?= $nama; ?></td>
    </tr>
    <tr>
      <td width="45%">Username</td>
      <td width="1%">:</td>
      <td width="54%"><?= $username; ?></td>
    </tr>
    <tr>
      <td width="45%">Kelas</td>
      <td width="1%">:</td>
      <td width="54%"><?= $nama_kelas; ?></td>
    </tr>
  </table>
</body>
</html>