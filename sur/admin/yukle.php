<?php include_once "baglanti.php";
// ayarlar baslangıc


ob_start();
session_start();
if (isset($_POST["ayarlarkaydet"])) {
  
       
   
    $adsoyad = $_POST["adsoyad"];
    $mail = $_POST["mail"];
    $tel = $_POST["tel"];
    $insta = $_POST["insta"];
    $face = $_POST["face"];
    $adres = $_POST["adres"];




    $ayarlarduzenle = $baglan->prepare("UPDATE ayarlar SET  
   ad_soyad=?,
   mail=?,
   tel=?,
   insta=?,
   face=?,
   adres=?
  
    where id=1
     ");

    $update = $ayarlarduzenle->execute(array(
        $adsoyad,
        $mail,
        $tel,
        $insta,
        $face,
        $adres
    ));

    if ($update) {
        
        header("Location:ayarlar.php?&durum=ok");
    } else {
        header("Location:ayarlar.php?&durum=no");
    }

 

}
// ayarlar bitiş 

// hakkimizda baslangic

if (isset($_POST["hakkimizdakaydet"])) {
    if ($_FILES["resim"]["size"] > 0) {

        $baslik = $_POST["baslik"];
        $aciklama = $_POST["aciklama"];

        $uploads_dir = '../resimlerSite/hakkimizda';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']['name'];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");



        $hakkimizdaduzenle = $baglan->prepare("UPDATE hakkimizda SET  
        resim=?,
        baslik=?,
        aciklama=?
        
        where id=1 ");

        $update = $hakkimizdaduzenle->execute(array(
            $resimadi,
            $baslik,
            $aciklama
        ));

        if ($update) {
            $sil = @$_POST["eskiresim"];
            unlink("../resimlerSite/hakkimizda/$sil");
            header("Location:hakkimizda.php?durum=ok");
        } else {
            header("Location:hakkimizda.php?durum=no");
        }
    } else {
       
        $baslik = $_POST["baslik"];
        $aciklama = $_POST["aciklama"];



        $hakkimizdaduzenle = $baglan->prepare("UPDATE hakkimizda SET  
       
        baslik=?,
        aciklama=?
        
        where id = 1 ");

        $update = $hakkimizdaduzenle->execute(array(
         
            $baslik,
            $aciklama
        ));

        if ($update) {
       
            header("Location:hakkimizda.php?durum=ok");
        } else {
            header("Location:hakkimizda.php?durum=no");
        }
    }
}
// hakkimizda bitiş

// logo-site baslangıc

if (isset($_POST["logoSitekaydet"])) {
    if ($_FILES["resim"]["size"] > 0) {



        $uploads_dir = '../resimlerSite/logo-site';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']['name'];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");



        $logoduzenle = $baglan->prepare("UPDATE sitelogo SET 
         resim=?
         
          where id=1");

        $update = $logoduzenle->execute(array(
            $resimadi
        ));

        if ($update) {
            $sil = @$_POST["eskiresim"];
            unlink("../resimlerSite/logo-site/$sil");
            header("Location:logo-site.php?durum=ok");
        } else {
            header("Location:logo-site.php?durum=no");
        }
    } else {
        header("Location:logo.php");
    }
}

// logo site bitiş

// slider baslangıc 

if (isset($_POST["sliderkaydet"])) {
    if ($_FILES["resim"]["size"] > 0) {

        $baslik = $_POST["baslik"];
        $altbas = $_POST["altbas"];
        $buton = $_POST["buton"];

        $uploads_dir = '../resimlerSite/slider';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']['name'];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");



        $sliderduzenle = $baglan->prepare("UPDATE slider SET  
        resim=?,
        baslik=?,
        alt_baslik=?,
        buton_ismi=?
        
        where id=1 ");

        $update = $sliderduzenle->execute(array(
            $resimadi,
            $baslik,
            $altbas,
            $buton
        ));

        if ($update) {
            $sil = @$_POST["eskiresim"];
            unlink("../resimlerSite/slider/$sil");
            header("Location:slider.php?durum=ok");
        } else {
            header("Location:slider.php?durum=no");
        }
    } else {
       
        $baslik = $_POST["baslik"];
        $altbas = $_POST["altbas"];
        $buton = $_POST["buton"];

        $sliderduzenle = $baglan->prepare("UPDATE slider SET  
       
       baslik=?,
        alt_baslik=?,
        buton_ismi=?
        
        where id = 1 ");

        $update = $sliderduzenle->execute(array(
         
            $baslik,
            $altbas,
            $buton
        ));

        if ($update) {
       
            header("Location:slider.php?durum=ok");
        } else {
            header("Location:slider.php?durum=no");
        }
    }
}

// slider bitiş

// galeri baslangic
if (isset($_POST["galerikaydet"])) {

    if ($_FILES["resim"]["size"] > 0) {

        $sira = $_POST["sira"];

        $uploads_dir = '../resimlerSite/galeri';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']['name'];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $galeriEkle = $baglan->prepare("INSERT INTO galeri SET resim=?,sira=?");

        $ekle = $galeriEkle->execute(array(
            $resimadi,
            $sira
        ));


        if ($ekle) {
            header("Location:galeri.php?durum=ok");
        } else {
            header("Location:galeri.php?durum=no");
        }
    } else {
        header("Location:galeri.php?durum=eksik");
    }
}

if (isset($_POST["galeriduzenle"])) {
    if ($_FILES["resim"]["size"] > 0) {
        $id = $_POST["id"];
        $sira = $_POST["sira"];
       

        $uploads_dir = '../resimlerSite/galeri';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']['name'];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");



        $galeriduzenle = $baglan->prepare("UPDATE galeri SET  
        resim=?,
        sira=?
       
        where id=$id
         ");

        $update = $galeriduzenle->execute(array(
            $resimadi,
            $sira
          
        ));

        if ($update) {
            $sil = @$_POST["eskiresim"];
            unlink("../resimlerSite/galeri/$sil");
            header("Location:galeri.php?&durum=ok");
        } else {
            header("Location:galeri.php?&durum=no");
        }
    } else {
        $id = $_POST["id"];
      
        $sira = $_POST["sira"];

        $galeriduzenle = $baglan->prepare("UPDATE galeri SET  
       
       
        sira=?
        where id=$id         ");

        $update = $galeriduzenle->execute(array(

            
            $sira

        ));

        if ($update) {

            header("Location:galeri.php?&durum=ok");
        } else {
            header("Location:galeri.php?&durum=no");
        }
    }
}

if (isset($_POST["galerisil"])) {
    $id = $_POST["id"];
    $resim = $_POST["resim"];

    $galerisil = $baglan->prepare("DELETE FROM galeri where id=$id");
    $delete = $galerisil->execute();
  



    if ($delete) {
        unlink("../resimlerSite/galeri/$resim");
        header("Location:galeri.php?durum=ok");
    } else {
        header("Location:galeri.php?durum=no");
    }
}


// logo baslangic

if (isset($_POST["logokaydet"])) {

    if ($_FILES["resim"]["size"] > 0) {



        $uploads_dir = '../resimler/logo';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']['name'];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $logoEkle = $baglan->prepare("INSERT INTO logo SET logo=?");

        $ekle = $logoEkle->execute(array(
            $resimadi

        ));


        if ($ekle) {
            header("Location:logo.php?durum=ok");
        } else {
            header("Location:logo.php?durum=no");
        }
    } else {
        header("Location:logo.php?durum=eksik");
    }
}


if (isset($_POST["logoduzenle"])) {
    if ($_FILES["resim"]["size"] > 0) {



        $uploads_dir = '../resimler/logo';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']['name'];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");



        $logoduzenle = $baglan->prepare("UPDATE logo SET  logo=? ");

        $update = $logoduzenle->execute(array(
            $resimadi
        ));

        if ($update) {
            $sil = @$_POST["eskiresim"];
            unlink("../resimler/logo/$sil");
            header("Location:duzenle.php?sayfa=logo&durum=ok");
        } else {
            header("Location:duzenle.php?sayfa=logo&durum=no");
        }
    } else {
        header("Location:duzenle.php?sayfa=logo&durum=nothing");
    }
}

if (isset($_POST["logosil"])) {

    $resim = $_POST["logo"];
    $id = $_POST["id"];
    $logosil = $baglan->prepare("DELETE FROM logo where id=?");
    $delete = $logosil->execute(array($id));



    if ($delete) {
        unlink("../resimler/logo/$resim");
        header("Location:logo.php?durum=ok");
    } else {
        header("Location:logo.php?durum=no");
    }
}
// logobitiş
// background baslangic
if (isset($_POST["backgroundkaydet"])) {

    if ($_FILES["resim"]["size"] > 0) {



        $uploads_dir = '../resimler/background';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']['name'];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $backgroundEkle = $baglan->prepare("INSERT INTO background SET background=?");

        $ekle = $backgroundEkle->execute(array(
            $resimadi

        ));


        if ($ekle) {
            header("Location:arkaplan.php?durum=ok");
        } else {
            header("Location:arkaplan.php?durum=no");
        }
    } else {
        header("Location:arkaplan.php?durum=eksik");
    }
}


if (isset($_POST["backgroundduzenle"])) {
    if ($_FILES["resim"]["size"] > 0) {



        $uploads_dir = '../resimler/background';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']['name'];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");



        $backgroundduzenle = $baglan->prepare("UPDATE background SET  background=? ");

        $update = $backgroundduzenle->execute(array(
            $resimadi
        ));

        if ($update) {
            $sil = @$_POST["eskiresim"];
            unlink("../resimler/background/$sil");
            header("Location:duzenle.php?sayfa=arkaplan&durum=ok");
        } else {
            header("Location:duzenle.php?sayfa=arkaplan&durum=no");
        }
    } else {
        header("Location:duzenle.php?sayfa=arkaplan&durum=nothing");
    }
}

if (isset($_POST["backgroundsil"])) {

    $resim = $_POST["background"];

    $backgroundsil = $baglan->prepare("DELETE FROM background");
    $delete = $backgroundsil->execute();



    if ($delete) {
        unlink("../resimler/background/$resim");
        header("Location:arkaplan.php?durum=ok");
    } else {
        header("Location:arkaplan.php?durum=no");
    }
}

// background bitiş

// kategori baslangic


if (isset($_POST["kategorikaydet"])) {



    $baslik = $_POST["baslik"];
    $sira = $_POST["sira"];

    $uploads_dir = '../resimler/kategori';
    @$tmp_name = $_FILES['resim']["tmp_name"];
    @$name = $_FILES['resim']['name'];
    $sayi1 = rand(1, 1000000);
    $sayi2 = rand(1, 1000000);
    $sayi3 = rand(1, 1000000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimadi = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kategoriEkle = $baglan->prepare("INSERT INTO kategori SET 
       resim=?,
       baslik=?,
       sira=?");

    $ekle = $kategoriEkle->execute(array(
        $resimadi,
        $baslik,
        $sira

    ));


    if ($ekle) {
        header("Location:kategori.php?durum=ok");
    } else {
        header("Location:kategori.php?durum=no");
    }
}


if (isset($_POST["kategoriduzenle"])) {
    if ($_FILES["resim"]["size"] > 0) {
        $id = $_POST["id"];
        $baslik = $_POST["baslik"];
        $sira = $_POST["sira"];

        $uploads_dir = '../resimler/kategori';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']['name'];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");



        $kategoriduzenle = $baglan->prepare("UPDATE kategori SET  
        resim=?,
        baslik=?,
        sira=?
        where id=$id
         ");

        $update = $kategoriduzenle->execute(array(
            $resimadi,
            $baslik,
            $sira
        ));

        if ($update) {
            $sil = @$_POST["eskiresim"];
            unlink("../resimler/kategori/$sil");
            header("Location:kategori.php?&durum=ok");
        } else {
            header("Location:kategori.php?&durum=no");
        }
    } else {
        $id = $_POST["id"];
        $baslik = $_POST["baslik"];
        $sira = $_POST["sira"];

        $kategoriduzenle = $baglan->prepare("UPDATE kategori SET  
       
        baslik=?,
        sira=?
        where id=$id         ");

        $update = $kategoriduzenle->execute(array(

            $baslik,
            $sira

        ));

        if ($update) {

            header("Location:kategori.php?&durum=ok");
        } else {
            header("Location:kategori.php?&durum=no");
        }
    }
}

if (isset($_POST["kategorisil"])) {
    $id = $_POST["id"];
    $resim = $_POST["resim"];

    $kategorisil = $baglan->prepare("DELETE FROM kategori where id=$id");
    $delete = $kategorisil->execute();
    $urunlersil = $baglan->prepare("DELETE FROM urunler where katid=$id");
    $delete = $urunlersil->execute();



    if ($delete) {
        unlink("../resimler/kategori/$resim");
        header("Location:kategori.php?durum=ok");
    } else {
        header("Location:kategori.php?durum=no");
    }
}
// kategori bitis

// urunler baslangıc
if (isset($_POST["urunkaydet"])) {


    $sira = $_POST["sira"];
    $baslik = $_POST["baslik"];
    $icindekiler = $_POST["icindekiler"];
    $katid = $_POST["katid"];
    $fiyat = $_POST["fiyat"];


    $urunlerEkle = $baglan->prepare("INSERT INTO urunler SET 
      baslik=?,
      icindekiler=?,
      fiyat=?,
      sira=?,
      katid=?
       ");

    $ekle = $urunlerEkle->execute(array(
        $baslik,
        $icindekiler,
        $fiyat,
        $sira,
        $katid

    ));


    if ($ekle) {
        header("Location:urunler.php?durum=ok");
    } else {
        header("Location:urunler.php?durum=no");
    }
}


if (isset($_POST["urunduzenle"])) {
  
       
        $id = $_POST["id"];
        $baslik = $_POST["baslik"];
        $sira = $_POST["sira"];
        $icindekiler = $_POST["icindekiler"];
        $fiyat = $_POST["fiyat"];




        $urunlerduzenle = $baglan->prepare("UPDATE urunler SET  
       baslik=?,
       icindekiler=?,
       fiyat=?,
       sira=?
        where id=$id
         ");

        $update = $urunlerduzenle->execute(array(
            $baslik,
            $icindekiler,
            $fiyat,
            $sira
        ));

        if ($update) {
            
            header("Location:urunler.php?&durum=ok");
        } else {
            header("Location:urunler.php?&durum=no");
        }
  
     
    
}

if (isset($_POST["urunsil"])) {
    $id = $_POST["id"];
  
   

    $urunlersil = $baglan->prepare("DELETE FROM urunler where id=$id");
    $delete = $urunlersil->execute();



    if ($delete) {
       
        header("Location:urunler.php?durum=ok");
    } else {
        header("Location:urunler.php?durum=no");
    }
}

if(isset($_POST["giris"])) {
    $mail=htmlspecialchars($_POST["email"]);
    $sifre=htmlspecialchars($_POST["sifre"]);
 
    $md5sifre=md5($sifre);
 
    if($mail && $md5sifre) {
     $ksor=$baglan->prepare("SELECT * FROM kullanici where mail=? and sifre=?");
     $ksor->execute(array(
         $mail,
         $md5sifre
     ));
 $count=$ksor->rowCount();
 
 if($count>0) {
    $_SESSION["kad"] = $mail;
    header("Location:index.php?bilgi=ok");
 }else {
     
    header("Location:giris.php?bilgi=hata");
     
 }
 
    }
 
 }

