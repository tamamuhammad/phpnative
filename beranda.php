<?php 
include 'admin/database.php';
$result = mysqli_query($conn, "SELECT * FROM artikel");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BERANDA</title>
</head>
<body>
    <?php while ( $row = mysqli_fetch_assoc($result) ):
        $idk = $row['id_kategori'];
        ?>
    <div style="width: 97%; border: 1px solid black; margin-left: 15px; margin-bottom: 15px; margin-top: 15px">
    <img src="admin/<?php echo $row['gambar']?>" width="308px" style="float: right; margin: 0">
        <div style="padding: 15px; padding-top: 0px;">
            <h1><?php echo $row['judul']?></h1>
            <?php 
            $sql = mysqli_query($conn, "SELECT * FROM kategori WHERE id = $idk");
            $col = mysqli_fetch_assoc($sql)
            ?>
            <p>Category : <?php echo $col['nama_kategori']?></p>
            <p><?php echo substr($row['teks'], 0, 200)?>...</p><button style="border-radius: 10px; background-color: seagreen; width: 200px; height: 50px;"><a href="artikel.php?id=<?php echo $row['id'] ?>" target="_blank">LIHAT SELENGKAPNYA</a></button><br>
            
        </div>
    </div>
    <?php endwhile;?>
    <?php 
    include 'footer.php';
    ?>
</body>
</html>