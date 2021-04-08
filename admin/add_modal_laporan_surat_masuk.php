 <style type="text/css">

.modal-content{
    padding-top: 0px;
    border-radius: 0;
    border: 1px solid #F5F5F5;
}
.modal-header{
    background-color: 	#32CD32;
}
</style>
 <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Laporan Perbulan</h4></center>
                </div>
                <div class="modal-body">
					<div class="container-fluid">
						<form method="POST" action="cetak/cetak_pdf_surat_masuk.php" enctype="multipart/form-data"> <!--query simpan-->
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">Bulan</label>
							</div>
							<div class="col-lg-5">
								<select  selected="selected" name="bulan" class="form-control select2" style="width: 100%;">
								<option value="01">Januari</option>
								<option value="02">Februari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="12">November</option>	
								<option value="12">Desember</option>
								</select>
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">Tahun</label>
							</div>
							<div class="col-lg-5">
								<select name="tahun" class="form-control select2" style="width: 100%;" align="right">
								<?php
								$mulai= date('Y') - 50;
								for($i = $mulai;$i<$mulai + 100;$i++){
									$sel = $i == date('Y') ? ' selected="selected"' : '';
									echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
								}
								?>
								</select>
							</div>
						</div>
						<div class="modal-footer">
		                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
		                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Cetak PDF</a></button>
						</div>
					</from>
				 </div>
			</div>
		</div>