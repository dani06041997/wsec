<!DOCTYPE html>
<!-- Camera is a Pixedelic free jQuery slideshow | Manuel Masia (designer and developer) --> 
<html> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
    <title>Workshop Electro Polinema</title> 
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url()?>assets/img/WSEC Logo.png">
	<link rel='stylesheet' id='camera-css'  href='<?php echo base_url()?>assets/css/style_jquery.css' type='text/css' media='all'> 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style_hover.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bar.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/result-light.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css" />
		<link href="<?php echo base_url()?>library/css/styles1.css" rel="stylesheet" media="screen">
<!-- Bootstrap -->
		<link href="<?php echo base_url()?>library/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<!-- dataTables -->
		<link href="<?php echo base_url()?>library/css/dataTables.bootstrap.min.css" rel="stylesheet" media="screen">
		<!-- Kuta -->		
		<link href="<?php echo base_url()?>library/css/styles2.css" rel="stylesheet" media="screen">
 <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.easing.1.3.js'></script> 
        <script type='text/javascript' src='<?php echo base_url()?>assets/js/camera.min.js'></script> 
    	
		
	
		
	
		
		
	
</head>

<nav>
<a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>    
   <ul class="menu" style="
   margin-bottom: 0px;>
   <
   li style=;
   padding-left: 10px;
   id=;
   padding-top: 16px;
   "a">
						<img style="float:left;padding-top: 5px;" src="<?php echo base_url()?>assets/img/logo.gif" width="75" ><img style="float:left;padding-top: 3px;" src="<?php echo base_url()?>assets/img/Home_01.png" width="350" >
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <li><a  href="<?php echo base_url() ?>index.php/welcome/index"><i class="icon-home-4"></i> HOME</a>
   </li>
  <li><a class="homer" href="#"><i class="icon-file-5"></i> PROFIL</a>
  <ul class="sub-menu">
   <li><a href="<?php echo base_url() ?>index.php/welcome/menu_workshop">Workshop</a></li>
   <li><a href="#">Anggota</a>
   <ul>
    <li><a href="<?php echo base_url() ?>index.php/welcome/menu_Dinasti19">Dinasti 19</a></li>
    <li><a href="<?php echo base_url() ?>index.php/welcome/menu_Dinasti20">Dinasti 20</a></li>
    </ul>
   </li>
   <li><a href="<?php echo base_url() ?>index.php/welcome/menu_alumni">Alumni</a></li>
   <li><a href="<?php echo base_url() ?>index.php/welcome/menu_so">SO</a></li>
   </ul>
   </li>
    <li><a  href="http://bit.ly/2cWQolt"><i class="icon-book-3"></i> PENDAFTARAN</a>

  <li><a  href="#"><i class="icon-images"></i> GALLERY</a>
  <ul class="sub-menu">
   <li><a href="<?php echo base_url() ?>index.php/welcome/menu_gproker">Proker</a></li>
   <li><a href="<?php echo base_url() ?>index.php/welcome/menu_gpelatihan">Pelatihan</a></li>
   <li><a href="<?php echo base_url() ?>index.php/welcome/menu_gproyek">Proyek</a></li>
   <li><a href="<?php echo base_url() ?>index.php/welcome/menu_gumum">Umum</a></li>
   </ul>
  </li>
    <li><a  href="<?php echo base_url() ?>index.php/welcome/menu_pelatihan"><i class="icon-busy"></i> PELATIHAN</a>
	
   </li>
  <li><a  href="<?php echo base_url() ?>index.php/welcome/menu_berita"><i class="icon-newspaper"></i> BERITA</a>
  
  </li>
  <li><a  href="<?php echo base_url() ?>index.php/welcome/lihat/contact"><i class="icon-location-3"></i> CONTACT</a>
  </li>
  
  
  </ul>
  </nav> 

<body style="margin-top:-16px;" id="home">

