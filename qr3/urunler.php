<?php include_once "header.php" ?>
<?php 
$katid = $_GET["katid"];
$urun = $baglan->prepare("SELECT * FROM urunler where katid=?");
$urun->execute(array($katid))


?>

<section class="container-fluid" id="section1">
      <div class="container shadow section1-container">
        <div class="kategori-kapsayici">
          <div class="row">

          <?php  while($uruncek = $urun->fetch(PDO::FETCH_ASSOC)){ ?>
            <div class="col-6">
                <div class="kart text-center">
               <a href="urun-detay.php?id=<?= $uruncek["id"] ?>" style="background: url(resimler/urunler/<?= $uruncek["resim"] ?>);"> <p class="kategori-isim"><?= $uruncek["baslik"] ?></p>  <span class="urun-fiyat"><?= $uruncek["fiyat"] ?> ₺ </span> </a>
                  
                  
                </div>
              </div>
              <?php } ?>
             
          </div>
        </div>
      </div>
    </section>




<?php include_once "footer.php" ?>


</body>
</html>