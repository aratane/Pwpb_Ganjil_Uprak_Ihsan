<html>
<body>
    <h1>Form Hitung Luas Persegi Dengan PHP</h1>
    <h2>Isi Data:</h2>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Sisi persegi</td>
                <td>:</td>
                <td><input type="text" name="sisi" required></td>
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
            $sisi   = $_POST['sisi'];

            // menghitung luas persegi
            $luas_persegi = $sisi * $sisi;

            echo "Hasil hitung luas persegi adalah sebagai berikut = $luas_persegi";
        }
    ?>
</body>
</html>
