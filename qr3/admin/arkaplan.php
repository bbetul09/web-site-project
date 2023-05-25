<?php require_once "header.php" ?>
<?php require_once "sidebar.php";


$background = $baglan->prepare("SELECT * FROM background");
$background->execute();
$backgroundcek = $background->fetch(PDO::FETCH_ASSOC);

?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">arkaplan</h3>

                    <?php 
        if(@$_GET["durum"]=="eksik") { ?>
        <span class="text-danger" style="font-size: 2rem;">Resim  girmeden arkaplan ekleyemezsiniz</span>
      <?php   } ?>
                </div>
                <a href="ekle.php?sayfa=arkaplan"> <button class="btn btn-info  btn-block"> arkaplan ekle+</button></a>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                                                     
                            <th>arkaplan</th>                          
                            <th>Düzenle</th>
                            <th>Sil</th>

                        </tr>
                      

                       
                            <tr style="height:50px !important ;">
                             
                                <td><img src="../resimler/background/<?php echo $backgroundcek["background"] ?>" width="800" height="500" alt=""></td>
                                <td><a style="width:75px !important; height:35px !important; " href="duzenle.php?sayfa=arkaplan"  class="btn btn-success"> düzenle </a></td>

<form action="yukle.php" method="post">
                                <input type="hidden" name="resim" value="<?php echo $backgroundcek["background"] ?>">
                                
                                <td><a style="width:75px !important; height:35px !important; " > <button name="backgroundsil" class="btn btn-danger">  Sil </button></a></td>
                                </form>

                            </tr>
                      
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>
<?php require_once "footer.php" ?>