<?php 
include 'admin/database.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM kesan WHERE id = '$id'");
if ( mysqli_affected_rows($conn) > 0 ){
    echo "<script>
        alert('Pesanmu berhasil dihapus');
        document.location.href = 'kesan.php';
    </script>";
} else {
    echo "<script>
        alert('Pesanmu gagal dihapus');
        document.location.href = 'kesan.php';
    </script>";
}
?>