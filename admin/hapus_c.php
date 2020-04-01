<?php 
include 'database.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM komentar WHERE id = '$id'");
if ( mysqli_affected_rows($conn) > 0 ){
    echo "<script>
        alert('Komentar berhasil dihapus');
        document.location.href = 'komentar.php';
    </script>";
} else {
    echo "<script>
        alert('Komentar gagal dihapus');
        document.location.href = 'komentar.php';
    </script>";
}
?>