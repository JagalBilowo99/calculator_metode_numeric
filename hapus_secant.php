<?php
include('conection.php');
$query_delete = "TRUNCATE TABLE secant";
mysqli_query($koneksi, $query_delete);

if ($query_delete) {
    header("Location: secant.php");
    exit; 
} else {echo "Terjadi kesalahan saat menghapus data.";
}
?>
