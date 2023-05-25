<?php require_once "header.php";
require_once "sidebar.php";
$id = @$_GET["id"];
$logo = $baglan->prepare("SELECT * FROM logo");
$logo->execute();
$logocek = $logo->fetch(PDO::FETCH_ASSOC);

$background = $baglan->prepare("SELECT * FROM background");
$background->execute();
$backgroundcek = $background->fetch(PDO::FETCH_ASSOC);

$kategori = $baglan->prepare("SELECT * FROM kategori where id=?");
$kategori->execute(array($id));
$kategoricek = $kategori->fetch(PDO::FETCH_ASSOC);

$urunler = $baglan->prepare("SELECT * FROM urunler where id=?");
$urunler->execute(array($id));
$urunlercek = $urunler->fetch(PDO::FETCH_ASSOC);

?>
<!-- Left side column. contains the logo and sidebar -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php if ($_GET["sayfa"] == "logo") {   ?>

    <?php
    if (@$_GET["durum"] == "ok") { ?>
      <span class="text-success" style="font-size: 2rem;">İşlem Başarılı</span>
    <?php   } else if (@$_GET["durum"] == "no") { ?>
      <span style="font-size: 2rem;" class="text-success">İşlem başarısız</span>
    <?php } ?>
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Logo düzenle</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
        <div class="box-body">
          <div>


            <img src="../resimler/logo/<?= $logocek["logo"] ?>" width="250" height="150" alt="">
          </div>

          <div class="form-group">
            <input type="hidden" value="<?= @$logocek["logo"] ?>" name="eskiresim">

            <label for="exampleInputEmail1">Logo</label>
            <input type="file" value="<?php echo $logocek["logo"] ?>" class="form-control" name="resim">
          </div>



        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" name="logoduzenle" class="btn btn-primary">kaydet</button>
        </div>
      </form>
    </div>

    <!-- /.content -->
</div>

<?php  } else if ($_GET["sayfa"] == "arkaplan") { ?>
  <?php
    if (@$_GET["durum"] == "ok") { ?>
    <span class="text-success" style="font-size: 2rem;">İşlem Başarılı</span>
  <?php   } else if (@$_GET["durum"] == "no") { ?>
    <span style="font-size: 2rem;" class="text-success">İşlem başarısız</span>
  <?php } ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">arkaplan düzenle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div>


          <img src="../resimler/background/<?= $backgroundcek["background"] ?>" width="250" height="150" alt="">
        </div>

        <div class="form-group">
          <input type="hidden" value="<?= @$backgroundcek["background"] ?>" name="eskiresim">

          <label for="exampleInputEmail1">background</label>
          <input type="file" value="<?php echo $backgroundcek["background"] ?>" class="form-control" name="resim">
        </div>



      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" name="backgroundduzenle" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>

<?php } else if ($_GET["sayfa"] == "kategori") { ?>

  <?php
    if (@$_GET["durum"] == "ok") { ?>
    <span class="text-success" style="font-size: 2rem;">İşlem Başarılı</span>
  <?php   } else if (@$_GET["durum"] == "no") { ?>
    <span style="font-size: 2rem;" class="text-success">İşlem başarısız</span>
  <?php } ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">kategori düzenle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div>
          <img src="../resimler/kategori/<?= $kategoricek["resim"] ?>" width="250" height="150" alt="">
        </div>

        <div class="form-group">
          <input type="hidden" value="<?= @$kategoricek["resim"] ?>" name="eskiresim">

          <label for="exampleInputEmail1">kategori</label>
          <input type="file" value="<?php echo $kategoricek["resim"] ?>" class="form-control" name="resim">
        </div>

        <div class="form-group">

          <label for="exampleInputEmail1">Baslik</label>
          <input type="text" value="<?= @$kategoricek["baslik"] ?>" class="form-control" id="exampleInputEmail1" name="baslik">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">Sira</label>
          <input type="number" value="<?= @$kategoricek["sira"] ?>" class="form-control" id="exampleInputEmail1" name="sira">
        </div>
        <input type="hidden" value="<?= $kategoricek["id"] ?>" name="id">

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" name="kategoriduzenle" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>

<?php } else if ($_GET["sayfa"] == "urunler") { ?>
  <?php $katid = @$_GET["katid"] ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">urun ekle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
      <div>
          <img src="../resimler/urunler/<?= $urunlercek["resim"] ?>" width="250" height="150" alt="">
        </div>

        <div class="form-group">
          <input type="hidden" value="<?= @$urunlercek["resim"] ?>" name="eskiresim">

          <label for="exampleInputEmail1">kategori</label>
          <input type="file" value="<?php echo $urunlercek["resim"] ?>" class="form-control" name="resim">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">Baslik</label>
          <input type="text" value="<?= $urunlercek["baslik"] ?>" class="form-control" id="exampleInputEmail1" name="baslik">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">icindekiler</label>
          <input type="text" value="<?= $urunlercek["icindekiler"] ?>" class="form-control" id="exampleInputEmail1" name="icindekiler">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">fiyat</label>
          <input type="text" value="<?= $urunlercek["fiyat"] ?>" class="form-control" id="exampleInputEmail1" name="fiyat">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">sira</label>
          <input type="text" value="<?= $urunlercek["sira"] ?>" class="form-control" id="exampleInputEmail1" name="sira">
        </div>
      </div>
      <?php if ($katid > 0) { ?>
        <input type="hidden" value="<?= $katid ?>" name="katid">
      <?php } ?>
      <input type="hidden" value="<?= $id ?>" name="id">
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" name="urunduzenle" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>
<?php  } ?>



</div>


<!-- /.content-wrapper -->
<?php require_once "footer.php";  ?>