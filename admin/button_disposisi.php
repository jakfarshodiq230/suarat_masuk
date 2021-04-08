
<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['kode_disposisi']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border: 5px solid  #FFF5EE;">
                <div class="modal-header" style="background-color: #FF6347; ">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"><strong>Hapus Disposisi </strong></h4></center>
                </div>
                <div class="modal-body">
				<?php
				 include"../koneksi/koneksi.php"; //untuk memanggil koneksi
					$del=mysql_query("select * from surat_masuk JOIN disposisi ON kode_disposisi='".$row['kode_disposisi']."'");
					$drow=mysql_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Apakah Anda Yakin Ingin Menghapus Disposisi Surat denagn Nomor : <strong><?php echo $drow['no_surat']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                    <a href="delete_disposisi.php?id=<?php echo $row['kode_disposisi']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
 <div class="modal fade" id="disposisi<?php echo $row['kode_disposisi']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border: 1px solid  #FFF5EE;">
                <div class="modal-header" style="background-color: #FFA500; ">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Disposisi</h4></center>
                </div>
				<?php
				   include"../koneksi/koneksi.php"; //untuk memanggil koneksi
					$edit=mysql_query("SELECT  disposisi.status,disposisi.kode_disposisi,disposisi.isidisposisi, disposisi.tgl_penyelesaian, disposisi.diteruskan, surat_masuk.no_surat FROM disposisi,surat_masuk  WHERE surat_masuk.`no_agenda`=disposisi.`no_agenda`AND kode_disposisi='".$row['kode_disposisi']."'");
					$erow=mysql_fetch_array($edit);
				?>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="edit_disposisi.php?id=<?php echo $erow['kode_disposisi']; ?>"> <!--query simpan-->
					
					<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-3" align="right">
								<label class="control-label" style="position:relative; top:7px;">No Surat</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="no_surat" style="width: 100%;" readonly value="<?php echo $erow['no_surat']; ?>">
							</div>
						</div>
						
					<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-3" align="right">
								<label class="control-label" style="position:relative; top:7px;">Disposisi</label>
							</div>
							<div class="col-lg-8">
								<textarea type="text" class="form-control" name="disposisi" style="width: 100%;" ><?php echo $erow['isidisposisi']; ?></textarea>
							</div>
						</div>
					<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-3" align="right">
								<label class="control-label" style="position:relative; top:7px;">Tanggal Penyelesaian</label>
							</div>
							<div class="col-lg-8">
								<input name="tgl_tindakan" id="tgl"type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask style="width: 100%;" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" >
							</div>
						</div>	
					<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-3" align="right">
								<label class="control-label" style="position:relative; top:7px;">Ditersukan</label>
							</div>
							<div class="col-lg-8">
								<textarea type="text" class="form-control" name="diteruskan" style="width: 100%;" ><?php echo $erow['diteruskan']; ?></textarea>	
							</div>
						</div>	
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</a>
				</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->
<!-- view dokumen -->
     <div class="modal fade" id="view<?php echo $row['kode_disposisi']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="container">	
			<div class="row">
		
				<?php
				   include"../koneksi/koneksi.php"; //untuk memanggil koneksi
					$edit=mysql_query("select * from surat_masuk where no_surat='".$row['no_surat']."'");
					$erow=mysql_fetch_array($edit);
					$sql= mysql_query("SELECT DATE_FORMAT(tgl_penerimaan, '%m-%d-%Y') AS tanggal_input FROM surat_masuk 
						WHERE  no_surat='".$row['no_surat']."'");
					$erow1=mysql_fetch_array($sql);
				?>
		
				<div class='col-md-12'>
					<div class='panel'>
						<div class='panel-heading' style="background-color:#3498db; ">
		                   		 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                    	<span style="text-align: left;"><h4 class="modal-title" id="myModalLabel"><strong>Surat Masuk Pada Tanggal <?php echo $erow1['tanggal_input'];?> </strong></h4></span>
						</div>
						<div class='panel-body'>
						
							<embed src="surat_masuk/<?php echo"$erow[File]"?>" type='application/pdf' width='100%' height='550px'/>
						</div>
					</div>
				</div>
		</div>
    </div>
<!-- /.modal -->

  	