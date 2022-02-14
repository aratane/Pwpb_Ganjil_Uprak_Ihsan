<html>
<body>
    <h1>Form Hitung Keliling Persegi Dengan PHP</h1>
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

            // menghitung keliling persegi
            $keliling_persegi = $sisi + $sisi + $sisi + $sisi;

            echo "Hasil hitung keliling persegi adalah sebagai berikut:<br />";
            echo "Diketahui;<br />";
            echo "Sisi persegi = $sisi<br />";
            echo "Maka keliling persegi sama dengan [ $sisi + $sisi + $sisi + $sisi ] = $keliling_persegi";
        }
    ?>
</body>
</html>
