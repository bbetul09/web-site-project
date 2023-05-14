<?php require_once "header.php" ?>
<?php require_once "sidebar.php";




?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Ürünler</h3>

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
                <?php $kategori = $baglan->prepare("SELECT * FROM kategori order by sira asc");
                        $kategori->execute(array());
                       
                        ?>

                        <?php while ($kategoricek = $kategori->fetch(PDO::FETCH_ASSOC)) { 
                             $katid = $kategoricek["id"]; ?>
                <div class="box-body table-responsive no-padding">
                    <Span style="font-size: 5rem; border-bottom:2px solid black;"><?= $kategoricek["baslik"] ?>: </Span> <span><a style="font-size: 2.5rem; margin:0 0 20px 0;" class="btn btn-primary" href="ekle.php?sayfa=urunler&katid=<?php echo $kategoricek["id"] ?>">Ürün ekle+</a></span>
                
                    <table class="table table-hover">
                        <tr>

                            
                            <th>ürün Sira</th>
                            <th>ürün Baslik</th>
                            <th>ürün içeriği</th>
                            <th>ürün fiyatı</th>
                            <th>Düzenle</th>
                            <th>Sil</th>

                        </tr>
                            
                        <?php $urunler = $baglan->prepare("SELECT * FROM urunler where katid=? order by sira asc");
                        $urunler->execute(array($katid));
                        ?>

                        <?php while ($urunlercek = $urunler->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr style="height:50px !important ;">
                            <td><?= $urunlercek["sira"] ?></td>
                            <td style="font-size: 3rem; font-weight:bold;"><?= $urunlercek["baslik"] ?></td>
                            <td style="font-size: 3rem; font-weight:bold;"><?= $urunlercek["icindekiler"] ?></td>
                            <td style="font-size: 3rem; font-weight:bold;"><?= $urunlercek["fiyat"] ?></td>

                              
                            <td><a style="width:75px !important; height:35px !important; " href="duzenle.php?sayfa=urunler&id=<?= $urunlercek["id"] ?>" class="btn btn-success"> düzenle </a></td>

                                <form action="yukle.php" method="post">
                                   <input type="hidden" value="<?= $urunlercek["id"] ?>" name="id">
                                    
                                    <td><a style="width:75px !important; height:35px !important; "> <button name="urunsil" class="btn btn-danger"> Sil </button></a></td>
                                </form>

                            </tr>
                            
                        <?php } ?>
                    </table>
                </div>
                <hr style="border: 2px solid steelblue; ">
                <?php } ?>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>
<?php require_once "footer.php" ?>