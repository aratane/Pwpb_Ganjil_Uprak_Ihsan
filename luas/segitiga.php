<html>
<body>
    <h1>Form Hitung Luas Segitiga Dengan PHP</h1>
    <h2>Isi Data:</h2>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Alas</td>
                <td>:</td>
                <td><input type="text" name="alas" required></td>
            </tr>
            <tr>
              <td>Tinggi</td>
              <td>:</td>
              <td><input type="text" name="tinggi" required</td>
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
            $alas   = $_POST['alas'];
            $tinggi = $_POST['tinggi'];

            $luas_segitiga = 0.5 * $alas * $tinggi;
            // menghitung luas segitiga

            echo "Hasil hitung luas Segitiga adalah sebagai berikut = $luas_segitiga";
        }
    ?>
</body>
</html>
