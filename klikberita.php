<?php
require 'proses_berita.php';
// ambil dat di url--
$ID = $_GET["ID"];
// query data mahasiswa berdasarka ID
$artikel =query("SELECT *FROM artikel WHERE ID = $ID")[0];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Mahardika Arya Bimantara">
    <title>Gemuruh Web Desa | About</title>
  </head>
  <link rel="stylesheet" href="css/about.css">

  <body>
    <header>
        <div class="container">
          <div id="Branding">
            <h1><span class="highlight">Gemuruh</span> Web desa</h1>
          </div>
          <nav>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li class="current"><a href="About.html">About</a></li>
              <li><a href="Konten.php">Konten|Berita</a></li>
            </ul>
          </nav>
        </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>INFO | BERITA MASYARAKAT</h1>
          <h3><a href="logout.php" style="transform:translate(-20px, -70px);" onclick="return confirm('Yakin ingin LOG-OUT ?');">LogOut</a></h3>
        </div>
    </section>

    <section id="main">
      <div class="conatiner">
        <div class="box">
          <article class="" id="main-col">
          <center>
            <h1 class="page-title"><?= $artikel["Judul"]; ?></h1>
          </center><br><br>
              <p><?= $artikel["Isi"];  ?></p><br><br><br>
              <p>Ditulis Oleh : <?=$artikel["Penulis"];  ?></p>
              <h1><a href="konten.php">Kembali</a></h1>
          </article>
        </div>
      </div>
    </section>

    <footer style="margin-top:200px;">
      <p>Gemuruh Web Desa, Copyright &copy; 2018</p>
    </footer>
  </body>
</html>
