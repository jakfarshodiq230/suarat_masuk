
<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['no_agenda']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border: 5px solid  #FFF5EE;">
                <div class="modal-header" style="background-color: #FF6347;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"><strong>Hapus Surat Masuk</strong></h4></center>
                </div>
                <div class="modal-body">
                <?php
                 include"../koneksi/koneksi.php"; //untuk memanggil koneksi
                    $del=mysql_query("select * from surat_masuk where no_agenda='".$row['no_agenda']."'");
                    $drow=mysql_fetch_array($del);
                ?>
                <div class="container-fluid">
                    <h5><center>Apakah Anda Yakin Ingin Menghapus No surat: <strong><?php echo $drow['no_surat']; ?></strong></center></h5> 
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Batal</button>
                    <a href="delete_surat_masuk.php?id=<?php echo $row['no_agenda']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
                </div>
                
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
 <div class="modal fade" id="edit<?php echo $row['no_agenda'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border: 5px solid  #FFF5EE;">
                <div class="modal-header"  style="background-color: #FFA500;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <?php
                   include"../koneksi/koneksi.php"; //untuk memanggil koneksi
                    $edit=mysql_query("select * from surat_masuk where no_agenda ='".$row['no_agenda']."'");
                    $erow=mysql_fetch_array($edit);
                ?>
                <div class="modal-body">
                <div class="container-fluid">
                <form method="POST" action="edit_surat_masuk.php?id=<?php echo $erow['no_agenda']; ?>"> <!--query simpan-->
                    <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-3" align="right">
                                <label class="control-label" style="position:relative; top:7px;">No. Agenda</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="no_agenda" style="width: 100%;" readonly value="<?php echo $erow['no_agenda']; ?>">
                            </div>
                        </div>
                    <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-3" align="right">
                                <label class="control-label" style="position:relative; top:7px;">No. Surat</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="no_surat" style="width: 100%;" value="<?php echo $erow['no_surat']; ?>">
                            </div>
                        </div>
                        
                    <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-3" align="right">
                                <label class="control-label" style="position:relative; top:7px;">Hal</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="hal" style="width: 100%;" value="<?php echo $erow['hal']; ?>">
                            </div>
                        </div>
                        
                    <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-3" align="right">
                                <label class="control-label" style="position:relative; top:7px;">Alamat Pengirim</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="alamat_pengirim" style="width: 100%;" value="<?php echo $erow['almt_pengirim']; ?>">
                            </div>
                        </div>
                        
                    <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-3"align="right">
                                <label class="control-label" style="position:relative; top:7px;">Tanggal Surat</label>
                            </div>
                            <div class="col-lg-5" class="fa fa-calendar">
                                <!--<input type="text" class="form-control" name="no_surat" style="width: 100%;">-->
                                <input name="tgl_surat" id="tgl"type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask style="width: 100%;" value="<?php echo $erow['tgl_surat']; ?>">
                            </div>
                        </div>                      
                        
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-3" align="right">
                            <label class="control-label" style="position:relative; top:7px;" > Tingkat Kerahasian</label>
                        </div>
                        <div class="col-lg-5">
                            <select name="tngkt_kerahasian" class="form-control select2" style="width: 100%;" placeholder="Pilih">
                                    <option selected="selected" ><?php echo $erow['tgkt_kerahasiaan']; ?></option>
                                    <option>Sangat Rahasia</option>
                                    <option>Rahasia</option>
                                    <option>Terbatas</option>
                                    <option>Biasa</option>
                            </select>
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-3" align="right">
                                <label class="control-label" style="position:relative; top:7px;">KKA</label>
                            </div>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name="kka" style="width: 100%;" value="<?php echo $erow['kka']; ?>">
                            </div>
                    </div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Batal</button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span>Simpan</a>
                </form>
                </div>
                
            </div>
        </div>
    </div>
<!-- /.modal -->

<style type="text/css">

.container{
    padding-top: 8px;
    border-radius: 0;
    border: 0px solid #3498db;
}
.panel-heading{
    background-color: #48D1CC;
}
</style>
<!-- view dokumen -->
     <div class="modal fade" id="view<?php echo $row['no_agenda']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="container"> 
            <div class="row">
        
                <?php
                   include"../koneksi/koneksi.php"; //untuk memanggil koneksi
                    $edit=mysql_query("select * from surat_masuk where no_agenda='".$row['no_agenda']."'");
                    $erow=mysql_fetch_array($edit);
                ?>
        
                <div class='col-md-15'>
                    <div class='panel'>
                        <div class='panel-heading'>
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <center><h4 class="modal-title" id="myModalLabel"><strong>Surat Masuk</strong></h4></center>
                        </div>
                        <div class='panel-body'>
                        
                            <embed src="surat_keluar/<?php echo"$erow[File]"?>" type='application/pdf' width='100%' height='550px'/>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<!-- /.modal -->
