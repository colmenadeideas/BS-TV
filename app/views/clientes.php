<div class="content bg-clientes">
	<div class="container">
		<div>
			<div class="col-lg-1 col-xs-1">
				<img class="img-responsive left" src="<?php echo IMAGES. 'clientes/'. filenameformat($this->projects[0]["cliente"]).'/logo.jpg';?>" />
			</div>			
			<h1 class="orange-title"><?php echo $this->projects[0]["cliente"]; ?></h1>
		</div>
		
		<?php 
		
			foreach ($this->projects as $project) { ?>
		<h2 class="titles-gray"><?php echo $project["name"];?></h2>
		<div id="gallery">
		 <?php 
		 	$ruta = "public/images/clientes/";
			$dir =  $project["cliente"]. "/". $project["name"]."/";			
			$files = scandir($ruta.$dir);
			$i=0;
			//print_r($files);
			foreach ($files as $key => $value) {
					
				if (($value == '.')||($value == '..')||($value == 'thumbs')) {
				} else { $i++;
					$identification = create_slug($project["name"])."-".$i
				 ?>
				<div class="imagen-gallery">
					<a href="#" data-toggle="modal" data-target="#modal-<?php echo $identification; ?>"><img src="<?php echo IMAGES . "clientes/".$dir ."/thumbs/".$value; ?>" class="img-responsive img-thumbnail" /></a>
				</div>
				
				<!-- Modal -->
				<div class="modal fade" id="modal-<?php echo $identification; ?>" tabindex="-1" role="dialog" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				        <h4 class="modal-title"><?php echo $project["name"]; ?></h4>
				      </div>
				      <div class="modal-body">
				        <img src="<?php echo IMAGES . "clientes/".$dir .$value; ?>" class="img-responsive" />
				      </div>
				      
				    </div>
				  </div>
				</div>
				
			<?php  } 
			}
		 ?>
		  <div class="clearfix"></div>
		</div>
		
		<?php } ?>
	</div>

</div>