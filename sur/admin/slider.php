<?php require_once "header.php" ?>
<?php require_once "sidebar.php";

$slider = $baglan->prepare("SELECT * FROM slider where id=?");
$slider->execute(array(1));
$slidercek = $slider->fetch(PDO::FETCH_ASSOC);


?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Slider</h3>


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
                    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div>
                                <img src="../resimlerSite/slider/<?= $slidercek["resim"] ?>" width="250" height="150" alt="">
                            </div>

                            <div class="form-group">

                                <label for="exampleInputEmail1">Resim</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" name="resim">
                            </div>
                            <div class="form-group">

                                <label for="exampleInputEmail1"> Başlık</label>
                                <input type="text" value="<?= $slidercek["baslik"] ?>" class="form-control" id="exampleInputEmail1" name="baslik">
                            </div>
                            <div class="form-group">

                                <label for="exampleInputEmail1">Alt Baslık</label>
                                <input type="mail" value="<?= $slidercek["alt_baslik"] ?>" class="form-control" id="exampleInputEmail1" name="altbas">
                            </div>
                            <div class="form-group">

<label for="exampleInputEmail1">Buton İsmi</label>
<input type="mail" value="<?= $slidercek["buton_ismi"] ?>" class="form-control" id="exampleInputEmail1" name="buton">
</div>



                            <input type="hidden" value="<?= $slidercek["resim"] ?>" name="eskiresim">
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" name="sliderkaydet" class="btn btn-primary">kaydet</button>
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