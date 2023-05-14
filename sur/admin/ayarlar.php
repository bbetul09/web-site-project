<?php require_once "header.php" ?>
<?php require_once "sidebar.php";

$ayarlar = $baglan->prepare("SELECT * FROM ayarlar where id=?");
$ayarlar->execute(array(1));
$ayarlarcek = $ayarlar->fetch(PDO::FETCH_ASSOC);


?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Ayarlar</h3>

            
                    <?php
                    if (@$_GET["durum"] == "ok") { ?>
                        <span class="text-success" style="font-size: 2rem;">İşlem Başarılı</span>
                    <?php   } else if (@$_GET["durum"] == "no") { ?>
                        <span style="font-size: 2rem;" class="text-success">İşlem başarısız</span>
                    <?php } ?>

                </div>
           
  
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post">
      <div class="box-body">

        <div class="form-group">

          <label for="exampleInputEmail1">Ad Soyad</label>
          <input type="text" value="<?= $ayarlarcek["ad_soyad"] ?>" class="form-control" id="exampleInputEmail1" name="adsoyad">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">Mail</label>
          <input type="mail" value="<?= $ayarlarcek["mail"] ?>" class="form-control" id="exampleInputEmail1" name="mail">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">Telefon</label>
          <input type="text" value="<?= $ayarlarcek["tel"] ?>" class="form-control" id="exampleInputEmail1" name="tel">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">İnsta</label>
          <input type="text" value="<?= $ayarlarcek["insta"] ?>" class="form-control" id="exampleInputEmail1" name="insta">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">Face</label>
          <input type="text" value="<?= $ayarlarcek["face"] ?>" class="form-control" id="exampleInputEmail1" name="face">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">Adres</label>
          <input type="text" value="<?= $ayarlarcek["adres"] ?>" class="form-control" id="exampleInputEmail1" name="adres">
        </div>
      </div>
     
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" name="ayarlarkaydet" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>

                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>
<?php require_once "footer.php" ?>