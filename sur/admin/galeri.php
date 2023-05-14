<?php require_once "header.php"; ?>
<?php require_once "sidebar.php" ;



$galeri = $baglan->prepare("SELECT * FROM galeri order by sira asc");
$galeri->execute();

?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">galeri</h3>
                    <?php 
        if(@$_GET["durum"]=="eksik") { ?>
        <span class="text-danger" style="font-size: 2rem;">Resim  girmeden logo ekleyemezsiniz</span>
      <?php   } ?>
    

                </div>
                <a href="ekle.php?sayfa=galeri"> <button class="btn btn-info  btn-block"> Galeriye Resim ekle+</button></a>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                                                     
                            <th>Resim</th>                        
                            <th>sira</th>                        
                            <th>Düzenle</th>
                            <th>Sil</th>

                        </tr>
                      
<?php 

while($galericek = $galeri->fetch(PDO::FETCH_ASSOC)) {

?>
                      
                            <tr style="height:50px !important ;">
                             
                                <td><img src="../resimlerSite/galeri/<?php echo $galericek["resim"] ?>" width="300" height="150" alt=""></td>
                                <td><?= $galericek["sira"] ?></td>

                                <td><a style="width:75px !important; height:35px !important; " href="duzenle.php?sayfa=galeri&id=<?= $galericek["id"] ?>"  class="btn btn-success"> düzenle </a></td>

<form action="yukle.php" method="post">
                                <input type="hidden" value="<?= $galericek["resim"] ?>" name="resim" >
                                <input type="hidden" value="<?= $galericek["id"] ?>" name="id" >
                               
                                <td><a style="width:75px !important; height:35px !important; "  > <button name="galerisil" class="btn btn-danger">  Sil </button></a></td>
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