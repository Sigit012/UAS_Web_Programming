<?php
error_reporting(0);
include 'koneksi.php'; //menghubungkan ke file koneksi untuk ke database
$id = $_GET['id_matpel']; //menampung id

//query hapus
$datas = mysqli_query($koneksi, "delete from tb_matpel where id_matpel ='$id'") or die(mysqli_error($koneksi));

//alert dan redirect ke index.php
echo "<script>
  alert('data berhasil dihapus.');
  window.location = 'tampil_matpel.php';
</script>";
