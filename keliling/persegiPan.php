<html>
<body>
    <h1>Form Hitung Keliling Persegi Panjang Dengan PHP</h1>
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

            $keliling_persegiPanjang = 2 * ($panjang + $lebar);
            // menghitung keliling persegi panjang

            echo "Hasil hitung keliling persegi panjang adalah sebagai berikut = $keliling_persegiPanjang";
        }
    ?>
</body>
</html>
