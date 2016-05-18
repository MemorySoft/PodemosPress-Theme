<?php 
$nombreError = '';
$emailError = '';
$mensajeError = '';

//If the form is submitted
if(isset($_POST['submitted'])) {

	//Check to see if the honeypot captcha field was filled in
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
	
		//Check to make sure that the name field is not empty
		if(trim($_POST['nombre_contacto']) === '') {
			$nombreError = 'Debes poner tu nombre.';
			$tieneError = true;
		} else {
			$nombre = trim($_POST['nombre_contacto']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = 'Has olvidado la dirección de email.';
			$tieneError = true;
		} else if (!preg_match('/^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$/i', trim($_POST['email']))) {
			$emailError = 'Dirección de correo errónea.';
			$tieneError = true;
		} else {
			$email = trim($_POST['email']);
		}
			
		//Check to make sure comments were entered	
		if(trim($_POST['mensaje']) === '') {
			$mensajeError = 'No has puesto ningún mensaje...';
			$tieneError = true;
		} else {
			if(function_exists('stripslashes')) {
				$mensaje = stripslashes(trim($_POST['mensaje']));
			} else {
				$mensaje = trim($_POST['mensaje']);
			}
		}
			
		//If there is no error, send the email
		if(!isset($tieneError)) {

			$emailPara = 'desarrolloweb@memorysoft.net';
			$asunto = 'Mensaje ' . $nombre . 'desde la web de ' . $delegacion_nombre;
			$mandaCopia = trim($_POST['mandaCopia']);
			$cuerpo = "Nombre: $nombre \n\nEmail: $email \n\nTeléfono: $telefono\n\nMensaje: $mensaje";
			$cabeceras = 'De: ' . $delegacion_nombre .' <'. $emailPara .'>' . "\r\n" . 'Contestar a: ' . $email;
			
			mail($emailPara, $asunto, $cuerpo, $cabeceras);

			if($mandaCopia == true) {
				$asunto = 'Has mandado un mensaje a' . $delegacion_nombre;
				$cabeceras = 'De:' . $delegacion_nombre . '<noreply@podemos.info>';
				mail($email, $asunto, $cuerpo, $cabeceras);
			}
			$emailEnviado = true;
		}
	}
} ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/javascript/formulario.js"></script>


