<!doctype html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Data Matpel</title>
</head>

<body>
  <div class="container col-md-12 mt-4">
    <h1>Tabel Mata Pelajaran</h1> <br>
    <form method="get" action="">
      <div class="form-group">
        <label for="cari">Cari </label>
        <input type="text" name="cari" class="form-control">
      </div>
    </form>
    <br>
    <div class="card">
      <div class="card-header bg-info text-white ">
        <a href="tambah_matpel.php" class="btn btn-sm btn-success float-right">Tambah</a>
      </div>
      <div class="card">
        <div class="card-header">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Mata Pelajaran</th>
                <th>Paket</th>
                <th>Kelompok</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              error_reporting(0);
              include('koneksi.php'); //memanggil file koneksi
              $no = 1;
              // $datas = mysqli_query($koneksi, "select * from tb_pengajar") or die(mysqli_error($koneksi));
              $query = mysqli_query($koneksi, "SELECT * FROM tb_matpel");

              if (isset($_GET['cari'])) {
                $query = mysqli_query($koneksi, "SELECT * FROM tb_matpel WHERE nama_matpel LIKE '%" .
                  $_GET['cari'] . "%'");
              }

              //melakukan perulangan
              while ($row = mysqli_fetch_assoc($query)) {
              ?>

                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $row['nama_matpel']; ?></td>
                  <td><?= $row['paket']; ?></td>
                  <td><?= $row['kelompok']; ?></td>
                  <td>
                    <a href="edit_matpel.php?id_matpel=<?= $row['id_matpel']; ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="hapus_mapel.php?id_matpel=<?= $row['id_matpel']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
                  </td>
                </tr>

              <?php $no++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>

</html>