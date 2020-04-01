<?php 
include 'database.php';
if ( isset ($_POST["buat"]) ){
    $kategori = $_POST["kategori"];
    $result = mysqli_query($conn, "INSERT INTO kategori VALUES ('','$kategori')");
    if ( mysqli_affected_rows($conn) > 0 ){
        echo "<script>
            alert('Kategori berhasil dibuat');
            document.location.href = 'kategori.php';
        </script>";
    } else {
        echo "<script>
            alert('Kategori gagal dibuat');
            document.location.href = 'kategori.php';
        </script>";
}
}
?>
<body>
    <h1>BUAT KATEGORI</h1>
    <form action="" method="post">
        <label>KATEGORI :</label><br>
        <input type="text" name="kategori">
        <button type="submit" name="buat">BUAT KATEGORI</button>
    </form>
</body>