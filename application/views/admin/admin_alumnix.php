<!DOCTYPE html>
<html>

		<!-- top header navbar -->
		<?= $partials['header'] ?>
		<!-- ./ top header navbar -->
		<br>
		<div id="main_wrapper">
			<div id="main_content">
			
				<!-- page heading -->
				<div class="page-heading">				
					<h2 class="page-title">
						<i class="icon-star-3"></i> Alumni
					</h2>					
				</div>
				<!-- ./ page heading -->
				
				<!-- breadcrumb -->
				<ol class="breadcrumb breadcrumb-main">
					<li><a href="#">Home</a></li>
					<li class="active">Alumni</li>
					
				</ol>
				<!-- ./ breadcrumb -->
				
				<!-- contents -->
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
								  <th>No</th>
								  <th>Nama</th>
								  <th>Alamat</th>
								  <th>Tahun Lulus</th>
								  <th>Pekerjaan</th>
								  <th>No Tlp</th>
								 
								  
							  </tr>
						  </thead>   
						  <tbody>
							<?php
							foreach($alumni->result() as $baris){
							?>
							<tr>
								<td><?php echo $baris->id;?></td>
								<td class="center"><?php echo $baris->nama;?></td>
								<td class="center"><?php echo $baris->alamat;?></td>
								<td class="center"><?php echo $baris->thn_lulus;?></td>
								<td class="center"><?php echo $baris->pekerjaan;?></td>
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
			
			</div>
			</div>
				
			<!-- ./ contents -->				
			</div>
					
			<!-- Modal tambah data -->
			

								

			<!-- sidebar -->
			<ul id="sidebar" class="nav nav-pills nav-stacked">
	
	<li class="">
		<a href="#">
			<i class="icon-user"></i>
			<span>Anggota</span>
		</a>
	</li>
	<li class="active">
		<a href="<?php echo base_url()?>index.php/welcome/admin_alumni">
			<i class="icon-star-3"></i>
			<span>Alumni</span>
		</a>
	</li>
	<li class="">
		<a href="#">
			<i class="icon-briefcase"></i>
			<span>Devisi</span>
		</a>
	</li>
	<li class="">
		<a href="#">
			<i class="icon-book"></i>
			<span>Buku</span>
		</a>
	</li>
	<li class="">
		<a href="#">
			<i class="icon-camera"></i>
			<span>Gallery</span>
		</a>
	</li>
	<li class="">
		<a href="#">
			<i class="icon-calendar"></i>
			<span>Jadwal</span>
		</a>
	</li>
	<li class="">
		<a href="#">
			<i class="icon-fire"></i>
			<span>Lomba</span>
		</a>
	</li>
	<li class="">
		<a href="#">
			<i class="icon-gift"></i>
			<span>Prestasi</span>
		</a>
	</li>
</ul>

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

			

	
			<!-- ./ sidebar -->
		


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
			modal.find('#delete-true').attr("href","<?php echo site_url() ?>/welcome/delete_admin_alumni/<?php echo $baris->id;?>="+id); 

		});


		// Untuk sunting
		

	});
		$('#edit-data').on('show.bs.modal', function (event) {
			var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

			var id 					= div.data('id');
			var nama 				= div.data('nama');
			var alamat 			= div.data('alamat');
			var thn_lulus     = div.data('thn_lulus');
			var pekerjaan	= div.data('pekerjaan');
			var no_telp		= div.data('no_telp');

			var modal 	= $(this)

			// Isi nilai pada field
			modal.find('#id').attr("value",id);
			modal.find('#nama').attr("value", nama);
			modal.find('#alamat').attr("value",alamat);
			modal.find('#thn_lulus').attr("value",thn_lulus);
			modal.find('#pekerjaan').attr("value",pekerjaan);
			modal.find('#no_telp').attr("value",no_telp);

			

		});
</script>
		
	</body>
</html>