<html>
<body>
    <h1>Form Hitung Keliling Segitiga Dengan PHP</h1>
    <h2>Isi Data:</h2>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Alas</td>
                <td>:</td>
                <td><input type="text" name="alas" required></td>
            </tr>
            <tr>
              <td>B</td>
              <td>:</td>
              <td><input type="text" name="b" required</td>
            </tr>
            <tr>
              <td>C</td>
              <td>:</td>
              <td><input type="text" name="c" required</td>
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
            $b = $_POST['b'];
            $c = $_POST['c'];

            $keliling_segitiga = $alas + $b + $c;
            // menghitung keliling persegi panjang

            echo "Hasil hitung keliling persegi panjang adalah sebagai berikut = $keliling_segitiga";
        }
    ?>
</body>
</html>
