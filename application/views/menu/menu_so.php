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

 <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.easing.1.3.js'></script> 
        <script type='text/javascript' src='<?php echo base_url()?>assets/js/camera.min.js'></script> 
    	
		
	
		<link id="base-style" href="<?php echo base_url()?>assets/css2/style.css" rel="stylesheet">
	
		
		
	
</head>

<nav>
<a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>    
   <ul class="menu" style="margin-bottom: 0px;>
   <li style=; padding-left: 10px; id="a">
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


    <div class="row-fluid sortable">
				<div class="box span12">
					
					<div class="box-content">
					<div class="masonry-gallery" align="center">
						<?php
						$per_page = abs($this->input->get('per_page'));
	foreach($so->result() as $baris){
	?>
<h1><?php echo $baris->judul;?></h1>
							
							</div><br>
						<div class="masonry-gallery" align="center">
						
	
														<div id="image-1" class="masonry-thumb" style="border: 2px solid #ddd; line-height: 0;">
														
								
								
								<a title="<?php echo $baris->keterangan;?>" href="<?php echo base_url(); ?>/library/images/so/<?php echo $baris->gambar;?>"><img class="grayscale" src="<?php echo base_url(); ?>/library/images/so/<?php echo $baris->gambar;?>" alt="gallery" width="1250" height="700"></a>
								
							
							</div>
											
										
													</div>
													<?php } ?>			
													
					</div>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div class="pagination"><?php echo $this->pagination->create_links(); ?></div>	
				</div><!--/span-->
			
			</div><!--/row-->
    
	
  
        
        
     <!--halaman Kesenian-->   
		
	<div id="footer">
	<center><p style="color:#FFF">Copyright &copy WSEC | 2016 </u></p></center>
	</div>
		
		
        
		<script>	 
			$(document).ready(function() {
				$(".link").click(function() {
					//ambil nilai dari attribute href .link
					var target = $(this).attr('href');
					//animasi focus ke element
					$('html, body').animate({
						scrollTop : $(target).offset().top
					}, 2000);
					//membuat url menjadi static
					return false;
				});
			});
		</script>
		        


   <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
				height: '25%',
				thumbnails: true,
				pagination: false,
				thumbnails: false,
				hover: false,
				time: 2000,
				
				loader: 'false',
				
			});
		});
	</script>
    	

<script type="text/javascript">
$(document).ready(function(){ 
 var touch  = $('#resp-menu');
 var menu  = $('.menu');
 
 $(touch).on('click', function(e) {
  e.preventDefault();
  menu.slideToggle();
 });
 
 $(window).resize(function(){
  var w = $(window).width();
  if(w > 767 && menu.is(':hidden')) {
   menu.removeAttr('style');
  }
 });
 
});
</script> 
    
	
</body> 
</html>