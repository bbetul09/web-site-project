<?php include_once "header.php" ?>
<?php
    $id = $_GET["id"];
    $urun = $baglan->prepare("SELECT * FROM urunler where id=?");
    $urun->execute(array($id));
    $uruncek = $urun->fetch(PDO::FETCH_ASSOC);


?>
<section class="container-fluid" id="urun-detay">
            <div class="urun-background"  style="background: url(resimler/urunler/<?=  $uruncek["resim"]?>) ; ">
                <!-- sadece background -->
            </div>
            <div class="container">
                <h2 class="urun-baslik"><?= $uruncek["baslik"] ?>   </h2>
                <hr>
                <p class="urun-icerik"><?= $uruncek["icindekiler"] ?> </p>
                <a class="geri-don" href="javascript:history.back()">Geri Dön</a>
            </div>
</section>



<?php include_once "footer.php" ?>