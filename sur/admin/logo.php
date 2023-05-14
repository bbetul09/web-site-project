<?php require_once "header.php"; ?>
<?php require_once "sidebar.php" ;



$logo = $baglan->prepare("SELECT * FROM logo order by id asc");
$logo->execute();

?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Logo</h3>

                    <?php 
        if(@$_GET["durum"]=="eksik") { ?>
        <span class="text-danger" style="font-size: 2rem;">Resim  girmeden logo ekleyemezsiniz</span>
      <?php   } ?>

                </div>
                <a href="ekle.php?sayfa=logo"> <button class="btn btn-info  btn-block"> Logo ekle+</button></a>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                                                     
                            <th>Logo</th>                          
                            <th>Düzenle</th>
                            <th>Sil</th>

                        </tr>
                      
<?php 

while($logocek = $logo->fetch(PDO::FETCH_ASSOC)) {

?>
                      
                            <tr style="height:50px !important ;">
                             
                                <td><img src="../resimler/logo/<?php echo $logocek["logo"] ?>" width="300" height="150" alt=""></td>
                                <td><a style="width:75px !important; height:35px !important; " href="duzenle.php?sayfa=logo"  class="btn btn-success"> düzenle </a></td>

<form action="yukle.php" method="post">
                                <input type="hidden" value="<?= $logocek["logo"] ?>" name="logo" >
                                <input type="hidden" value="<?= $logocek["id"] ?>" name="id" >
                               
                                <td><a style="width:75px !important; height:35px !important; "  > <button name="logosil" class="btn btn-danger">  Sil </button></a></td>
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