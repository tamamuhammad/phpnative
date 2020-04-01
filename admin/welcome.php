<?php 
include 'database.php';
include 'header.php';
$user = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM mimin WHERE id = '$user'");
$row = mysqli_fetch_assoc($result);
?>
<body>
    <h1 style="text-align: center; text-transform: uppercase;">SELAMAT DATANG, <?php echo $row["nama"]?></h1>
</body>