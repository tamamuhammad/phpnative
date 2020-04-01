<?php 
include 'admin/database.php';
include 'header1.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM artikel WHERE id = '$id'");
while ( $row = mysqli_fetch_assoc($result) ):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $row["judul"]?></title>
</head>
<body style="margin: 0;padding: 0;">
<div style="display: flex;">
    <div style="width: 75%;  margin-right: 15px; margin-left: 15px; text-align: justify;">
        <h1><?php echo $row["judul"]?></h1>
        <hr>
        <img src="admin/<?php echo $row['gambar']?>" alt="" style="margin-bottom: 10px;"><br>
        <small style="color:grey"><?php echo date('D, d - M - Y');?> | <?php $w = getdate(); echo $w['hours'].".".$w['minutes'].".".$w['seconds'];?></small>
        <hr>
        <p><?php echo $row["teks"]?></p>
        <h1>KOMENTAR</h1>
        <hr>
        <ul type="none">
        <?php 
        $ida = $row["id"];
        $result2 = mysqli_query($conn, "SELECT * FROM komentar WHERE id_artikel = $ida");
        while ( $row2 = mysqli_fetch_assoc($result2) ):?>
            <li style="font-family: 'Helvetica'"><h2><?php echo $row2['nama']?></h2></li>
            <li style="font-family: 'Helvetica'"><p style="border-bottom: 1px solid black; margin-top: -15px; color: grey; padding-bottom: 5px"><?php echo $row2['email']?></p></li>
            <li style="font-family: 'Helvetica'; margin-bottom: 15px;"><?php echo $row2['komentar']?></li>
            <button style="border-radius: 10px; background-color: seagreen; width: 100px; height: 30px;" name="hapus"><a href="hapus_c.php?id=<?php echo $row2['id'] ?>&id_artikel=<?php echo $row2['id_artikel']?>">HAPUS</a></button><br>
        <?php endwhile;?>
        </ul>
        <h1>MASUKKAN KOMENTAR</h1>
        <hr>
        <form action="komentar.php" method="post">
            <input type="hidden" name="id_a" value="<?php echo $row["id"]?>">
            <?php endwhile; ?>
            <div style="display: flex;">
                <div style="width: 50%;">
                    <label>NAMA :</label><br>
                    <input type="text" name="nama" placeholder="Masukkan Nama.." style="width: 97%; height: 50px; border-radius: 10px; margin-top: 15px; margin-bottom: 15px; padding-left: 5px;"><br>
                    <label>EMAIL :</label><br>
                    <input type="text" name="email" placeholder="Masukkan Email.." style="width: 97%; height: 50px; border-radius: 10px; margin-top: 15px; margin-bottom: 15px; padding-left: 5px;">
                </div>
                <div style="width: 50%; float: right;">
                    <label>KOMENTAR :</label><br>
                    <textarea name="komentar" cols="65" rows="9" placeholder="Masukkan Komentar" style="border-radius: 10px; margin-top: 15px; margin-bottom: 15px; padding-left: 5px;"></textarea><br>
                </div>
            </div>
            <button style="border-radius: 10px; background-color: seagreen; width: 100%; height: 50px;" name="publik" type="submit">KOMEN</a></button>
        </form>
    </div>
    <div style="width: 25%; float: right; background-color: seagreen; margin-top: 80px; height: 75%;">
        <div class="kontak">
            <h1 style="margin-left: 10px;">CONTACT US</h1>
            <ul type="none" style="background-color: chocolate; height: 175px; margin: 0; padding-top: 20px; ">
                <li style="margin-top: 20px; border-left: 2px solid saddlebrown; padding-left: 10px; text-transform: uppercase; font-family: 'Helvetica';">BOJONG, PEKALONGAN</li>
                <li style="margin-top: 20px; border-left: 2px solid saddlebrown; padding-left: 10px; text-transform: uppercase; font-family: 'Helvetica';">089688241425</li>
                <li style="margin-top: 20px; border-left: 2px solid saddlebrown; padding-left: 10px; text-transform: uppercase; font-family: 'Helvetica';">maztamam67@gmail.com</li>
            </ul>
        </div>
        <div class="sosmed">
            <h1 style="margin-left: 10px;">SOCIAL MEDIA</h1>
            <ul type="none" style="background-color: chocolate; height: 175px; margin: 0; padding-top: 20px; ">
                <li style="margin-top: 20px; border-left: 2px solid saddlebrown; padding-left: 10px; text-transform: uppercase; font-family: 'Helvetica';"><a href="http://fb.com/mukhtaz67">Muhammad Tamam</a></li>
                <li style="margin-top: 20px; border-left: 2px solid saddlebrown; padding-left: 10px; text-transform: uppercase; font-family: 'Helvetica';"><a href="http://t.co/eltamamiy">@eltamamiy</a></li>
                <li style="margin-top: 20px; border-left: 2px solid saddlebrown; padding-left: 10px; text-transform: uppercase; font-family: 'Helvetica';"><a href="http://instagram.com/tamam.elmukhammady">@tamam.elmukhammady</a></li>
            </ul>
            <video src="admin/food-intro.mp4" autoplay controls height="200" width = "320" style="margin: 10px; margin-right: 7px; "></video>
        </div>
    </div>
</div>
<?php include 'footer.php'?>
</body>
</html>