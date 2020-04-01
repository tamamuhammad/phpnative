<?php 
error_reporting(0);
session_start();
include 'database.php';
include 'header.php';
if ( !isset ($_SESSION["login"])){
    header("Location: login.php");
    exit;
    }
$user = $_GET['id'];
if ($user >= 1){
    $page = ( isset ($_GET['halaman']))? $_GET['halaman']: 'main';
        switch ( $page ){
            case 'artikel':include 'artikel.php';break;
            case 'kategori':include 'kategori.php';break;
            case 'komentar':include 'komentar.php';break;
            case 'main': ?><script>
            document.location.href = 'welcome.php?id=<?php echo $user?>';
            </script>;<?php
    }
} else {
    $page = ( isset ($_GET['halaman']))? $_GET['halaman']: 'main';
        switch ( $page ){
            case 'artikel':include 'artikel.php';break;
            case 'kategori':include 'kategori.php';break;
            case 'komentar':include 'komentar.php';break;
            case 'main': include 'artikel.php';break;
    }
}
?>