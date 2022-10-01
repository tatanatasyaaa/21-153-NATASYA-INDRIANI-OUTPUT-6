<?php
include "koneksi.php";

$id = $_POST['id_mhs'];
$prodi = $_POST['prodi_mhs'];
$nama = $_POST['nama_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mhs VALUES('$id','$prodi','$nama','$alamat')";
$hasil = mysqli_query($koneksi,$sql);
if (!$hasil){
    echo "tambah data mahasiswa tidak berhasil";

}else{
    echo "tambah data mahasiswa berhasil<br>";
    echo "<a href='datamhs.php'>tampilkan data</a>";
}
?>