<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PROJECT | UTS PBWL</title>

      <link rel="shortcut icon" href="layouts/assets/img/fotocopy.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/fotocopy.png" class="brand">
                  <div class="user">JAYA FOTOCOPY</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=kat_tampil">
                                    <img class="icon" src="layouts/assets/img/produk.png" alt=""> Produk kami
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=post_tampil">
                                    <img class="icon" src="layouts/assets/img/penjualan.png" alt=""> penjualan
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=foto_tampil">
                                    <img class="icon" src="layouts/assets/img/transaksi.png" alt=""> transaksi
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";
                  require_once "app/foto.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Jaya Fotocopy by <b>Wahyu Putra Prayuda (0702212121)</b>
            </footer>
      </main>

</body>

</html>