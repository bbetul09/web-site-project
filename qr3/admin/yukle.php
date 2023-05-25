<?php include_once "baglanti.php";


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

    $logosil = $baglan->prepare("DELETE FROM logo");
    $delete = $logosil->execute();



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

    $kategorisil = $baglan->prepare("DELETE FROM kategori  where id=$id");
    $delete = $kategorisil->execute();
  
    $urunlersil = $baglan->prepare("DELETE FROM urunler  where katid=$id");
    $delete2 = $urunlersil->execute();



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

        $uploads_dir = '../resimler/urunler';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']['name'];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");


        $urunlerEkle = $baglan->prepare("INSERT INTO urunler SET 
      baslik=?,
      icindekiler=?,
      fiyat=?,
      sira=?,
      katid=?,
    resim=?
       ");

        $ekle = $urunlerEkle->execute(array(
            $baslik,
            $icindekiler,
            $fiyat,
            $sira,
            $katid,
            $resimadi

        ));


        if ($ekle) {
            header("Location:urunler.php?durum=ok");
        } else {
            header("Location:urunler.php?durum=no");
        }
    
}


if (isset($_POST["urunduzenle"])) {

    if ($_FILES["resim"]["size"] > 0) {



        $id = $_POST["id"];
        $baslik = $_POST["baslik"];
        $sira = $_POST["sira"];
        $icindekiler = $_POST["icindekiler"];
        $fiyat = $_POST["fiyat"];


        $uploads_dir = '../resimler/urunler';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']['name'];
        $sayi1 = rand(1, 1000000);
        $sayi2 = rand(1, 1000000);
        $sayi3 = rand(1, 1000000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimadi = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");



        $urunlerduzenle = $baglan->prepare("UPDATE urunler SET  
       baslik=?,
       icindekiler=?,
       fiyat=?,
       sira=?,
       resim=?
        where id=$id
         ");

        $update = $urunlerduzenle->execute(array(
            $baslik,
            $icindekiler,
            $fiyat,
            $sira,
            $resimadi
        ));

        if ($update) {
            $sil = @$_POST["eskiresim"];
            unlink("../resimler/kategori/$sil");
            header("Location:urunler.php?&durum=ok");
        } else {
            header("Location:urunler.php?&durum=no");
        }
    } else {

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
}

if (isset($_POST["urunsil"])) {
    $id = $_POST["id"];

    $resim = $_POST["resim"];

    $urunlersil = $baglan->prepare("DELETE FROM urunler where id=$id");
    $delete = $urunlersil->execute();



    if ($delete) {
        unlink("../resimler/kategori/$resim");
        header("Location:urunler.php?durum=ok");
    } else {
        header("Location:urunler.php?durum=no");
    }
}
