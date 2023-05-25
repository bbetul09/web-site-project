<?php include_once "header.php"; 

$kategori = $baglan->prepare("SELECT * FROM kategori order by sira asc");
$kategori->execute();


?>

    <section class="container-fluid" id="section1">
      <div class="container  section1-container">
        <div class="kategori-kapsayici">
          <div class="row">
          <div class="col-12">
                <div class="kart text-center">
                  
               <a href="" style="background: url(resimler/banner-img-2.jpg); "><p class="kategori-isim1"> Kampanyalı Ürünler</p>  </a>
                </div>
              </div>


          <?php  while($kategoricek = $kategori->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="col-6">
                <div class="kart text-center">
                  
               <a href="urunler.php?katid=<?= $kategoricek["id"] ?>" style="background: url(resimler/kategori/<?= $kategoricek["resim"] ?>);"><p class="kategori-isim"><?=  $kategoricek["baslik"] ?></p>  </a>
                </div>
              </div>
              <?php } ?>
              
          </div>
        </div>
      </div>
    </section>


  
<?php include "footer.php" ?>