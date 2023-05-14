
<?php  include_once "header.php";



 ?>
    <section id="slider" class="container-fluid" style="background: url(./resimlerSite/slider/<?= $slidercek["resim"] ?>);">

        <div class="overlay">
            <h1 class="wow fadeInDown"><?= $slidercek["baslik"] ?></h1>
            <h3 class="wow fadeInUp"><?= $slidercek["alt_baslik"] ?></h3>
            <a class="wow fadeInUp" data-wow-delay=".3s"  href="./menu/anasayfa"><?= $slidercek["buton_ismi"] ?></a>
        </div>


    </section>

    <section class="container-fluid" id="bolum1">
        <div class="container">
            <div class="text-center hakkimizda-baslik">
                <h3>Hakkımızda <br>
                <hr style="color: black;"> </h3>
            </div>
            <div class="row">
                <div class="col-lg-6 " >
                    <div class="hakkimizda-resim wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="background: url(./resimlerSite/hakkimizda/<?= $hakkimizdacek["resim"] ?>);">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hakkimizda-aciklama wow fadeInDown"data-wow-duration="1s" data-wow-delay="0.1s">
                        <h4><?= $hakkimizdacek["baslik"] ?></h4>
                        <p><?= $hakkimizdacek["aciklama"] ?></p>

                    </div>
                </div>
            </div>

        </div>
    </section>


   

    <section class="container-fluid bolum3" id="galeri">
        <div class="galeri">
            <h3>Galeri</h3>
        </div>

        <div class="kapsayici">

            <div class="row" style="width: 100%; margin: 0 !important;">

            <?php while($galericek = $galeri->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="col-lg-4 col-md-6 ">
                    <div class="galeri-resim">
                        <img src="resimlerSite/galeri/<?= $galericek["resim"] ?>" alt="">
                    </div>
                </div>
<?php  }?>
             

            </div>

        </div>


    </section>

    <section class="container-fluid" id="bolum2" >
        <div class="overlay2">
            <h5 class="wow fadeInRight">Menümüze Göz Atmak İster misiniz ?</h5>
            <a class="menu-buton wow fadeInLeft" href="./menu/anasayfa">Menü</a>
        </div>

    </section>

    <span class="yukari"><i class="fa-sharp fa-solid fa-arrow-up"></i></span>

    <footer class="container-fluid " id="footer">
        <div class="container footer">
            <h6 class="footer-baslik">İletişim Bilgileri</h6>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <div class="footer-sec-1">
                        <h6>Adres Bilgilerimiz</h6>
                        <p><span>Adres:</span><?= $ayarlarcek["adres"] ?></p>

                        <p><span>Tel No:</span> <a style="text-decoration: none; color:#c5c5c5;" href="tel:<?= $ayarlarcek["tel"] ?>"><?= $ayarlarcek["tel"] ?></a></p>
                    </div>

                </div>
                <div class="col-md-4">
                   
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.687593892498!2d29.08369341195214!3d37.773922812091456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c73f5ecd44880b%3A0xa2de0bdbe1f5967f!2sFix%20kebap%20kahvalt%C4%B1!5e0!3m2!1str!2str!4v1683639330445!5m2!1str!2str" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  

                </div>
                <div class="col-md-4">
                    <div class="footer-sec-1">
                        <h6>Sosyal Medya Hesaplarımız</h6>
                    <div class="medya text-center">
                     <a href="<?= $ayarlarcek["insta"] ?>">   <i style="color:white;" class="fa-brands fa-instagram"></i></a>
                     <?php if($ayarlarcek["face"] == "") { ?>
                    <?php echo "" ?>
                   <?php }else { ?>
                    <?php  echo  "<a href='$ayarlarcek[face] '>  <i class='fa-brands fa-facebook'></i></a>" ?>
                    <?php } ?>
                     <p>Afiyet Olsun...</p>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <div class="isot-lahmacun">
            <p>@Fix Kebap Kahvaltı</p>
    </div>
    <?php  include_once "footer.php"; ?>
