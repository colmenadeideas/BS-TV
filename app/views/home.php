<div class="content home-banner">
	<div class="container">
		<div id="home-banner"> 
			
			<div id="carousel-home" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
			    <!--li data-target="#carousel-home" data-slide-to="1"></li-->
			  </ol>
			
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="<?php echo IMAGES; ?>banners/tecnovial-equipos-de-calidad-tecnologia.jpg" alt="Tecnovial - Equipos de Calidad">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>			    
			  </div>
			
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">			   
			  </a>
			  <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
			    
			  </a>
			</div>
			
		</div>
	</div>
</div>
<div class="content home-clientes">
	<div class="container">
		<div id="nuestros-clientes">
			<p class="text-center">La seguridad y estabilidad que manejamos como empresa y la alta calidad de nuestros productos nos<br> 
ha permitido mantener una cartera de clientes, usuarios de nuestros productos y servicios</p>
 			
			   
			<div id="clientes" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    
			    <?php 
			    
			     $count = 0; //items en carousel per group
				 $group = 0;
				 $i= 1; //item
				 $lastElement =  count($this->clientes);				 
				 $fullbody 	 = "";		
				 $class  = "";
				
				
				foreach ($this->clientes as $cliente) {
					
					$filename =  IMAGES. 'clientes/'. filenameformat($cliente["name"]).'/logo.jpg';
					//$imagen = '<div class="col-lg-1 col-sm-1"><img src="'. $filename .'" alt="'. $cliente["name"].'" class="img-responsive"></div>';
					
					if ($group == 0) { $status = 'active'; } else { $status = ''; }
						
						switch ($count) {
							case 0:
								$start 	= '<div class="'.$status.' item"><div class="row">';
								$end 	= '';
								
								$licontrol .= '<li data-target="#aliados-logos" data-slide-to="'.$group.'" class="'.$status.'"></li>';
								$group ++;
								
								$count++;
								break;
								
							case 11: //max post per page
								$start 	= '';
								$end 	= '</div></div>';								
								$count = 0;
								break;
								
							default:
								$start 	= '';
								$end 	= '';
								
								$count++;
								break;
						}
						
					if($i == $lastElement) {
						$end = 	'</div></div>';							
						
					}
					
					$fullbody .= $start;
					$fullbody .= '<div class="col-sm-1 col-lg-1"><a href="#"><img src="'. $filename .'" alt="'. $cliente["name"].'" class="img-responsive"></a></div>';
					$fullbody .= $end;   
						
				 	//}
									 	
					
					$i++;	
						
					/*switch ($count) {
						case '0':
							$full 	.= '<div class="item'. $class.'">';
							$full 	.= $imagen;
							$full 	.= '';	
							$count++;							
							break;
							
						case '11':
							$full 	.= '';
							$full 	.= $imagen;
							$full 	.= '</div>';	
							$count = 0;
							$group++;
							break;
						
						default:							
							$full 	.= '';
							$full 	.= $imagen;
							$full 	.= '';
							$count++;
							break;
					}
					
					$i++; */
										
				} 
				 echo $fullbody;
				?>				
				
				    
			 </div><!--carousel inner-->
			
			  <!-- Controls -->
			  <a class="left carousel-control" href="#clientes" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#clientes" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>
			
			
			
			
		</div>
	</div>
</div>