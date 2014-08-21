<?php 
	$this->load->library('image_lib');
?>
<!DOCTYPE html>
<html>
<head>
	<title>IMDRS | <?php echo $title; ?></title>
</head>
<body style="background-color:#FFF">
	<center>
		<div id="header" style="background-color:#280000;height:90px;width:100%;border-bottom:2px solid #FFF;color:#FFF;">
			
				<!--<img src="assets/main/coat_of_arms.png" style="width:70px;height:80px;float:left;margin-left:20px;">-->
				<div style="float:left;margin-left:5px;margin-top:5px;text-align:left;">					
					<!--<p>Ministry of Health</p>-->					
					<p style="font-size:14px;margin-top:25px;text-align:left;">Integrated Medical Diagnostic &amp; Recording System (IMDRS) </p>
				</div>
				<div id="menu" style="height:80px;width:auto;float:right;margin-right:10px;color:#fff;">
					<?php 	
						if(isset($this->session->user_data['menu'])){
							echo $this->session->user_data['menu'];
						}
					?>
				</div>
				<div id="" style="height:80px;width:auto;float:right;margin-right:10px;margin-top:60px;color:#E6E6E1;font-size:11px;">
					<?php 
					echo date('l jS F Y h:i:s A');
				?>
				</div>
				
				
				
		</div>
		<div id="main-content" style="background-color:#E6E6E1;height:auto;width:100%">
			<?php $this->load->view($content_view); ?>
		</div>
		<div id="footer" style="background-color:#CCCCCC;height:30px;width:100%;border-top:1px solid #FFF;font-size:11px;color:#808080;">
			<p>&copy; Government of Kenya , 2014</p>
		</div>
	</center>
</body>
</html>