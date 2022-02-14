<?php 
include("koneksi.php");

if(isset($_POST['simpan'])) {
    $nopol = $_POST['nopol'];
    $merk = $_POST['merk'];
    $jkend = $_POST['jkend'];
    $tgldaftar = $_POST['tgldaftar'];
    $nmpemilik = $_POST['nmpemilik'];
    $nmSTNK = $_POST['nmSTNK'];
    $noSTNK = $_POST['noSTNK'];
    $ket = $_POST['ket'];

    $sql = "INSERT INTO kendaraan (Nopol, Merk, Jenis_Kendaraan, Tgl_Daftar, KD_Pemilik, Nm_Stnk, No_Stnk, Keterangan) VALUES ('$nopol','$merk','$jkend','$tgldaftar','$nmpemilik','$nmSTNK','$noSTNK','$ket')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        echo "<h4 style='color:green'>Data Berhasil Ditambah !</h4>";
        echo "$sql";
    } else {
        echo "<h4 style='color:red'>Data Gagal Ditambah !</h4>";
        echo mysqli_error($db);
    }
} else {
    die("Akses DIlarang...");
}
?>