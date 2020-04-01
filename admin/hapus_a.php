<?php 
include 'database.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM artikel WHERE id = '$id'");
if ( mysqli_affected_rows($conn) > 0 ){
    echo "<script>
        alert('Artikel berhasil dihapus');
        document.location.href = 'artikel.php';
    </script>";
} else {
    echo "<script>
        alert('Artikel gagal dihapus');
        document.location.href = 'artikel.php';
    </script>";
}
?>