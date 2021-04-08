<style type="text/css">

.modal-content{
    padding-top: 0px;	
    border-radius: 0;
    border: 1px solid #00FA9A;
}
.modal-header{
    background-color: #00FA9A;
}
</style>
<?php

include"../koneksi/koneksi.php"; //untuk memanggil koneksi
// mencari kode barang dengan nilai paling besar
$query = "SELECT max(no_agenda) as maxKode FROM surat_keluar";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$kodeBarang = $data['maxKode'];

// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($kodeBarang, 1, 4);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
 $kode_otomatis = "P".str_pad($noUrut, 4, "0", STR_PAD_LEFT);
//$kodeBarang =sprintf("%04s", $noUrut);
?>
<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Surat Keluar</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_surat_keluar.php" enctype="multipart/form-data"> <!--query simpan-->
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">No. Penerimaan</label>
						</div>
						<div class="col-lg-6">
							<input type="text" class="form-control" name="no_penerimaan" readonly value="<?php echo $kode_otomatis ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">No. Surat</label>
						</div>
						<div class="col-lg-6">
							<input type="text" class="form-control" name="no_surat" placeholder="09/psbr/key/ut" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
						</div>
					</div>	
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;"> Hal:</label>
						</div>
						<div class="col-lg-10">
							<textarea class="form-control"  name="hal" placeholder="Hal" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;"> Alamat Tujuan:</label>
						</div>
						<div class="col-lg-10">
							<textarea class="form-control"  name="almt_tujuan" placeholder="nama intansi" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2"><label>Tanggal Surat</label></div>
								<div class="col-lg-6"><div  class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
										<input name="tgl" id="tgl"type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
								</div></div>
									<!-- /.input group -->
					</div> 
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;"> Tingkat Kerahasian</label>
						</div>
						<div class="col-lg-6">
							<select name="tngkt_kerahasian" class="form-control select2" style="width: 100%;" placeholder="Pilih">
									<option selected="selected" value=" " >PILIH</option>
									<option>Sangat Rahasia</option>
									<option>Rahasia</option>
									<option>Terbatas</option>
									<option>Biasa</option>
							</select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">KKA</label>
						</div>
						<div class="col-lg-6">
							<input type="text" class="form-control" name="kka" placeholder="RH.00.02" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;"> File </label>
						</div>
						<div class="col-lg-6">
							<input name="file" type="file" class="form-control" placeholder="Nama Intansi" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
							<p>* File harus berbentuk Pdf</p>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Batal</button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>