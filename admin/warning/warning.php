<?php
		if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "sukses"){?>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
			<div class="container bootstrap snippet">
			    <div class="alert alert-success alert-white rounded" >
			        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
			        <div class="icon">
			            <i class="fa fa-check"></i>
			        </div>
			        <p style="color: #008000"><strong >Berhasil</strong> 
			        Melakukan Pengarsipan !</p>
			    </div>
			</div>
		
	<?php
		}else if($_GET['pesan'] == "gagal"){ ?>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
				<div class="container bootstrap snippet">
					<div class="alert alert-danger alert-white rounded">
			        	<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
			        	<div class="icon">
			            	<i class="fa fa-times-circle"></i>
			        </div>
			        	<p style="color: #FF0000"><strong>Gagal</strong> 
			        		File Tidak Dibolehkan !</p>
			    	</div> 	
			    </div>
	<?php		
		}else if($_GET['pesan'] == "info"){ ?>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
				<div class="alert alert-warning alert-white rounded">
			        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
			        <div class="icon">
			            <i class="fa fa-warning"></i>
			        </div>
			        <p style="color: #FFA500"><strong>Maff</strong> 
			        File Terlalu Besar Ukuruanya !</p>
			    </div>  
	<?php		
		}else if($_GET['pesan'] == "delet"){ ?>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
			<div class="container bootstrap snippet">
			    <div class="alert alert-success alert-white rounded" >
			        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
			        <div class="icon">
			            <i class="fa fa-check"></i>
			        </div>
			        <p style="color: #008000"><strong >Data</strong> 
			        Berhasil Dihapus!</p>
			    </div>
			</div>
	<?php		
		}else if($_GET['pesan'] == "gagal_hapus"){ ?>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
				<div class="container bootstrap snippet">
					<div class="alert alert-danger alert-white rounded">
			        	<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
			        	<div class="icon">
			            	<i class="fa fa-times-circle"></i>
			        </div>
			        	<p style="color: #FF0000"><strong>Gagal</strong> 
			        		File Tidak Berhasil Dihapus !</p>
			    	</div> 	
			    </div>
	<?php		
		}else if($_GET['pesan'] == "edit"){ ?>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
			<div class="container bootstrap snippet">
			    <div class="alert alert-success alert-white rounded" >
			        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
			        <div class="icon">
			            <i class="fa fa-check"></i>
			        </div>
			        <p style="color: #008000"><strong >Berhasil</strong> 
			        Edit Data !</p>
			    </div>
			</div>
	<?php		
		}else if($_GET['pesan'] == "gagal_edit"){ ?>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
				<div class="container bootstrap snippet">
					<div class="alert alert-danger alert-white rounded">
			        	<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
			        	<div class="icon">
			            	<i class="fa fa-times-circle"></i>
			        </div>
			        	<p style="color: #FF0000"><strong>Gagal</strong> 
			        		Tidak Berhasil Edit Data !</p>
			    	</div> 	
			    </div>
	<?php		
		}else if($_GET['pesan'] == "gagal_simpan"){ ?>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
				<div class="container bootstrap snippet">
					<div class="alert alert-danger alert-white rounded">
			        	<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
			        	<div class="icon">
			            	<i class="fa fa-times-circle"></i>
			        </div>
			        	<p style="color: #FF0000"><strong>Gagal</strong> 
			        		Melakukan Pengarsipan !</p>
			    	</div> 	
			    </div>
	<?php
		}else if($_GET['pesan'] == "disposisi"){?>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
			<div class="container bootstrap snippet">
			    <div class="alert alert-success alert-white rounded" >
			        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
			        <div class="icon">
			            <i class="fa fa-check"></i>
			        </div>
			        <p style="color: #008000"><strong >Berhasil</strong> 
			        Melakukan Disposisi Surat!</p>
			    </div>
			</div>
	<?php		
		}else if($_GET['pesan'] == "gagal_disposisi"){ ?>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
				<div class="container bootstrap snippet">
					<div class="alert alert-danger alert-white rounded">
			        	<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
			        	<div class="icon">
			            	<i class="fa fa-times-circle"></i>
			        </div>
			        	<p style="color: #FF0000"><strong>Gagal</strong> 
			        		Melakukan Disposisi Surat !</p>
			    	</div> 	
			    </div>
	<?php 
		}
	}
	?>