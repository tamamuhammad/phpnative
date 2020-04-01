<?php 
include 'database.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM kategori WHERE id = '$id'");
if ( mysqli_affected_rows($conn) > 0 ){
    echo "<script>
        alert('Kategori berhasil dihapus');
        document.location.href = 'kategori.php';
    </script>";
} else {
    echo "<script>
        alert('Kategori gagal dihapus');
        document.location.href = 'kategori.php';
    </script>";
}
?>