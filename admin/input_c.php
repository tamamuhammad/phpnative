<?php 
include 'database.php';
if ( isset ($_POST["buat"]) ){
    $admin = "admin";
    $email = "admin@gmail.com";
    $komentar = $_POST["komentar"];
    $result = mysqli_query($conn, "INSERT INTO komentar VALUES ('', '$admin', '$email', '$komentar')");
    if ( mysqli_affected_rows($conn) > 0 ){
        echo "<script>
            alert('Komentar berhasil dibuat');
            document.location.href = 'komentar.php';
        </script>";
    } else {
        echo "<script>
            alert('Komentar gagal dibuat');
            document.location.href = 'komentar.php';
        </script>";
}
}
?>
<body>
    <h1>BUAT KOMENTAR</h1>
    <form action="" method="post">
        <label>KOMENTAR :</label><br>
        <input type="text" name="komentar">
        <button type="submit" name="buat">BUAT KOMENTAR</button>
    </form>
</body>