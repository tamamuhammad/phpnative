<?php 
session_start();
include 'database.php';
if ( isset ($_SESSION['login'])){
    header ('Location: index.php');
    exit;
}
if ( isset ($_POST["login"]) ){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM mimin WHERE username = '$username'");
    if ( mysqli_num_rows($result) === 1 ){
        $row = mysqli_fetch_assoc($result);
        if ( $password === $row['password']){
            $_SESSION["login"] = true;
            ?>
            <script>
            document.location.href = 'index.php?id=<?php echo $row['id'] ?>';
            </script>
            <?php
            exit;
        }
        $error = true;
    }
    $error = true;
}
?>
<head>
    <title>Login Admin</title>
</head>
<body>
    <div class="header">
        <h1 style="text-align: center; margin-bottom: 0; margin-top: 25px; font-family: 'Helvetica'">LOG IN ADMIN</h1>
        <hr>
    </div>
    <p><?php 
    if ( isset ($error) ){
        echo "USERNAME/PASSWORD SALAH!";
    }
    ?></p>
    <div style="margin-left: 37%; border: 1px solid black; width: 350px; margin-top: 100px; border-radius: 10px;">
    <form action="" method="post" style="padding: 15px;">
        <label style="font-family: 'Helvetica'; ">USERNAME :</label><br>
        <input type="text" name="username" placeholder="Masukkan Username" style="margin-bottom: 50px; width: 300px; height: 50px; border-radius: 10px; padding-left: 5px; margin-top: 10px;"><br>
        <label style="font-family: 'Helvetica'; ">PASSWORD :</label><br>
        <input type="password" name="password" placeholder="Masukkan Password" style="margin-bottom: 50px; width: 300px; height: 50px; border-radius: 10px; padding-left: 5px; margin-top: 10px;"><br>
        <button style="border-radius: 10px; background-color: seagreen; width: 200px; height: 50px; margin-left: 15%" name="login" type="submit">LOGIN</a></button><br>
    </form>
    </div>
</body>