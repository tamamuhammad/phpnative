<?php 
include 'admin/database.php';
$id = $_GET['id'];
$id_a = $_GET['id_artikel'];
$result = mysqli_query($conn, "DELETE FROM komentar WHERE id = '$id'");
if ( mysqli_affected_rows($conn) > 0 ){
    echo "<script>
    alert('Komentar telah berhasil dihapus!');
    </script>";
    ?>
    <script>
    document.location.href = 'artikel.php?id=<?php echo $id_a ?>';
    </script>
<?php
} else {
    echo "<script>
    alert('Komentar gagal dihapus!');
    </script>";
    ?>
    <script>
    document.location.href = 'artikel.php?id=<?php echo $id_a ?>';
    </script>
<?php
}
?>