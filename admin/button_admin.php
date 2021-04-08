<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['kd_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border: 5px solid #FDF5E6;">
                <div class="modal-header"  style="background-color: #DC143C;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"><strong>Hapus Data</strong></h4></center>
                </div>
                <div class="modal-body">	
				<?php
				 include"../koneksi/koneksi.php"; //untuk memanggil koneksi
					$del=mysql_query("select * from user where kd_user='".$row['kd_user']."'");
					$drow=mysql_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Apakah Anda Yakin Ingin Menghapus User: <strong><?php echo $drow['kd_user']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                    <a href="delete_admin.php?id=<?php echo $row['kd_user']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
 <div class="modal fade" id="edit<?php echo $row['kd_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"  style="border: 1px solid #FDF5E6;">
                <div class="modal-header" style="background-color: #3CB371;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Data</h4></center>
                </div>
				<?php
				   include"../koneksi/koneksi.php"; //untuk memanggil koneksi
					$edit=mysql_query("select * from user where kd_user='".$row['kd_user']."'");
					$erow=mysql_fetch_array($edit);
				?>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="edit_admin.php?id=<?php echo $erow['kd_user']; ?>"> <!--query simpan-->
					
					<dv sityle="height:10px;"></div>
						<div class="row">
							<div class="col-lg-3" align="right">
								<label class="control-label" style="position:relative; top:7px;">Nama</label>
							</div>
							<div class="col-lg-8">
								<input type="text"  name="nama_user" class="form-control" value="<?php echo $erow['nama_user']; ?>">
							</div>
						</div>
						
					<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-3" align="right">
								<label class="control-label" style="position:relative; top:7px;">Username</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="user" style="width: 100%;" value="<?php echo $erow['username']; ?>">
							</div>
						</div>
					<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-3" align="right">
								<label class="control-label" style="position:relative; top:7px;">Password</label>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" name="password" style="width: 100%;" value="<?php echo $erow['password']; ?>">
							</div>
						</div>	
					<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-3" align="right">
								<label class="control-label" style="position:relative; top:7px;">Email</label>
							</div>
							<div class="col-lg-8">
								<input type="email" class="form-control" name="email" style="width: 100%;" value="<?php echo $erow['email']; ?>">
							</div>
						</div>	
					<div style="height:10px;"></div>	
					<div class="row">
						<div class="col-lg-3" align="right">
							<label class="control-label" style="position:relative; top:7px;">Level</label>
						</div>
						<div class="col-lg-5">
							<select name="level" class="form-control select2" style="width: 100%;" placeholder="Pilih">
									<option selected="selected"  ><?php echo  $erow['Level']; ?> </option>
									<option  >Admin</option>
									<option  >User</option>
								</select>
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
    </div>
    </div>
        </div>
    </div>
<!-- /.modal -->
<!-- view dokumen -->
     <div class="modal fade" id="view<?php echo $row['kd_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"  style="border: 5px solid #F5F5F5;">
                <div class="modal-header" style="background-color: #F5F5F5;  ">
                </div>
                <div class="modal-body">
				<?php
				   include"../koneksi/koneksi.php"; //untuk memanggil koneksi
					$edit=mysql_query("select * from user where kd_user='".$row['kd_user']."'");
					$erow=mysql_fetch_array($edit);
				?>
				<div class="container-fluid">
						<div>
							<div align="center"><img height=470px width="470px"src="admin/<?php echo"$erow[foto]"?>"</div>
						</div>
                </div> 
				</div>
            </div>
        </div>
    </div>
<!-- /.modal -->
