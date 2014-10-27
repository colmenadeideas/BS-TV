<div id="donde-estamos">
	<?php $this->render('map'); ?>
</div>
<div class="content bg-contacto contacto">
	<div class="container">
		<div id="cotizacion" class="col-lg-8 col-md-8">
			<h2 class="titles-gray">
				Cotización
			</h2>
			<div class="clearfix"></div>
			
			<form id="cotizacion-form" method="post">
				
			
				<div class="row col-lg-4 col-sm-4">
					 <input type="email" class="form-control" name="name" placeholder="* Nombre o Empresa">
				</div>
				<div class="col-lg-4 col-sm-4">
					 <input type="email" class="form-control" name="rif" placeholder="* RIF">
				</div>
				<div class="row col-lg-4 col-sm-4">
					 <input type="email" class="form-control" name="state" placeholder="Estado">
				</div>
				
				
				
				<div class="row col-lg-4 col-sm-4">
					 <input type="email" class="form-control" name="address" placeholder="* Dirección">
				</div>
				<div class="col-lg-4 col-sm-4">
					 <input type="email" class="form-control" name="phone" placeholder="* Teléfono">
				</div>
				<div class="row col-lg-4 col-sm-4">
					 <input type="email" class="form-control" name="email" placeholder="* Email">
				</div>
				
				
				<div class="row col-lg-12 col-sm-12">
					 <textarea class="form-control" rows="3" name="message" placeholder="* Descripción"></textarea>
				</div>
				<div class=" row col-lg-8 col-sm-8">
					 * <span class="hint">Todos los campos con este signo, deberán ser llenados obligatoriamente</span>	
				</div>
				<div class="row col-lg-4 col-sm-4 text-right">
					  <button type="submit" class="btn btn-default send">Enviar Mensaje</button>
				</div>
			</form>
		</div>
		<div class="col-lg-4 col-md-4">
			<div class="col-xs-12 col-lg-12">
				<h2 class="titles-gray">
					¿Donde Estamos?
				</h2>
			</div>
				
			<div class="col-lg-2 col-xs-2 direccion">
					<div class="location">
						<img src="<?php echo IMG; ?>temp/location.png" class="img-responsive"/>
					</div>
					
			</div>
			<div class="col-lg-10 col-xs-10 direccion">
					Zona Industrial San Antonio, Av. 02<br>
					Parcela 4-8, San Diego - Edo. Carabobo<br>
					Planta Tecnovial, Sector Seminario.						
			</div>
			
			<div class="col-lg-2 col-xs-2 direccion">
					<div class="location">
						<img src="<?php echo IMG; ?>temp/cel.png" class="img-responsive"/>
					</div>
					
			</div>
			<div class="col-lg-10 col-xs-10 direccion">
					Telf.: +58 241 451-66-40<br>
					Telefax: +58 241 891-07-36<br>			
			</div>
			
			
			<div class="col-lg-2 col-xs-2 direccion">
					<div class="location">
						<img src="<?php echo IMG; ?>temp/mail.png" class="img-responsive"/>
					</div>
					
			</div>
			<div class="col-lg-10 col-xs-10 direccion">
					<div class="col-lg-3 col-xs-3 row ">
						Email:
					</div>
					<div class="col-lg-10 col-xs-10">
						<div class="botones2 col-md-6">
							<a href="mailto:tecnovial.ventas@gmail.com"> tecnovial.ventas@gmail.com </a>
						</div>
						<a href="mailto:oficina.tecnovial@gmail.com">oficina.tecnovial@gmail.com</a>
						<br>
						<a href="mailto:info.ve@iron-group.com">info.ve@iron-group.com</a>
						<br>
						<a href="mailto:tecnovial@iron-group.com">tecnovial@iron-group.com</a>
					</div>
							
			</div>
				<p>&nbsp;</p>
				<div class="col-lg-3 col-xs-3">
					<a href="http://www.facebook.com/tecnovial?ref=ts&fref=ts" target="_blank">
						<img src="<?php echo IMG; ?>fb.png" class="img-responsive"/>
					</a>
				</div>
				<div class="col-lg-3 col-xs-3">
					<a href="http://plus.google.com/+OficinaTecnovial/posts"  target="_blank">
						<img src="<?php echo IMG; ?>plus.png" class="img-responsive"/>
					</a>
				</div>
				<div class="col-lg-3 col-xs-3">
					<a href="#"  target="_blank">
						<img src="<?php echo IMG; ?>tw.png" class="img-responsive"/>
					</a>
				</div>
			
				
				
				
			
			
		</div>
	</div>
</div>