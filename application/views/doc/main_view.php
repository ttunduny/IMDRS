<style type="text/css">
	#queue{
		padding: 5px;
		width: 15%;
		height: 96%;
		border: 1px ridge #ccc;
		background-color: #fff;
		float: left;
		margin-left: 5px;
		margin-top: 5px;
		overflow: scroll;
	}
	#diagnos{
		padding: 5px;
		width: 65%;
		height: 96%;
		border: 1px ridge #ccc;
		background-color: #fff;
		float: left;
		margin-left: 5px;
		margin-top: 5px;
	}
	#suspended{
		padding: 5px;
		width: 15%;
		height: 96%;
		border: 1px ridge #ccc;
		background-color: #fff;
		float: left;
		margin-left: 5px;
		margin-top: -40px;
		overflow: scroll;
	}
	.waiting{
		width: 96%;
		border: 1px ridge;
		height: 35px;
		padding: 1px;
		margin-top: 2px;
		background-color:#FFF5E6;

	}
	.referred{
		width: 96%;
		border: 1px ridge;
		height: 35px;
		padding: 1px;
		margin-top: 2px;
		background-color:#F5FAFF;

	}
</style>
<div id="content" style="background-color:#E6E6E6;height:650px;width:100%;">
	<div id="queue">
		WAITING
		<br/>
		<?php 
		for ($i=0; $i < 10; $i++) {
			$number = "PN/";
			$number.= mt_rand(1000,100000);
			 ?>
			<div class="waiting">				
				<?php 
					echo "$number";
				?>			
			</div>
		<?php }
		?>
			
		
	</div>
	<div id="diagnos"></div>
	<div id="suspended">
		REFERRED
		<br/>
		<?php 
		for ($i=0; $i < 10; $i++) { 
			$number = "PN/";
			$number.= mt_rand(1000,100000);
			?>
			<div class="referred">
				<?php 
					echo "$number";
				?>
			</div>
		<?php }
		?>
			
	</div>
</div>

