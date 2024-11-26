<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian</title>
</head>
<body>
    <h2 style="text-align:center;">Tabel Perkalian</h2>
    <table border="1" cellspacing="0" cellpadding="5" align="center">
        <?php
        $max = 10; // Ukuran tabel (1 sampai 10)
        
        // Baris header
        echo "<tr>";
        echo "<th>*</th>"; // Kolom sudut kiri atas
        for ($i = 1; $i <= $max; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        // Baris isi
        for ($i = 1; $i <= $max; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; // Kolom pertama (angka baris)
            for ($j = 1; $j <= $max; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>

        

<h2 style="text-align:center;">Tabel Pertambahan</h2>
    <table border="1" cellspacing="0" cellpadding="5" align="center">
        <?php
        $max = 10; // Ukuran tabel (1 sampai 10)
        
        // Baris header
        echo "<tr>";
        echo "<th>*</th>"; // Kolom sudut kiri atas
        for ($i = 1; $i <= $max; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        // Baris isi
        for ($i = 1; $i <= $max; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; // Kolom pertama (angka baris)
            for ($j = 1; $j <= $max; $j++) {
                echo "<td>" . ($i + $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