<div id="main_wrapper">
			<div id="main_content">
			
				<!-- page heading -->
				<div class="page-heading">				
					<h2 class="page-title">
						&nbsp;&nbsp;&nbsp;<i class="icon-user"></i> Daftar Anggota Dinasti 20
					</h2>					
				</div>
    <div class="col-md-offset-0 col-md-12 col-md-offset-0">

				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						
						
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					
					<div class="box-content">
						<table class="table table-striped table-bordered datatable">
						  <thead>
							  <tr>
						
								  <th>Nim</th>
								  <th>Nama Anggota</th>
								  <th>Prodi</th>
								  <th>No Telp</th>
								  
								  
							  </tr>
						  </thead>   
						  <tbody>
							<?php
							foreach($anggota20->result() as $baris){
							?>
							<tr>
								<td class="center"><?php echo $baris->nim;?></td>
								<td class="center"><?php echo $baris->nama_ang;?></td>
								<td class="center"><?php echo $baris->prodi;?></td>
								<td class="center"><?php echo $baris->no_telp;?></td>
							</tr>
							<?php } ?>
						  </tbody>
					  </table> 

				<!-- Pesan jika telah melakukan aksi -->
					<?php if ( isset( $_SESSION['info'] ) ) { ?>

						<div style="width:320px;background:#eee;border-left:5px solid #46b8da;padding:10px;"> 
							Berhasil <?php echo $_SESSION['info'] ?> Data
						</div>

					<?php unset( $_SESSION['info'] ); } ?>

					</div>
				</div><!--/span-->
			
			</div><!--/row-->
    </div>
	
	</div></div>
  
        
        
     <!--halaman Kesenian-->   
		
	<div id="footer">
	<center><p style="color:#FFF">Copyright &copy WSEC | 2016 </u></p></center>
	</div>
		
		
        <!-- base -->
		<script src="<?php echo base_url()?>library/js/jquery.js"></script>
		<script src="<?php echo base_url()?>library/js/jquery-migrate-1.2.1.js"></script>
		<script src="<?php echo base_url()?>library/bootstrap/dist/js/bootstrap.min.js"></script>	

		<!-- addons -->
		<script src="<?php echo base_url()?>library/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()?>library/js/dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>library/plugins/moment.min.js"></script>
		<script src="<?php echo base_url()?>library/plugins/chart-plugins.js"></script>
		<script src="<?php echo base_url()?>library/plugins/redactor/redactor.min.js"></script>
		<script src="<?php echo base_url()?>library/plugins/jquery.nice-file-input.js"></script>
		<script src="<?php echo base_url()?>library/plugins/selectize.min.js"></script>
		<script src="<?php echo base_url()?>library/plugins/jquery.icheck.min.js"></script>
		<script src="<?php echo base_url()?>library/plugins/ion.rangeSlider.min.js"></script>
		<script src="<?php echo base_url()?>library/plugins/pikaday.js"></script>
		<script src="<?php echo base_url()?>library/plugins/pikaday.jquery.js"></script>
		<script src="<?php echo base_url()?>library/js/loader.js"></script>			
			<script>

	// Fungsi untuk pengiriman form baca dokumentasinya di https://github.com/malsup/form/
	function set_ajax(identifier){
		
		var options = {
			beforeSend: function() {

				$(".progress-container").show();
				$(".btn-submit").attr("disabled",""); // Membuat button submit jadi tidak bisa terklik
			 
			},
			uploadProgress: function(event, position, total, percentComplete) {

				$(".progress-bar").attr('style','width'+percentComplete+'%');

			},
			success:function(data, textStatus, jqXHR,ui) {

				if ( data.trim() == "Sukses" ) {

					$(".progress-bar").attr('style','width:100%');
					setTimeout(function(){ location.reload() }, 2000);

				} else {

					$(".progress-container").hide();
					$("#pesan-required-field").html(data);
					$("#modal-peringatan").modal('show');
					$(".btn-submit").removeAttr('disabled','');
				}

			},
			error: function(jqXHR, textStatus, errorThrown){

				$(".progress-container").hide();
				$("#pesan-required-field").html('Gagal Memproses data<br/> textStatus='+textStatus+', errorThrown='+errorThrown);
				$("#modal-peringatan").modal('show');
			}
		 
		};
		 
		// kirim form dengan opsi yang telah dibuat diatas
		$("#"+identifier).ajaxForm(options);
	}

	$(function(){
		// sidebar
		$('[id^="show"]').on('click', function() {
			$($(this).data('toggle')).toggleClass('show-menu');
		});

		// dataTables
		$('.datatable').DataTable(/*{ 'scrollX': true }**/);

		// Untuk pengiriman form tambah
		set_ajax('tambah-data');

		// Untuk pengiriman form sunting
		set_ajax('edit-data');

		// Hapus
		$('#modal-konfirmasi').on('show.bs.modal', function (event) {
			var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

			// Untuk mengambil nilai dari data-id="" yang telah kita tempatkan pada link hapus
			var id = div.data('id') 

			var modal = $(this)

			// Mengisi atribut href pada tombol ya yang kita berikan id hapus-true pada modal.
			modal.find('#delete-true').attr("href","<?php echo site_url() ?>/welcome/delete_admin_jadwal_pelatihan/<?php echo $baris->id;?>="+id); 

		});


		// Untuk sunting
		

	});
		$('#edit-data').on('show.bs.modal', function (event) {
			var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

			var id 					= div.data('id');
			var prodi 				= div.data('prodi');
			var materi 			= div.data('materi');
			var jam     = div.data('jam');
			var hari     = div.data('hari');
		
			var modal 	= $(this)

			// Isi nilai pada field
			modal.find('#id').attr("value",id);
			modal.find('#prodi').attr("value", prodi);
			modal.find('#materi').attr("value",materi);
			modal.find('#jam').attr("value",jam);
			modal.find('#hari').attr("value",hari);
		

			

		});
</script>
    
	
</body> 
</html>