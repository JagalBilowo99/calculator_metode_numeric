<?php
$koneksi = mysqli_connect("localhost", "root", "", "p_2122600061");

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
$query_check_table = "SHOW TABLES LIKE 'secant'";
$result_check_table = mysqli_query($koneksi, $query_check_table);
if (mysqli_num_rows($result_check_table) > 0) {
    $query = "SELECT * FROM secant";
    $result = mysqli_query($koneksi, $query);
    echo "<table>";
    echo "<tr><th>No</th><th>X1</th><th>X2</th><th>f(X1)</th><th>f(X2)</th><th>X3</th><th>f(X3)</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['no'] . "</td>";
        echo "<td>" . $row['x1'] . "</td>";
        echo "<td>" . $row['x2'] . "</td>";
        echo "<td>" . $row['fx1'] . "</td>";
        echo "<td>" . $row['fx2'] . "</td>";
        echo "<td>" . $row['x3'] . "</td>";
        echo "<td>" . $row['fx3'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "Tabel 'regulafalsi' tidak ditemukan dalam database.";
}
        
echo "</table>";
echo "<br>";
echo "<br>";
echo("Maka Akar-nya adalah nilai X3 terakhir");

echo "<br>";
echo "<br>";
echo "<br>";


?>
