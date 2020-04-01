<?php
include 'database.php';
$result = mysqli_query($conn, "SELECT * FROM artikel");
?>
<body>
<table border="1" style="margin-bottom: 10px;">
        <tr>
            <th>NO.</th>
            <th>GAMBAR</th>
            <th>JUDUL</th>
            <th>KATEGORI</th>
            <th>TEKS</th>
            <th>OPSI</th>
        </tr>
        <tr>
        <?php 
        $i = 1;
        while ( $row = mysqli_fetch_assoc($result) ):
        $idk = $row['id_kategori'];
        ?>
            <th><?php echo $i; ?></th>
            <td><img src="<?php echo $row["gambar"]?>" width="100px"></td>
            <td><?php echo $row["judul"]?></td>
            <td>
            <?php 
            $sql = mysqli_query($conn, "SELECT * FROM kategori WHERE id = $idk");
            $col = mysqli_fetch_assoc($sql);
            echo $col['nama_kategori']
            ?>
            </td>
            <td><?php echo $row["teks"]?></td>
            <td><a href="edit_a.php?id=<?php echo $row['id']?>" style="color: black">EDIT | </a><a href="hapus_a.php?id=<?php echo $row['id']?>" style="color: black">HAPUS</a></td>
        </tr>
        <?php 
        $i++;
        endwhile;
        ?>
    </table>
    <a href="input_a.php" style="color: black; margin-left: 45%; padding-bottom: 20px;">BUAT ARTIKEL</a>
</body>