<?php if(isset($emailEnviado) && $emailEnviado == true) { ?>

	<div class="thanks texto-centrado">
		<h3>Gracias, <?php echo $nombre ?></h3>
		<p class="texto-centrado">Tu mensaje se ha enviado con éxito.</p>
	</div>

<?php } else { ?>

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		
		<?php if(isset($tieneError) || isset($captchaError)) { ?>
			<p class="error texto-centrado">Ha habido un error al enviar el mensaje.<p>
		<?php } ?>

		<?php 
		  if ($formulario_ver == 1) {
		  ?>
				<div class="row">
				  <h5 class="titulo texto-centrado">Formulario de contacto</h5>
				  <div class="small-12 columns texto-centrado">
				  	<?php
				    if ($ac_descripcion !== '') { ?>
				    	<p><?php echo $formulario_descripcion ?></p>
				   	<?php } 
				  	else { ?>
				    	<p>Este es el formulario de contacto de <?php echo $delegacion_nombre ?>. Envíanos un mensaje para ponerte en contacto con nosotr@s.</p>
				    <?php } ?>
				  </div>
				</div>
				<div class="row">
				  <div class="small-12 medium-8 large-centered column">
				    <form action="<?php the_permalink(); ?>" class="formulario-contacto" method="post">
				      <div class="row">
				        <div class="medium-6 columns">
				          <!-- Seleccion de destinatario -->
				          <!-- <label>Selecciona un destino
				            <select>
				              <option value="Área de Comunicación Autonómica">Área de Comunicación</option>
				              <option value="Secretaría General Autonómica">Secretaría General</option>
				              <option value="Consejo Ciudadano Autonómico">Consejo Ciudadano</option>
				              <option value="Comisión de Garantias Democráticas">Comisión de Garantias</option>
				              <option value="Grupo Parlamentario">Grupo Parlamentario</option>
				            </select>
				          </label>
				          <p class="help-text" id="destinatarioHelpText">Escoge el área o ámbito de Podemos Balears al que deseas enviar tu mensaje.</p> -->
				        </div>
				        <div class="medium-6 columns">
				          <!-- <div class="callout fondo-gris--claro">
				            <h5>Destinatario del mensaje: <br><small>Área de Comunicación Autonómica</small></h5>
				          </div> -->
				        </div>
				        <hr>
				        <!-- Datos y mensaje -->
				        <div class="medium-6 columns">
				          <label for="nombre_contacto">Nombre</label>
									<input 
										type="text" 
										name="nombre_contacto" 
										id="nombre_contacto" 
										value="<?php if(isset($_POST['nombre_contacto'])) echo $_POST['nombre_contacto'];?>" 
										class="requiredField" 
										required
										/>
									<?php if($nombreError != '') { ?>
										<span class="error"><?php echo $nombreError ?></span> 
									<?php } ?>
				        </div>
				        <div class="medium-6 columns">
				          <label for="email">Email</label>
									<input 
										type="text" 
										name="email" 
										id="email" 
										value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" 
										class="requiredField" 
										required
										/>
									<?php if($emailError != '') { ?>
										<span class="error"><?php echo $emailError ?></span>
									<?php } ?>
				        </div>
				        <div class="medium-6 columns">

				        </div>
				        <div class="medium-6 columns">
				          <label for="telefono">Teléfono</label>
									<input 
										type="text" 
										name="telefono" 
										id="telefono" 
										value="<?php if(isset($_POST['telefono']))  echo $_POST['telefono'];?>"  
										/>
				        </div>
				        <div class="medium-12 columns">
				          <label for="mensajeText">Mensaje</label>
									<textarea 
										name="mensaje" 
										id="mensajeText" 
										rows="20" 
										cols="30" 
										class="requiredField"
										required
										>
											<?php if(isset($_POST['mensaje'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['mensaje']); } else { echo $_POST['mensaje']; } } ?>
										</textarea>
									<?php if($mensajeError != '') { ?>
										<span class="error"><?php echo $mensajeError ?></span> 
									<?php } ?>
				        </div>
				        <div class="small-12 columns" style="display: none;">
				        	<label for="checking" class="screenReader">No rellenes este campo, a menos que seas un robot...</label>
				        	<input 
				        		type="text" 
				        		name="checking" 
				        		id="checking" 
				        		class="screenReader" 
				        		value="<?php if(isset($_POST['checking'])) echo $_POST['checking'];?>" 
				        		/>
				        </div>
				        <div class="medium-6 columns">
				        	<fieldset>
					        	<input 
					        		type="checkbox" 
					        		name="mandaCopia" 
					        		id="mandaCopia" 
					        		value="true"
					        		<?php if(isset($_POST['mandaCopia']) && $_POST['mandaCopia'] == true) echo ' checked="checked"'; ?> 
					        		/>
				        	<label for="mandaCopia">Mándame un copia de este mensaje</label>
				        	</fieldset>
				          <fieldset>
				            <input 
				            	type="checkbox" 
				            	name="simpatizante" 
				            	value="Simpatizante" 
				            	id="Simpatizante" 
				            	required 
				            	/>
				            	<label for="Simpatizante">Acepto la <a href="<?php echo $formulario_enlace ?>">política de privacidad</a> de datos</label>
				          </fieldset>
				        </div>
				        <div class="medium-6 columns">
				        	<input type="hidden" name="submitted" id="submitted" value="true" />
				        	<button class="button flota-derecha" type="submit">Enviar</button>
				        </div>
				      </div>
				    </form>
				  </div>
				</div>
			<?php } ?>
	
		<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>
	