<?php   include_once "./admin/baglanti.php"; ?>

<?php 
 $logo = $baglan->prepare("SELECT * FROM logo ");
 $logo->execute();
 $logocek = $logo->fetch(PDO::FETCH_ASSOC);

 $background = $baglan->prepare("SELECT * FROM background ");
 $background->execute();
 $backgroundcek = $background->fetch(PDO::FETCH_ASSOC);

  $kategori = $baglan->prepare("SELECT * FROM kategori order by sira asc");
  $kategori->execute();

 

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="urun-detay.css" />
    <script src="jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"/>
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,300;1,400&family=Playfair:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </head>
  <body style="background: url(./resimler/background/<?= $backgroundcek["background"] ?>);">
    <div class="wrapper">


    <nav class="navbar navbar-dark  fixed-top shadow">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="background: url(resimler/logo/<?= $logocek["logo"] ?>);" ></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasDarkNavbar"
          aria-controls="offcanvasDarkNavbar"
          aria-label="Toggle navigation"
        >
        <i class="fa-solid fa-bars"></i>
        </button>
        <div
          class="offcanvas offcanvas-end acilir-menu"
          tabindex="-1"
          id="offcanvasDarkNavbar"
          aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <button
              type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
           
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <?php while($kategoricek = $kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="kategori">
                  <a class="nav-link" aria-current="page" href="#"><?= $kategoricek["baslik"] ?></a>

                  <ul class="urunler">
                    <?php 
                     $urunler = $baglan->prepare("SELECT * FROM urunler where katid=? order by sira asc");
                     $urunler->execute(array($kategoricek["id"]));
                    while($urunlercek = $urunler->fetch(PDO::FETCH_ASSOC)) { ?>
                    <li class="urun"><a class="urunler-link" href="urun-detay.php?id=<?= $urunlercek["id"] ?>"><?= $urunlercek["baslik"] ?></a></li>
                   <?php  } ?>
                  </ul>
                </div>
              <?php } ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>