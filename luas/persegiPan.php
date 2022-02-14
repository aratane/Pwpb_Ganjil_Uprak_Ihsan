<html>
<body>
    <h1>Form Hitung Luas Persegi Panjang Dengan PHP</h1>
    <h2>Isi Data:</h2>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Panjang</td>
                <td>:</td>
                <td><input type="text" name="panjang" required></td>
            </tr>
            <tr>
              <td>Lebar</td>
              <td>:</td>
              <td><input type="text" name="lebar" required</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $panjang   = $_POST['panjang'];
            $lebar = $_POST['lebar'];

            // menghitung luas persegi panjang
            $luas_persegiPanjang = $panjang * $lebar;

            echo "Hasil hitung luas persegi panjang adalah sebagai berikut = $luas_persegiPanjang";
        }
    ?>
</body>
</html>
