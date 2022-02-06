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
            <label>Nama Mata Pelajaran</label>
            <input type="text" name="nama_matpel" required="" class="form-control">
          </div>
          <div class="form-group">
            <label>Paket</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="paket">
              <option selected>-- Pilih Paket Matpel --</option>
              <option value="Semuan">Semua</option>
              <option value="Bisnis Kontruksi dan Properti">Bisnis Kontruksi dan Properti</option>
              <option value="Desain Permodelan dan Informasi Bangunan">Desain Permodelan dan Informasi Bangunan</option>
              <option value="Elektronika Industri">Elektronika Industri</option>
              <option value="Bisnis Kontruksi dan Properti">Bisnis Kontruksi dan Properti</option>
              <option value="Desain Permodelan dan Informasi Bangunan">Desain Permodelan dan Informasi Bangunan</option>
              <option value="Teknik Pemesinan">Teknik Pemesinan</option>
              <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
              <option value="Teknik Pengelasan">Teknik Pengelasan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Kelompok</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="kelompok">
              <option selected>-- Pilih Kelompok Matpel --</option>
              <option value="Pelajaran Umum">Pelajaran Umum</option>
              <option value="Pelajaran Khusu">Pelajaran Khusus</option>
              <option value="Pelajaran Keahlian">Pelajaran Keahlian</option>
            </select>
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
        </form>

        <?php
        include('koneksi.php');

        //melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
        if (isset($_POST['submit'])) {
          //menampung data dari inputan
          $nama = $_POST['nama_matpel'];
          $paket = $_POST['paket'];
          $kelompok = $_POST['kelompok'];

          //query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
          $datas = mysqli_query($koneksi, "insert into tb_matpel (nama_matpel,paket,kelompok) values('$nama', '$paket', '$kelompok')") or die(mysqli_error($koneksi));
          //id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

          //ini untuk menampilkan alert berhasil dan redirect ke halaman index
          echo "<script>alert('data berhasil disimpan.');window.location='tampil_matpel.php';</script>";
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