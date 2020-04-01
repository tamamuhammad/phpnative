<?php 
include 'admin/database.php';
include 'header.php';

$page = ( isset ($_GET['halaman']))? $_GET['halaman']: 'main';
switch ( $page ){
    case 'beranda':include 'beranda.php';break;
    case 'kesan':include 'kesan.php';break;
    case 'tentang':include 'tentang.php';break;
    case 'main': include 'beranda.php';
}
?>