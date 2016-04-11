<?php /* Template Name: Contacto */ ?>
<?php include('/includes/opciones/variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO | WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contacto-arriba') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- CONTENIDO | MAPA -->
    
<div class="row" data-equalizer data-equalize-on="medium">
  <div class="small-12 medium-6 columns">
    <div class="large callout fondo-morado" data-equalizer-watch>
      <h2 class="logo-texto sin-margen"><?php echo $delegacion_nombre ?></h2>
      <h5><?php echo $delegacion_direccion ?></h5>
      <div class="media-object">
        <div class="media-object-section">
          <i class="fa fa-clock-o fa-3x"></i>
        </div>
        <div class="media-object-section">
          <p>
            <strong>
              <?php echo $delegacion_horario_am ?><br>
              <?php echo $delegacion_horario_pm ?>
            </strong>
          </p>
        </div>
      </div>
      <div class="media-object">
        <div class="media-object-section">
          <i class="fa fa-phone fa-3x"></i>
        </div>
        <div class="media-object-section">
          <h3 class="sin-margen"><?php echo $delegacion_telefono ?></h3>
        </div>
      </div>
    </div>
  </div>
  <div class="small-12 medium-6 columns">
    <div class="destacado-media flex-video" data-equalizer-watch>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d664382.8355101913!2d2.582227726160659!3d39.32714256124922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1455710205840" width="850" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>

<!-- CONTENIDO | FORMULARIO -->

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
	    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus asperiores consectetur totam labore nam autem mollitia error quos dolores quasi aspernatur, commodi, vitae incidunt vero repellat provident facere tenetur omnis at esse praesentium culpa quibusdam alias eos similique.</p>
	    <?php } ?>
	  </div>
	</div>
	<div class="row">
	  <div class="small-12 medium-8 large-centered column">
	    <form>
	      <div class="row">
	        <div class="medium-6 columns">
	          <!-- Seleccion de destinatario -->
	          <label>Selecciona un destino
	            <select>
	              <option value="Área de Comunicación Autonómica">Área de Comunicación</option>
	              <option value="Secretaría General Autonómica">Secretaría General</option>
	              <option value="Consejo Ciudadano Autonómico">Consejo Ciudadano</option>
	              <option value="Comisión de Garantias Democráticas">Comisión de Garantias</option>
	              <option value="Grupo Parlamentario">Grupo Parlamentario</option>
	            </select>
	          </label>
	          <p class="help-text" id="destinatarioHelpText">Escoge el área o ámbito de Podemos Balears al que deseas enviar tu mensaje.</p>
	        </div>
	        <div class="medium-6 columns">
	          <div class="callout fondo-gris--claro">
	            <h5>Destinatario del mensaje: <br><small>Área de Comunicación Autonómica</small></h5>
	          </div>
	        </div>
	        <hr>
	        <!-- Datos y mensaje -->
	        <div class="medium-6 columns">
	          <label>Nombre
	            <input type="text" placeholder="">
	          </label>
	        </div>
	        <div class="medium-6 columns">
	          <label>Email de contacto
	            <input type="text" placeholder="">
	          </label>
	        </div>
	        <div class="medium-6 columns">
	          <fieldset>
	            <legend>Membresia (opcional)</legend>
	            <input type="radio" name="simpatizante" value="Simpatizante" id="simpatizante" required><label for="simpatizante">Simpatizante</label>
	            <input type="radio" name="inscrita" value="Inscrita" id="inscrita"><label for="inscrita">Inscrita</label>
	            <input type="radio" name="cargo" value="Cargo" id="cargo"><label for="cargo">Cargo</label>
	            <input type="radio" name="otro" value="Otro" id="otro"><label for="otro">Otro</label>
	          </fieldset>
	        </div>
	        <div class="medium-6 columns">
	          <label>Teléfono (opcional)
	            <input type="text" placeholder="">
	          </label>
	        </div>
	        <div class="medium-12 columns">
	          <label>
	            Mensaje
	            <textarea placeholder="" rows="8"></textarea>
	          </label>
	        </div>
	        <div class="medium-6 columns">
	          <fieldset>
	            <input type="radio" name="simpatizante" value="Simpatizante" id="Simpatizante" required><label for="Simpatizante">Acepto la <a href="<?php echo $formulario_enlace ?>">política de privacidad</a> de datos</label>
	          </fieldset>
	        </div>
	        <div class="medium-6 columns"><button class="button flota-derecha" type="submit">Enviar</button></div>
	      </div>
	    </form>
	  </div>
	</div>
<?php } ?>

<!-- CONTENIDO | DIRECTORIO -->

<?php 
  if ($directorio_ver == 1) {
  ?>
	<div class="row">
	  <h5 class="titulo texto-centrado">Directorio</h5>
	  <div class="small-12 columns texto-centrado">
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus asperiores consectetur totam labore nam autem mollitia error quos dolores quasi aspernatur, commodi, vitae incidunt vero repellat provident facere tenetur omnis at esse praesentium culpa quibusdam alias eos similique.</p>
	  </div>
	  <div class="medium-4 columns">
	    <ul class="directorio no-bullet entre-lineas texto-centrado">
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	    </ul>
	  </div>
	  <div class="medium-4 columns">
	    <ul class="directorio no-bullet entre-lineas texto-centrado">
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	    </ul>
	  </div>
	  <div class="medium-4 columns">
	    <ul class="directorio no-bullet entre-lineas texto-centrado">
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	      <li>
	        <h6>Lorem Ipsum Dolor</h6>
	        <p>alg@esunfru.to</p>
	      </li>
	    </ul>
	  </div>
	</div>
<?php } ?>

<!-- CONTENIDO | WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contacto-abajo') ) : ?>

		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>