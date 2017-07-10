<?php
defined('BASEPATH') OR exit('No direct script access
allowed');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <title>Peta Lokasi</title>
<link rel="shortcut icon" type="image/png" href="<?php echo base_url()?>assets/img/WSEC Logo.png">
    	<link rel='stylesheet' id='camera-css'  href='<?php echo base_url()?>assets/css/style_jquery.css' type='text/css' media='all'> 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style_hover.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bar.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/result-light.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css" />
		<link href="<?php echo base_url()?>library/css/styles1.css" rel="stylesheet" media="screen">

 
		<script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.easing.1.3.js'></script> 
        <script type='text/javascript' src='<?php echo base_url()?>assets/js/camera.min.js'></script> 
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets2/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url() ?>assets2/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets2/css/zabuto_calendar.css">
    <link id="base-style" href="<?php echo base_url() ?>assets2/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets2/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets2/lineicons/style.css">
    <!--gallery-->
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets2/css/styleg.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets2/css/demog.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets2/css/googlemaps.css" />
    <script src="<?php echo base_url()?>assets2/js/modernizr.custom.63321.js"></script>  
  
    <!--desain tabel-->
    <link type="image/x-icon" rel="shortcut icon" href="/templates/ja_vauxite/favicon.ico"></link>
    <script src="/media/system/js/mootools.js" type="text/javascript"></script>
    <link type="text/css" href="_assets/system.css" rel="stylesheet"></link>
    <link type="text/css" href="_assets/general.css" rel="stylesheet"></link>
    <link type="text/css" href="_assets/editor.css" rel="stylesheet"></link>
    <link type="text/css" href="_assets/typo.css" rel="stylesheet"></link>
    <script src="_assets/ja.script.js" type="text/javascript" language="javascript"></script>   
    <script src="_assets/ja.ddmod.js" type="text/javascript" language="javascript"></script>
    <style type="text/css">
        .ja-movable-container{visibility: hidden;}
    </style>
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets2/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets2/css/style-responsive.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets2/js/chart-master/Chart.js"></script>    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
     <nav>
<a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>    
   <ul class="menu" style="margin-bottom: 0px;>
   <li style=; padding-left: 10px; id="a">
						<img style="float:left;padding-top: 5px;" src="<?php echo base_url()?>assets/img/logo.gif" width="75" ><img style="float:left;padding-top: 3px;" src="<?php echo base_url()?>assets/img/Home_01.png" width="350" >
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <li><a  href="<?php echo base_url() ?>index.php/welcome/index"><i class="icon-home-4"></i> HOME</a>
   </li>
  <li><a  href="#"><i class="icon-file-5"></i> PROFIL</a>
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
  <li><a href="#"><i class="icon-images"></i> GALLERY</a>
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
  <li><a class="homer" href="<?php echo base_url() ?>index.php/welcome/lihat/contact"><i class="icon-location-3"></i> CONTACT</a>
  </li>
  
  
  </ul>
  </nav> 
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!-- *************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      
          <section class="wrapper">
            <center><h3>Map & Contact Person Workshop Electro (Polinema)</h3> 
              <div id="maps-wrapper">
                <div class="maps"></div>
                <div class="info"></div>
              </div>

              <!-- CUSTOM CHART START -->            
            </div> <!--custom chart end-->         
            </div><!-- /col-lg-9 END SECTION MIDDLE -->
          </section>       
      
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                         
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              <center>Copyright &copy WSEC | 2016 </u></center>
              
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>assets2/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url() ?>assets2/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets2/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url() ?>assets2/js/common-scripts.js"></script>
    <div style="width: 3px; z-index: auto; background: rgb(64, 64, 64) none repeat scroll 0% 0%; cursor: default; position: fixed; top: 0px; left: 207px; height: 395px; display: block; opacity: 0;" class="nicescroll-rails" id="ascrail2000">
    <div style="position: relative; top: 104px; float: right; width: 3px; height: 235px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;"></div></div>
    <div style="height: 3px; z-index: auto; background: rgb(64, 64, 64) none repeat scroll 0% 0%; top: 392px; left: 0px; position: fixed; cursor: default; display: none; opacity: 0; width: 207px;" class="nicescroll-rails" id="ascrail2000-hr">
    <div style="position: relative; top: 0px; height: 3px; width: 210px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px; left: 0px;"></div></div>
    <div style="width: 6px; z-index: 1000; background: rgb(64, 64, 64) none repeat scroll 0% 0%; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;" class="nicescroll-rails" id="ascrail2001">
    <div style="position: relative; top: 0px; float: right; width: 6px; height: 283px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;"></div></div>
    <div style="height: 6px; z-index: 1000; background: rgb(64, 64, 64) none repeat scroll 0% 0%; position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;" class="nicescroll-rails" id="ascrail2001-hr">
    <div style="position: relative; top: 0px; height: 6px; width: 1366px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;"></div></div>
    
  
    <script type="text/javascript" src="<?php echo base_url() ?>assets2/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets2/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url() ?>assets2/js/sparkline-chart.js"></script>    
  <script src="<?php echo base_url() ?>assets2/js/zabuto_calendar.js"></script> 
  

  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

    <!--script gallery-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.stackslider.js"></script>
    <script type="text/javascript">      
      $( function() {        
        $( '#st-stack' ).stackslider();
      });
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script type="text/javascript">      
      $( function() {        
        $( '#st-stack' ).stackslider();
      });
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript">
      var locations = [ <?php foreach ($data as $row) : ?>
        [<?= $row->id;?>, <?= $row->latitude; ?>, <?= $row->longitude; ?>],
      <?php endforeach; ?> ];

      function initialize() {
        //Parameter Google maps
        var mapOptions = {
          zoom: 12, //level zoom
          center: new google.maps.LatLng(-7.9469,112.616), //posisi tengah peta
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
      
        // Buat peta di 
        var map = new google.maps.Map(document.getElementById('maps-wrapper').getElementsByClassName('maps')[0], mapOptions);
        // Tambahkan Marker 

        var marker, i;
        /* kode untuk menampilkan banyak marker */
        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon: '<?php echo base_url()?>assets2/img-contact/wsec.png'
          });

          showMarkerInfo(marker, i);
        }
      }

      function showMarkerInfo(marker, num) {
        var id = locations[num][0];
  
        google.maps.event.addListener(marker, 'click', function() {
          $.ajax({
            url: "<?= base_url('index.php/contact/contact_ajax/contact') ?>",
            type: 'POST',
            data: { 'id': id },
            success: function(data) {                    
              $('#maps-wrapper .info').html(data);
            }
          });
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </body>
</html>
