		  /* cek username */
		  $(document).ready(function(){
				$("#button2").hide();
				$("#username").change(function(){
					$("#cek").html("<img src='images/loader.gif'> Mengecek Username..!");
					
					var username = $("#username").val();
					var id = $("#id").val();
					if ( username.length >= 6 ) {
						$("#cek").show();
						$.ajax({
							type:"post",
							url:"cek_username.php",
							data:"username="+username+"&id="+id,
							success: function(data){
								if ( data == 0 ){
									$("#cek").html("<img src='images/tick.gif'>Username Tersedia");
									$("#button").show();
									$("#button2").hide();
								} else {
									$("#cek").html("<span style='color:red'>Username tidak tersedia</span>");
									$("#button").hide();
									$("#button2").show();
								}
							}
						});
					} else {
							$("#cek").hide();
							}
				});
				
		  });