<?php 
include 'admin/database.php';
$result = mysqli_query($conn, "SELECT * FROM kesan");
if ( isset ($_POST["publik"])){
    $nama = $_POST["nama"];
    $kesan = $_POST["kesan"];
    $sql = mysqli_query($conn, "INSERT INTO kesan VALUES ('','$nama','$kesan')");
    if ( mysqli_affected_rows($conn) > 0 ){
        echo "<script>
            alert('Pesan anda telah dipublikasikan!');
            document.location.href = 'kesan.php';
        </script>";
    } else {
        echo "<script>
            alert('Pesan anda gagal dipublikasikan!');
            document.location.href = 'kesan.php';
        </script>";
    }
}
?>
<head>
    <title>PESAN KESAN</title>
</head>
<body>
    <h1>PESAN & KESAN</h1>
    <hr>
    <ul type="none">
    <?php while ( $row = mysqli_fetch_assoc($result) ):?>
        <li style="font-family: 'Helvetica'"><h2 style="border-bottom: 1px solid black;"><?php echo $row['nama']?></h2></li>
        <li style="font-family: 'Helvetica'; margin-bottom: 15px; margin-top: -10px;"><?php echo $row['pesan']?></li>
        <button style="border-radius: 10px; background-color: seagreen; width: 100px; height: 30px;"><a href="hapus.php?id=<?php echo $row['id'] ?>">HAPUS</a></button><br>
    <?php endwhile;?>
    </ul>
    <h3>Masukkan Pesan Kesanmu ...</h3>
    <hr>
    <form action="" method="post">
        <label>NAMA :</label><br>
        <input type="text" name="nama" style="width: 100%; height: 50px; border-radius: 10px; margin-top: 15px; margin-bottom: 15px; padding-left: 5px;"><br>
        <label>PESAN/KESAN</label><br>
        <textarea name="kesan" cols="189" rows="10" style="border-radius: 10px; margin-top: 15px; margin-bottom: 15px; padding-left: 5px;"></textarea><br>
        <button type="submit" name="publik" style="border-radius: 10px; background-color: seagreen; width: 100%; height: 50px;">PUBLIKASIKAN</button>
    </form>
    <?php include 'footer.php';?>
</body>
</html>