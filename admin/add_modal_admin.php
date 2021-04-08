<style type="text/css">

.modal-content{
    padding-top: 0px;
    border-radius: 0;
    border: 5px solid #3498db;
}
.modal-header{
    background-color: #3498db;
}
</style>
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Admin</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_admin.php" enctype="multipart/form-data"> <!--query simpan-->
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Nama</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="nama" placeholder="muhammad andi" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Username</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="user" placeholder="andi012345" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Password</label>
						</div>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="password" placeholder="*******************" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;"> Email</label>
						</div>
						<div class="col-lg-10">
							<input type="emial" class="form-control" name="email" placeholder="psbr@gmail.com" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Level</label>
						</div>
						<div class="col-lg-6">
							<select name="level" class="form-control select2" style="width: 100%;" placeholder="Pilih">
									<option selected="selected" value=" ">PILIH</option>
									<option >Admin</option>
									<option>User</option>
							</select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;"> Foto</label>
						</div>
						<div class="col-lg-6">
							<input name="file" type="file" class="form-control" placeholder="Nama Intansi" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>