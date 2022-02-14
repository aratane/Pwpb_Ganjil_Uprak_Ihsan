<?php include("koneksi.php") ?>

<!DOCTYPE html>
<html>

<style>
    body {
        background-color: cyan;
    }
</style>
<body>
    <form action="proseskendaraan.php" method="POST">
    <h3 align="center">Data Kendaraan</h3>
    <table align="center">
        <tr>
            <td>
                Nopol :
            </td>
            <td>
                <input type="text" name="nopol">
            </td>
        </tr>
        <tr>
            <td>
                Merk :
            </td>
            <td>
                <input type="text" name="merk">
            </td>
        </tr>
        <tr>
            <td>
                Jenis Kendaraan :
            </td>
            <td>
                <select name="jkend">
                    <option value="Mobil">Mobil</option>
                    <option value="Motor">Motor</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Tanggal Daftar :
            </td>
            <td>
                <input type="date" name="tgldaftar">
            </td>
        </tr>
        <tr>
            <td>
                Nama Pemilik :
            </td>
            <td>
                <select name="nmpemilik">
                    <?php $sql = "SELECT * FROM pemilik";
                    $query = mysqli_query($db, $sql) or die(mysqli_error($db));
                    while($row=mysqli_fetch_array($query)){; ?>
                    <option value="<?php echo $row['KD_Pemilik'] ?>"><?php echo $row['Nama_Pemilik'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Nama STNK :
            </td>
            <td>
                <input type="text" name="nmSTNK">
            </td>
        </tr>
        <tr>
            <td>
                No STNK :
            </td>
            <td>
                <input type="text" name="noSTNK">
            </td>
        </tr>
        <tr>
            <td>
                Keterangan :
            </td>
            <td>
                <textarea name="ket" cols="30" rows="4"></textarea>
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td align="right">
                <input type="submit" value="simpan" name="simpan">
            </td>
        </tr>
    </table>
    </form>
    <div id="tampil"></div>
</body>

</html>