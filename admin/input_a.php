<?php 
include 'database.php';
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
if ( isset ($_POST["buat"]) ){
    $gambar = upload();
    $judul = $_POST["judul"];
    $kategori = $_POST["kategori"];
    $teks = $_POST["teks"];
    $result = mysqli_query($conn, "INSERT INTO artikel VALUES ('','$gambar','$judul','$kategori','$teks')");
    if ( mysqli_affected_rows($conn) > 0 ){
        echo "<script>
            alert('Artikel berhasil dibuat');
            document.location.href = 'artikel.php';
        </script>";
    } else {
        echo "<script>
            alert('Artikel gagal dibuat');
            document.location.href = 'artikel.php';
        </script>";
}
}
?>
<body>
    <h1>BUAT ARTIKEL</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label>GAMBAR HEADER :</label><br>
        <input type="file" name="gambar"><br>
        <label>JUDUL :</label><br>
        <input type="text" name="judul"><br>
        <label>KATEGORI :</label><br>
        <select name="kategori">
            <option selected disabled>PILIH KATEGORI</option>
            <?php 
            $result = mysqli_query($conn, "SELECT * FROM kategori");
            while ( $row = mysqli_fetch_assoc($result) ):?>
            <option value="<?php echo $row['id']?>"><?php echo $row['nama_kategori']?></option>
            <?php endwhile;?>
        </select><br>
        <label>KONTEN :</label><br>
        <textarea name="teks" cols="70" rows="20"></textarea><br>
        <button type="submit" name="buat">BUAT ARTIKEL</button>
    </form>
</body>