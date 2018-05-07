<?php
require 'proses_berita.php';
$artikel = query("SELECT * FROM artikel ORDER BY ID DESC");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Mahardika Arya Bimantara">
    <title>Gemuruh Web Desa | Konten</title>
    <script type="text/javascript">
    // function openTab(open) {
    //   window.open(open);
    // }
    // </script>
  </head>

  <link rel="stylesheet" href="css/konten.css">

  <body>
    <header>
        <div class="container">
          <div id="Branding">
            <h1><span class="highlight">Gemuruh</span> Web desa</h1>
          </div>
          <nav>
            <ul>
              <li><a href="indexafter.html">Home</a></li>
              <li ><a href="About.html">About</a></li>
              <li class="current"><a href="Konten.php">Konten|Berita</a></li>
            </ul>
          </nav>
        </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>Berita dan Artikel</h1>
          <h3>Temukan hal yang menarik </h3>
          <h3><a href="Tambah_berita.php" style="transform:translate(0, -70px);">Tulis Berita</a></h3>
          <h3><a href="logout.php" style="transform:translate(-20px, -70px);" onclick="return confirm('yakin ingin log-out ?');">LogOut |</a></h3>
          <h3><a href="dashboard.php" style="transform:translate(-50px, -70px);" target="_blank">Dashboard Admin |</a></h3>
      </div>
    </section>

    <section id="main">
      <div class="conatiner"  style="
        margin-bottom:-37px;
        transform:translateY(-17px);
        background-color:#ccc;
      ">
          <article class="" id="main-col">
              <?php $i = 1; foreach ( $artikel as $row ) : ?>
                <?php if ($i == 1): ?>
                  <div class="box">
                    <div class="new">
                      <!-- <img src="" alt=""> -->
                      <h3><?= $row["Judul"]; ?></h3>
                      <p>Di tulis oleh : <?= $row["Penulis"];  ?></p><hr>
                      <p><?= substr($row["Isi"],0, 40);  ?>....</p>
                      <a href="klikberita.php?ID=<?= $row["ID"];?>" style="text-decoration:none;"><button type="button" name="button">Read-more</button></a>
                    </div>
                  </div>
                  <?php $i++; else: ?>
                    <section id="boxes">
                        <div class="box">
                          <div class="last">
                            <!-- <img src="" alt=""> -->
                            <h3><?= $row["Judul"]; ?></h3>
                            <p>Di tulis oleh : <?= $row["Penulis"];  ?></p><hr>
                            <p><?= substr($row["Isi"],0, 40);  ?>....</p>
                            <a href="klikberita.php?ID=<?= $row["ID"];?>" style="text-decoration:none;"><button type="button" name="button">Read-more</button></a>
                          </div>
                        </div>

                    </section>
                <?php endif; ?>

              <?php endforeach; ?>

          </article>
          <aside class="sidebar">
            <div class="dark">
            </div>
          </aside>
        </div>
      </div>
    </section>

    <footer>
      <p>Gemuruh Web Desa, Copyright &copy; 2018</p>
    </footer>
  </body>
</html>
