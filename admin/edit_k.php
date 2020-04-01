<?php 
include 'database.php';
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM kategori where id = '$id'");
if ( isset ($_POST["edit"])){
    $id = $_POST['id'];
    $kategori = $_POST["kategori"];
    $result = mysqli_query($conn, "UPDATE kategori SET nama_kategori='$kategori' WHERE id = '$id'");
    if ( mysqli_affected_rows($conn) > 0 ){
        echo "<script>
            alert('Kategori berhasil diedit');
            document.location.href = 'kategori.php';
        </script>";
    } else {
        echo "<script>
            alert('Kategori gagal diedit');
            document.location.href = 'kategori.php';
        </script>";
}
}
?>
<body>
    <h1>EDIT KATEGORI</h1>
    <form action="" method="post">
        <?php while ( $row = mysqli_fetch_assoc($sql)): ?>
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <label>KATEGORI :</label><br>
        <input type="text" name="kategori" value="<?php echo $row['nama_kategori']?>">
        <button type="submit" name="edit">EDIT KATEGORI</button>
        <?php endwhile;?>
    </form>
</body>