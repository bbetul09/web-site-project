<?php require_once "header.php" ?>
<?php require_once "sidebar.php";




?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Kategoriler</h3>

                    <?php 
        if(@$_GET["durum"]=="eksik") { ?>
        <span class="text-danger" style="font-size: 2rem;">Resim  girmeden logo ekleyemezsiniz</span>
      <?php   } ?>
                    <?php
                    if (@$_GET["durum"] == "ok") { ?>
                        <span class="text-success" style="font-size: 2rem;">İşlem Başarılı</span>
                    <?php   } else if (@$_GET["durum"] == "no") { ?>
                        <span style="font-size: 2rem;" class="text-success">İşlem başarısız</span>
                    <?php } ?>

                </div>
                <a href="ekle.php?sayfa=kategori"> <button class="btn btn-info  btn-block"> Kategori ekle+</button></a>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>

                            <th>Kategori Baslik</th>
                            <th>Kategori Sira</th>
                            <th>Kategori Resim</th>
                            <th>Ürün ekle</th>
                            <th>Düzenle</th>
                            <th>Sil</th>

                        </tr>

                        <?php $kategori = $baglan->prepare("SELECT * FROM kategori ");
                        $kategori->execute(array());
                        ?>

                        <?php while ($kategoricek = $kategori->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr style="height:50px !important ;">
                                <td style="font-size: 5rem; font-weight:bold; "><?= $kategoricek["baslik"] ?></td>
                                <td><?= $kategoricek["sira"] ?></td>

                                <td><img src="../resimler/kategori/<?= $kategoricek["resim"] ?>" width="300" height="100" style="border-radius: 5px;" alt=""></td>
                                <td><a style="width:80px !important; height:35px !important; " href="ekle.php?sayfa=urunler&katid=<?= $kategoricek["id"] ?>" class="btn btn-primary"> Ürün ekle </a></td>

                                <td><a style="width:75px !important; height:35px !important; " href="duzenle.php?sayfa=kategori&id=<?= $kategoricek["id"] ?>" class="btn btn-success"> düzenle </a></td>

                                <form action="yukle.php" method="post">
                                    <input type="hidden" name="resim" value="<?= $kategoricek["resim"] ?>">
                                    <input type="hidden" value="<?= $kategoricek["id"] ?>" name="id">
                                    <td><a style="width:75px !important; height:35px !important; "> <button name="kategorisil" class="btn btn-danger"> Sil </button></a></td>
                                </form>

                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>
<?php require_once "footer.php" ?>