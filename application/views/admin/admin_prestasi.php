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
						<i class="icon-gift"></i> Prestasi
					</h2>					
				</div>
				<!-- ./ page heading -->
				
				<!-- breadcrumb -->
				<ol class="breadcrumb breadcrumb-main">
					<li><a href="#">Home</a></li>
					<li class="active">Prestasi</li>
					
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
								  <th>Nama Prestasi</th>
								  <th>Tgl Prestasi</th>
								  <th>Tingkat Prestasi</th>
								  
								  <th style="width: 318px;">Actions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-success" data-id='0' data-toggle="modal" data-target="#tambah-data">
										<i class="icon-plus">&nbsp;&nbsp;Tambah Data</i>     
									</a></th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							<?php
							foreach($prestasi->result() as $baris){
							?>
							<tr>
								<td><?php echo $baris->id;?></td>
								<td class="center"><?php echo $baris->nama_prestasi;?></td>
								<td class="center"><?php echo $baris->tgl_prestasi;?></td>
								<td class="center"><?php echo $baris->tingkat_prestasi;?></td>
							
								<td class="center">
									&nbsp;&nbsp;&nbsp;&nbsp;
									<a class="btn btn-info" href="javascript:;" 
										data-id="<?php echo $baris->id;?>" 
										data-nama_prestasi="<?php echo $baris->nama_prestasi;?>" 
										data-tgl_prestasi="<?php echo $baris->tgl_prestasi;?>"
										data-tingkat_prestasi="<?php echo $baris->tingkat_prestasi;?>"
										
										data-toggle="modal" data-target="#edit-data">
										<i class="icon-pen-2">&nbsp;&nbsp;Edit Data</i>                                            
									</a>&nbsp;&nbsp;&nbsp;&nbsp;
									<a class="btn btn-danger" href="<?php echo site_url() ?>/welcome/delete_admin_prestasi/<?php echo $baris->id;?>" onClick='return confirm("Anda yakin ingin menghapus data ini?")'>
										<span class="glyphicon glyphicon-trash"></span> Hapus Data 
										
									</a>
								</td>
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
			<div id="tambah-data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Tambah Data</h4>
						</div>
				<div class="row-fluid sortable">		
					<div class="box span12">
						<div class="box-header" data-original-title>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
							</div>
						</div>
					</div>
							<div class="modal-body">
								<div class="box-content">
									<form name="form-validate" class="form-validate" method="post" action="<?php echo site_url(); ?>/welcome/add_admin_prestasi">
										<div class="form-group">
													<label class="control-label">Nama Prestasi</label>
													<input name="nama_prestasi" class="form-control input-sm" type="text" required>
												
												</div> 
										<div class="form-group">
													<label class="control-label">Tgl Prestasi</label>
													<input name="tgl_prestasi" class="form-control input-sm" type="text" required>
													
												</div> 
										<div class="form-group">
													<label class="control-label">Tingkat Prestasi</label>
													<input name="tingkat_prestasi" class="form-control input-sm" type="text" required>
													
												</div> 
										

										<?php echo set_progress(); ?>

										<div class="modal-footer">
											<button class="btn btn-info btn-submit"><i class="icon-file"></i> Simpan</button>
											<button class="btn btn-danger" data-dismiss="modal"><i class="icon-close-2"></i> Batal</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Modal edit data -->
			<div id="edit-data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">

							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Edit Data</h4>
							</div>

							<div class="row-fluid sortable">		
								<div class="box span12">
									<div class="box-header" data-original-title>
										<div class="box-icon">
											<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
											<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
											<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
										</div>
									</div>
								</div>
							<div class="modal-body">
								<div class="box-content">
									<form name="form-validate" class="form-validate" method="post" action="<?php echo site_url(); ?>/welcome/update_admin_prestasi">
										<input type="hidden" name="id" id="id">
										<div class="form-group">
													<label class="control-label">Nama Prestasi</label>
												    <input id="nama_prestasi" name="nama_prestasi" class="form-control input-sm" required>
													
												</div> 
										<div class="form-group">
													<label class="control-label">Tgl Prestasi</label>
													<input name="tgl_prestasi" id="tgl_prestasi" class="form-control input-sm" type="text" required>
													
												</div> 
										<div class="form-group">
													<label class="control-label">Tingkat Prestasi</label>
													<input name="tingkat_prestasi" id="tingkat_prestasi" class="form-control input-sm" type="text" required>
													
												</div> 
									
										

												<?php echo set_progress(); ?>

										<div class="modal-footer">
											<button class="btn btn-info btn-submit"><i class="icon-file"></i> Simpan</button>
											<button class="btn btn-danger" data-dismiss="modal"><i class="icon-close-2"></i> Batal</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			

			<!-- Modal peringatan jika field belum terisi sempurna -->
			<div id="modal-peringatan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm modal-warning">
					<div class="modal-content">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="title">Peringatan</h4>
						</div>

						<div class="modal-body" style="background: #d9534f; color: #fff;">
							<div id="pesan-required-field"></div>
						</div>

						<div class="modal-footer">

							<center><button type="button" class="btn btn-default" data-dismiss="modal">OK</button></center>

						</div>

					</div>
				</div>
			</div>

								

			<!-- sidebar -->
			<ul id="sidebar" class="nav nav-pills nav-stacked">
	
	<li class="">
		<a href="<?php echo base_url()?>index.php/welcome/admin_anggota">
			<i class="icon-user"></i>
			<span>Anggota</span>
		</a>
	</li>
	<li class="">
		<a href="<?php echo base_url()?>index.php/welcome/admin_alumni">
			<i class="icon-star-3"></i>
			<span>Alumni</span>
		</a>
	</li>
	<li class="">
		<a href="<?php echo base_url()?>index.php/welcome/admin_devisi">
			<i class="icon-briefcase"></i>
			<span>Devisi</span>
		</a>
	</li>
	<li class="">
		<a href="<?php echo base_url()?>index.php/welcome/admin_buku">
			<i class="icon-book"></i>
			<span>Buku</span>
		</a>
	</li>
	<li class="dropdown">
		<a href="" class="dropdown-toggle" data-toggle="dropdown">
			<i class="icon-camera"></i>
			<span>Gallery</span>
		</a>
		<ul class="dropdown-menu">
			<li>
				<a href="<?php echo base_url()?>index.php/welcome/admin_gproker">
					<i class="icon-titik"></i>Gallery Proker
				</a>
			</li>
			<li>
				<a href="<?php echo base_url()?>index.php/welcome/admin_gpelatihan">
					<i class="icon-titik"></i>Gallery Pelatihan
				</a>
			</li>
			<li>
				<a href="<?php echo base_url()?>index.php/welcome/admin_gproyek">
					<i class="icon-titik"></i>Gallery Proyek
				</a>
			</li>
			<li>
				<a href="<?php echo base_url()?>index.php/welcome/admin_gumum">
					<i class="icon-titik"></i>Gallery Umum
				</a>
			</li>
		</ul>
	</li>
	<li class="">
		<a href="<?php echo base_url()?>index.php/welcome/admin_jadwal_pelatihan">
			<i class="icon-calendar"></i>
			<span>Jadwal</span>
		</a>
	</li>
	<li class="">
		<a href="<?php echo base_url()?>index.php/welcome/admin_lomba">
			<i class="icon-fire"></i>
			<span>Lomba</span>
		</a>
	</li>
	<li class="active">
		<a href="<?php echo base_url()?>index.php/welcome/admin_prestasi">
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
			modal.find('#delete-true').attr("href","<?php echo site_url() ?>/welcome/delete_admin_prestasi/<?php echo $baris->id;?>="+id); 

		});


		// Untuk sunting
		

	});
		$('#edit-data').on('show.bs.modal', function (event) {
			var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

			var id 					= div.data('id');
			var nama_prestasi 				= div.data('nama_prestasi');
			var tgl_prestasi 			= div.data('tgl_prestasi');
			var tingkat_prestasi     = div.data('tingkat_prestasi');
			
			var modal 	= $(this)

			// Isi nilai pada field
			modal.find('#id').attr("value",id);
			modal.find('#nama_prestasi').attr("value", nama_prestasi);
			modal.find('#tgl_prestasi').attr("value",tgl_prestasi);
			modal.find('#tingkat_prestasi').attr("value",tingkat_prestasi);
			

			

		});
</script>
		
	</body>
</html>