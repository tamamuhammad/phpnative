<?php 
include 'admin/database.php';
if ( isset ($_POST["publik"]) ){
    $id_a = $_POST['id_a'];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];
    $result = mysqli_query($conn, "INSERT INTO komentar VALUES ('','$id_a','$nama','$email','$komentar')");
    if ( mysqli_affected_rows($conn) > 0 ){
        echo "<script>
        alert('Komentar telah berhasil dimasukkan!');
        </script>";
        ?>
        <script>
        document.location.href = 'artikel.php?id=<?php echo $id_a ?>';
        </script>
    <?php
    } else {
        echo "<script>
        alert('Komentar gagal dimasukkan!');
        </script>";
        ?>
        <script>
        document.location.href = 'artikel.php?id=<?php echo $id_a ?>';
        </script>
    <?php
    }
}
?>