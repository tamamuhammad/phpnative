<?php 
include 'database.php';
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM artikel WHERE id = '$id'");
function upload(){
    $nama = $_FILES["gambar"]["name"];
    $error = $_FILES["gambar"]["error"];
    $tmp = $_FILES["gambar"]["tmp_name"];
    if ( $error === 4 ){
        echo "<script>
            alert('Pilih Gambar Dulu!');
        </script>";
    }
    move_uploaded_file ( $tmp, ''.$nama );
    return $nama;
}
if ( isset ($_POST["edit"]) ){
    $ida = $_POST['id'];
    $gambarlama = $_POST['gambarlama'];
    if ( $_FILES["gambar"]["error"] === 4 ){
    $gambar = $gambarlama;
    } else {
    $gambar = upload();
}
    $judul = $_POST["judul"];
    $kategori = $_POST['kategori'];
    $teks = $_POST["teks"];
    $result = mysqli_query($conn, "UPDATE artikel SET gambar = '$gambar', judul = '$judul', id_kategori = '$kategori', teks = '$teks' WHERE id = '$ida'");
    if ( mysqli_affected_rows($conn) >= 0 ){
        echo "<script>
            alert('Artikel berhasil diedit');
            document.location.href = 'artikel.php';
        </script>";
    } else {
        echo "<script>
            alert('Artikel gagal diedit');
            document.location.href = 'artikel.php';
        </script>";
}
}
?>

<body>
    <h1>EDIT ARTIKEL</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <?php while ( $row = mysqli_fetch_assoc($sql) ):?>
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <input type="hidden" name="gambarlama" value="<?php echo $row['gambar']?>">
        <label>GAMBAR HEADER :</label><br>
        <img src="<?php echo $row['gambar']?>" alt="" width="100"><br><br>
        <input type="file" name="gambar" value="<?php echo $row['gambar']?>"><br>
        <label>JUDUL :</label><br>
        <input type="text" name="judul" value="<?php echo $row['judul']?>"><br>
        <label>KATEGORI :</label><br>
        <?php
        $idk = $row['id_kategori']; 
        ?>
        <select name="kategori">
            <option selected value="<?php echo $row['id_kategori']?>">
            <?php $kat = mysqli_query($conn, "SELECT * FROM kategori WHERE id = '$idk'");
            $row2 = mysqli_fetch_assoc($kat);?>
            <?php echo $row2['nama_kategori']?></option>
            <?php $kat = mysqli_query($conn, "SELECT * FROM kategori");
            while ($row2 = mysqli_fetch_assoc($kat)){?>
            <option value="<?php echo $row2['id']?>"><?php echo $row2['nama_kategori']?></option>
            <?php } ?>
        </select><br>
        <label>KONTEN :</label><br>
        <textarea name="teks" cols="70" rows="20" ><?php echo $row['teks']?></textarea><br>
        <button type="submit" name="edit">EDIT ARTIKEL</button>
    <?php endwhile;?>
    </form>
</body>