<?php 
include 'database.php';
$result = mysqli_query($conn, "SELECT * FROM kategori")
?>
<body>
    <table border="1">
        <tr>
            <th>NO.</th>
            <th>KATEGORI</th>
            <th>OPSI</th>
        </tr>
        <tr>
        <?php 
        $i = 1;
        while ( $row = mysqli_fetch_assoc($result) ):
        ?>
            <td><?php echo $i?></td>
            <td><?php echo $row["nama_kategori"]?></td>
            <td><a href="edit_k.php?id=<?php echo $row['id']?>" style="color: black">EDIT | </a><a href="hapus_k.php?id=<?php echo $row['id']?>" style="color: black">HAPUS</a></td>
        </tr>
        <?php 
        $i++;
        endwhile;
        ?>
    </table>
    <a href="input_k.php" style="color: black; margin-left: 45%; padding-bottom: 20px;">BUAT KATEGORI</a>
</body>