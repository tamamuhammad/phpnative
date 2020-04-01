<?php 
include 'database.php';
$result = mysqli_query($conn, "SELECT * FROM artikel");
while ($row = mysqli_fetch_assoc($result)):
?>
<body>
<h1><?= $row["judul"]?></h1>
<table border="1">
        <tr>
            <th>NO.</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>KOMENTAR</th>
            <th>OPSI</th>
        </tr>
        <tr>
        <?php 
        $i = 1;
        $ida = $row["id"];
        $result2 = mysqli_query($conn, "SELECT * FROM komentar WHERE id_artikel = $ida");
        while ( $row2 = mysqli_fetch_assoc($result2) ):
        ?>
            <td><?php echo $i?></td>
            <td><?php echo $row2["nama"]?></td>
            <td><?php echo $row2["email"]?></td>
            <td><?php echo $row2["komentar"]?></td>
            <td><a href="hapus_c.php?id=<?php echo $row2['id']?>" style="color:black">HAPUS</a></td>
        </tr>
        <?php 
        $i++;
        endwhile;
        ?>
    </table>
    <a href="input_c.php">BUAT KOMENTAR</a>
    <?php
    endwhile;
    ?>
</body>