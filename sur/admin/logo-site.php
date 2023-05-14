<?php require_once "header.php" ?>
<?php require_once "sidebar.php";

$logo = $baglan->prepare("SELECT * FROM sitelogo where id=?");
$logo->execute(array(1));
$logocek = $logo->fetch(PDO::FETCH_ASSOC);


?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Logo</h3>


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
                                <img src="../resimlerSite/logo-site/<?= $logocek["resim"] ?>" width="250" height="150" alt="">
                            </div>

                            <div class="form-group">

                                <label for="exampleInputEmail1">Resim</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" name="resim">
                            </div>
                           

                            <input type="hidden" value="<?= $logocek["resim"] ?>" name="eskiresim">
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" name="logoSitekaydet" class="btn btn-primary">kaydet</button>
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