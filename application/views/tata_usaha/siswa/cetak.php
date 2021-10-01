<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <h1 class="text-center"><strong>LEMBAR BUKU INDUK SISWA</strong></h1>
  <div class="flex justify-center">
    <div class="grid grid-rows-2 grid-flow-col">
      <div>
        <div class="grid grid-cols-2 gap-4">
          <div>Nomor Induk Siswa</div>
          <div>: <?= $nis; ?></div>
        </div>
      </div>
      <div>
        <div class="grid grid-cols-2 gap-4">
          <div>Nomor Induk Siswa Nasional</div>
          <div>: <?= $nisn; ?></div>
        </div>
      </div>
    </div>
  </div>
  <div class="grid grid-cols-5 gap-4">
    <div class="col-span-4">
      <h2><strong>DATA PRIBADI</strong></h2>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">1</div>
        <div class="col-span-5">Nama Siswa</div>
        <div class="col-span-6">: <?= $nama; ?></div>
      </div>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">2</div>
        <div class="col-span-5">Jenis Kelamin</div>
        <div class="col-span-6">: <?= $jenis_kelamin; ?></div>
      </div>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">3</div>
        <div class="col-span-5">NIK</div>
        <div class="col-span-6">: <?= $nik; ?></div>
      </div>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">4</div>
        <div class="col-span-5">Tempat Lahir</div>
        <div class="col-span-6">: <?= $tempat_lahir; ?></div>
      </div>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">5</div>
        <div class="col-span-5">Tanggal Lahir</div>
        <div class="col-span-6">: <?= tgl_indo($tanggal_lahir); ?></div>
      </div>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">6</div>
        <div class="col-span-5">Alamat</div>
        <div class="col-span-6">: <?= $alamat; ?></div>
      </div>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">7</div>
        <div class="col-span-5">Anak ke -</div>
        <div class="col-span-6">: <?= $anak_ke; ?></div>
      </div>
    </div>
    <div>
      <img src="<?= base_url(); ?>assets/images/AC_Milan.png" alt="" width="75%" class="border-4 border-black">
    </div>
    
    <div class="col-span-4">
      <h2><strong>DATA AYAH KANDUNG</strong></h2>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">8</div>
        <div class="col-span-5">Nama Ayah Kandung</div>
        <div class="col-span-6">: <?= $nama_ayah; ?></div>
      </div>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">9</div>
        <div class="col-span-5">NIK Ayah</div>
        <div class="col-span-6">: <?= $nik_ayah; ?></div>
      </div>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">10</div>
        <div class="col-span-5">Tanggal Lahir Ayah</div>
        <div class="col-span-6">: <?= tgl_indo($tanggal_lahir_ayah); ?></div>
      </div>
    </div>
    
    <div class="col-span-4">
      <h2><strong>DATA IBU KANDUNG</strong></h2>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">11</div>
        <div class="col-span-5">Nama Ibu Kandung</div>
        <div class="col-span-6">: <?= $nama_ibu; ?></div>
      </div>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">12</div>
        <div class="col-span-5">NIK Ibu</div>
        <div class="col-span-6">: <?= $nik_ibu; ?></div>
      </div>
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 text-right">13</div>
        <div class="col-span-5">Tanggal Lahir Ibu</div>
        <div class="col-span-6">: <?= tgl_indo($tanggal_lahir_ibu); ?></div>
      </div>
    </div>
  </div>
  <script>
    window.print();
  </script>
</body>
</html>