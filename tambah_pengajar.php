<!doctype html>

<head>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Data Guru</title>
</head>

<body>
  <div class="container col-md-6 mt-4">
    <h1>Tabel Guru</h1> <br>
    <div class="card">
      <div class="card-header bg-success text-white">
        Tambah Data Guru
      </div>
      <div class="card-body">
        <form action="" method="post" role="form">
          <div class="form-group">
            <label>Nama Guru</label>
            <input type="text" name="nama" required="" class="form-control">
          </div>
          <div class="form-group">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control">
          </div>
          <div class="form-group">  
            <label>Mata Pelajaran</label>
            <input type="text" name="matpel" class="form-control">
          </div>
          <div class="form-group">
            <label>Kode Jadwal</label> <br>
            <input type="text" name="kode_jadwal" class="form-control">
          </div>
          <div class="form-group">
            <label>No Telefon</label>
            <input type="text" name="no_telefon" required="" class="form-control">
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
        </form>

        <?php
        include('koneksi.php');

        //melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
        if (isset($_POST['submit'])) {
          //menampung data dari inputan
          $nama = $_POST['nama'];
          $nip = $_POST['nip'];
          $matpel = $_POST['matpel'];
          $kode = $_POST['kode_jadwal'];
          $no_telf = $_POST['no_telefon'];

          //query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
          $datas = mysqli_query($koneksi, "insert into tb_pengajar (nama,nip,matpel,kode_jadwal,no_telefon) values('$nama', '$nip', '$matpel', '$kode', '$no_telf')") or die(mysqli_error($koneksi));
          //id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

          //ini untuk menampilkan alert berhasil dan redirect ke halaman index
          echo "<script>alert('data berhasil disimpan.');window.location='tampil_pengajar.php';</script>";
        }
        ?>
      </div>
    </div>
  </div>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>