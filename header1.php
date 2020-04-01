<head>
<style>
a {
    color: white;
    text-decoration: none;
}
a:hover{
    color: khaki;
}
.nav:hover {
    background-color: teal;
}
h1 {
    font-family: 'Helvetica';
}
h2 {
    font-family: 'Helvetica';
}
h3 {
    font-family: 'Helvetica';
}
p {
    font-family: 'Helvetica';
}
label {
    font-family: 'Helvetica';
}
.sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
}
</style>
</head>
<body>
    <div class="menu sticky-top" style="display: flex; background-color: seagreen;">
        <ul type="none" style="display: flex; margin-right: 725px;">
            <li style="margin-top: -15px; margin-bottom: -15px; padding-top: 15px" class="nav"><a href="beranda" style="margin-right: 7px; margin-left: 7px; color: white; text-decoration: none; font-family: 'Helvetica'">BERANDA</a></li>
            <li style="margin-top: -15px; margin-bottom: -15px; padding-top: 15px" class="nav"><a href="kesan" style="margin-right: 7px; margin-left: 7px; color: white; text-decoration: none; font-family: 'Helvetica'">PESAN & KESAN</a></li>
            <li style="margin-top: -15px; margin-bottom: -15px; padding-top: 15px" class="nav"><a href="tentang" style="margin-right: 7px; margin-left: 7px; color: white; text-decoration: none; font-family: 'Helvetica'">KONTAK</a></li>
        </ul>
        <form action="cari.php" method="get" style="margin-top: 12px;">
            <input type="text" name="cari" placeholder="Masukkan Keyword">
            <button type="submit" name="search">Cari</button>
        </form>
    </div>
</body>