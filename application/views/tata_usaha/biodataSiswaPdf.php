<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="text-center"><h3>BIODATA SISWA</h3></div>
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
      <td width="45%">Kelas</td>
      <td width="1%">:</td>
      <td width="54%"><?= $nama_kelas; ?></td>
    </tr>
    <tr>
      <td width="45%">Alamat</td>
      <td width="1%">:</td>
      <td width="54%"><?= $alamat; ?></td>
    </tr>
    <tr>
      <td width="45%">Tempat/Tanggal Lahir</td>
      <td width="1%">:</td>
      <td width="54%"><?= $tempat_lahir . '/' . tgl_indo($tanggal_lahir); ?></td>
    </tr>
  </table>
  <script>
    window.print();
  </script>
</body>
</html>