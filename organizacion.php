<?php /* Template Name: Organizacion */ ?>
<?php include('/includes/opciones/variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO | WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('organizacion-arriba') ) : ?>

		<?php endif; ?>
	</div>
</div>
			
<!-- CONTENIDO | INTRO -->
<?php 
if ($intro_ver == 1) { ?>     
	<div class="row">
	  <div class="small-12 columns">
	    <h5 class="titulo texto-centrado">Organización</h5>
	  </div>
	  <div class="small-12 medium-6 columns">
	    <div class="destacado-media flex-video">
	    	<?php echo $intro_media ?>
	    </div>
	  </div>
	  <div class="small-12 medium-6 columns">
	    <p class="lead"><?php echo $intro_texto ?></p>
	  </div>
	</div>
<?php } ?>

<!-- CONTENIDO | ASAMBLEA CIUDADANA -->

<div class="row sin-margen--abajo">
  <div class="small-12 columns">
    <h4 class="texto-centrado">Como se organiza Podemos
			<?php 
    	if ($region !== '') { ?>
    		en <?php echo $region ?>
    	<?php } ?>
    </h4>
  </div>
</div>

<div class="franja fondo-gris--claro">
	<div class="row sin-margen--abajo">
	  <div class="small-12 columns texto-centrado">
	    <h3>Asamblea Ciudadana
				<?php 
	    	if ($region !== '') { ?>
	    		<br>de <?php echo $region ?>
	    	<?php } ?>
	    </h3>

			<?php
	    if ($ac_descripcion !== '') { ?>
	    	<p><?php echo $ac_descripcion ?></p>
	    <?php } 
	  	else { ?>
	  		<p>La Asamblea Ciudadana la conforma el conjunto de la ciudadanía inscrita en Podemos. Es el espacio donde se toman la grandes decisiones (elecciones primarias, elecciones a cargos internos, estrategia política, programa…) y donde todos los inscritos participan de forma directa e igual con voz y voto. Los únicos requisitos para participar son: ser mayor de dieciocho años, comprometerse en la construcción de Podemos y aceptar su Código Ético.</p>
	    <?php } ?>

	  	<?php 
	  	if ($boton_politico_enlace !== '' && $boton_politico_texto !== '') { ?> 
	      <a href="<?php $boton_politico_enlace ?>" class="small success button">
	      	<i class="fa fa-download"></i> <?php echo $boton_politico_texto ?>
	      </a>

	    <?php } 
	    if ($boton_organizativo_enlace !== '' && $boton_organizativo_texto !== '') { ?> 
	      <a href="<?php $boton_organizativo_enlace ?>" class="small success button">
	      	<i class="fa fa-download"></i> <?php echo $boton_organizativo_texto ?>
	      </a>

		  <?php } 
		  if ($boton_codigo_etico_enlace !== '' && $boton_codigo_etico_texto !== '') { ?>
	      <a href="<?php echo $boton_codigo_etico_enlace ?>" class="small success button">
	      	<i class="fa fa-download"></i> <?php echo $boton_codigo_etico_texto ?>
	      </a>
		  <?php } ?>

		  </p>
	  </div>

	<!-- CONTENIDO | ÓRGANOS -->

	  <div class="small-12 medium-4 columns texto-centrado">
	    <h4>Secretaría General</h4>
	    <?php 
		  if ($sg_descripcion !== '') { ?>
	  		<p><?php echo $sg_descripcion ?></p>
	  	<?php } 
	  	else { ?>
	  		<p>Se nombra mediante elección directa en primarias abiertas a toda la ciudadanía inscrita en Podemos. Ejerce la representación política e institucional de Podemos y asegura la coordinación entre las áreas ejecutivas del Consejo Ciudadano, órgano que preside.</p>
	    <?php }

	  	if ($sg_enlace_boton !== '' && $sg_texto_boton !== '') { ?> 
	      <a href="<?php echo $sg_enlace_boton ?>" class="small button">
	      	<?php echo $sg_texto_boton ?>
	      </a>
	    <?php } ?>
	  </div>

	  <div class="small-12 medium-4 columns texto-centrado">
	    <h4>Consejo Ciudadano</h4>
	    <?php
		  if ($cc_descripcion !== '') { ?>
	    	<p><?php echo $cc_descripcion ?></p>
	    <?php } 
	  	else { ?>
	  		<p>Es un órgano ejecutivo colegiado elegido mediante primarias abiertas a la ciudadanía. Desarrolla las decisiones adoptadas por la Asamblea Ciudadana y mantiene una constante rendición de cuentas ante dicha Asamblea y ante los círculos con mecanismos de participación directa.</p>
	    <?php } 

	    if ($cc_enlace_boton !== '' && $cc_texto_boton !== '') { ?> 
	      <a href="<?php echo $cc_enlace_boton ?>" class="small button">
	      	<?php echo $cc_texto_boton ?>
	      </a>
	    <?php } ?>
	  </div>

	  <div class="small-12 medium-4 columns texto-centrado">
	    <h4>Comisión de Garantías</h4>
	    <?php 
		  if ($cg_descripcion !== '') { ?>
	    	<p><?php echo $cg_descripcion ?></p>
	    <?php } 
	  	else { ?>
	  		<p>Es el órgano encargado de velar por el respeto a los derechos de los inscritos en Podemos y por los principios fundamentales y las normas de funcionamiento de la organización. Está compuesta por miembros elegidos de forma directa e independiente en primarias abiertas.</p>
	    <?php } 

	    if ($cg_enlace_boton !== '' && $cg_texto_boton !== '') { ?> 
	      <a href="<?php echo $cg_enlace_boton ?>" class="small button">
	      	<?php echo $cg_texto_boton ?>
	      </a>
	    <?php } ?>
	  </div>
	</div>
</div>

<!-- CONTENIDO | ÁREAS -->

<?php 
if ($areas_ver == 1) { ?>
	<div class="row">
	  <div class="small-12 columns">
	    <h5 class="titulo texto-centrado">Áreas del Consejo Ciudadano <?php echo $ambito ?></h5>
	  </div>
	  <div class="small-12 medium-4 columns">
	    <div class="tarjeta tarjeta-morada">
	      <div class="tarjeta-contenido">
	        <span class="tarjeta-titulo">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
	      </div>
	      <div class="tarjeta-accion">
	        <a href="javascript:void(0)" class="control-abrir control-abrir--derecha" data-toggle="tarjeta-1"></a>
	      </div>
	      <div id="tarjeta-1" class="tarjeta-reverso" data-toggler data-animate="slide-in-right slide-out-right">
	        <div class="tarjeta-contenido">
	          <p class="tarjeta-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, tempora quas possimus.</p>
	        </div>
	        <div class="tarjeta-accion">
	          <a class="small hollow button" href="#">Objetivos</a>
	          <a class="small hollow button" href="#">Contacto</a>
	          <a href="javascript:void(0)" class="control-cerrar control-cerrar--derecha" data-toggle="tarjeta-1"></a>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="small-12 medium-4 columns">
	    <div class="tarjeta tarjeta-morada">
	      <div class="tarjeta-contenido">
	        <span class="tarjeta-titulo">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
	      </div>
	      <div class="tarjeta-accion">
	        <a href="javascript:void(0)" class="control-abrir control-abrir--derecha" data-toggle="tarjeta-2"></a>
	      </div>
	      <div id="tarjeta-2" class="tarjeta-reverso" data-toggler data-animate="slide-in-right slide-out-right">
	        <div class="tarjeta-contenido">
	          <p class="tarjeta-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, tempora quas possimus.</p>
	        </div>
	        <div class="tarjeta-accion">
	          <a class="small hollow button" href="#">Objetivos</a>
	          <a class="small hollow button" href="#">Contacto</a>
	          <a href="javascript:void(0)" class="control-cerrar control-cerrar--derecha" data-toggle="tarjeta-2"></a>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="small-12 medium-4 columns">
	    <div class="tarjeta tarjeta-morada">
	      <div class="tarjeta-contenido">
	        <span class="tarjeta-titulo">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
	      </div>
	      <div class="tarjeta-accion">
	        <a href="javascript:void(0)" class="control-abrir control-abrir--derecha" data-toggle="tarjeta-3"></a>
	      </div>
	      <div id="tarjeta-3" class="tarjeta-reverso" data-toggler data-animate="slide-in-right slide-out-right">
	        <div class="tarjeta-contenido">
	          <p class="tarjeta-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, tempora quas possimus.</p>
	        </div>
	        <div class="tarjeta-accion">
	          <a class="small hollow button" href="#">Objetivos</a>
	          <a class="small hollow button" href="#">Contacto</a>
	          <a href="javascript:void(0)" class="control-cerrar control-cerrar--derecha" data-toggle="tarjeta-3"></a>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="small-12 medium-4 columns">
	    <div class="tarjeta tarjeta-morada">
	      <div class="tarjeta-contenido">
	        <span class="tarjeta-titulo">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
	      </div>
	      <div class="tarjeta-accion">
	        <a href="javascript:void(0)" class="control-abrir control-abrir--derecha" data-toggle="tarjeta-4"></a>
	      </div>
	      <div id="tarjeta-4" class="tarjeta-reverso" data-toggler data-animate="slide-in-right slide-out-right">
	        <div class="tarjeta-contenido">
	          <p class="tarjeta-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, tempora quas possimus.</p>
	        </div>
	        <div class="tarjeta-accion">
	          <a class="small hollow button" href="#">Objetivos</a>
	          <a class="small hollow button" href="#">Contacto</a>
	          <a href="javascript:void(0)" class="control-cerrar control-cerrar--derecha" data-toggle="tarjeta-4"></a>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="small-12 medium-4 columns">
	    <div class="tarjeta tarjeta-morada">
	      <div class="tarjeta-contenido">
	        <span class="tarjeta-titulo">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
	      </div>
	      <div class="tarjeta-accion">
	        <a href="javascript:void(0)" class="control-abrir control-abrir--derecha" data-toggle="tarjeta-5"></a>
	      </div>
	      <div id="tarjeta-5" class="tarjeta-reverso" data-toggler data-animate="slide-in-right slide-out-right">
	        <div class="tarjeta-contenido">
	          <p class="tarjeta-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, tempora quas possimus.</p>
	        </div>
	        <div class="tarjeta-accion">
	          <a class="small hollow button" href="#">Objetivos</a>
	          <a class="small hollow button" href="#">Contacto</a>
	          <a href="javascript:void(0)" class="control-cerrar control-cerrar--derecha" data-toggle="tarjeta-5"></a>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="small-12 medium-4 columns">
	    <div class="tarjeta tarjeta-morada">
	      <div class="tarjeta-contenido">
	        <span class="tarjeta-titulo">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
	      </div>
	      <div class="tarjeta-accion">
	        <a href="javascript:void(0)" class="control-abrir control-abrir--derecha" data-toggle="tarjeta-6"></a>
	      </div>
	      <div id="tarjeta-6" class="tarjeta-reverso" data-toggler data-animate="slide-in-right slide-out-right">
	        <div class="tarjeta-contenido">
	          <p class="tarjeta-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, tempora quas possimus.</p>
	        </div>
	        <div class="tarjeta-accion">
	          <a class="small hollow button" href="#">Objetivos</a>
	          <a class="small hollow button" href="#">Contacto</a>
	          <a href="javascript:void(0)" class="control-cerrar control-cerrar--derecha" data-toggle="tarjeta-6"></a>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="small-12 medium-4 columns">
	    <div class="tarjeta tarjeta-morada">
	      <div class="tarjeta-contenido">
	        <span class="tarjeta-titulo">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
	      </div>
	      <div class="tarjeta-accion">
	        <a href="javascript:void(0)" class="control-abrir control-abrir--derecha" data-toggle="tarjeta-7"></a>
	      </div>
	      <div id="tarjeta-7" class="tarjeta-reverso" data-toggler data-animate="slide-in-right slide-out-right">
	        <div class="tarjeta-contenido">
	          <p class="tarjeta-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, tempora quas possimus.</p>
	        </div>
	        <div class="tarjeta-accion">
	          <a class="small hollow button" href="#">Objetivos</a>
	          <a class="small hollow button" href="#">Contacto</a>
	          <a href="javascript:void(0)" class="control-cerrar control-cerrar--derecha" data-toggle="tarjeta-7"></a>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="small-12 medium-4 columns end">
	    <div class="tarjeta tarjeta-morada">
	      <div class="tarjeta-contenido">
	        <span class="tarjeta-titulo">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
	      </div>
	      <div class="tarjeta-accion">
	        <a href="javascript:void(0)" class="control-abrir control-abrir--derecha" data-toggle="tarjeta-8"></a>
	      </div>
	      <div id="tarjeta-8" class="tarjeta-reverso" data-toggler data-animate="slide-in-right slide-out-right">
	        <div class="tarjeta-contenido">
	          <p class="tarjeta-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, tempora quas possimus.</p>
	        </div>
	        <div class="tarjeta-accion">
	          <a class="small hollow button" href="#">Objetivos</a>
	          <a class="small hollow button" href="#">Contacto</a>
	          <a href="javascript:void(0)" class="control-cerrar control-cerrar--derecha" data-toggle="tarjeta-8"></a>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
<?php } ?>

<!-- CONTENIDO | WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('organizacion-abajo') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- CONTENIDO | CÍRCULOS -->
<?php 
if ($circulos_ver == 1) { ?> 
	<div class="row">
	  <div class="small-12 columns">
	    <h5 class="titulo texto-centrado">Círculos
				<?php 
	    	if ($region !== '') { ?>
	    		de Podemos en <?php echo $region ?>
	    	<?php } ?>
	    </h5>
	  </div>
	  <div class="small-12 medium-6 columns">
	    <p><?php echo $circulos_texto ?></p>
	    <p>

	    <?php 
			if ($circulos_boton_derecho !== '' && $circulos_enlace_boton_derecho !== '') { ?>
	    	<a href="<?php echo $circulos_enlace_boton_derecho ?>" class="small button">
	      	<?php echo $circulos_boton_derecho ?>
	      </a>
      <?php } 

      if ($circulos_boton_izquierdo !== '' && $circulos_enlace_boton_izquierdo !== '') { ?>
	      <a href="<?php echo $circulos_enlace_boton_izquierdo ?>" class="small button">
	      	<?php echo $circulos_boton_izquierdo ?>
	      </a>
      <?php } ?>

	    </p>
	  </div>
	  <div class="small-12 medium-6 columns">
	    <div class="destacado-media flex-video">
	      <?php echo $circulos_media ?>
	    </div>
	  </div>
	</div>
<?php } ?>

<!-- CONTENIDO | RECORDATORIO -->

<?php 
if ($callout_organizacion_ver == 1) { ?>
	<div class="row">
	  <div class="small-12 columns">
	    <div class="large callout texto-centrado fondo-gris--claro">
	      <h4><?php echo $callout_organizacion_titulo ?></h4>
				<p><?php echo $callout_organizacion_texto ?></p>
				
				<?php 
			  if ($callout_organizacion_boton !== '' && $callout_organizacion_enlace !== '') { ?>
    			<a href="<?php echo $callout_organizacion_enlace ?>" class="button">
    				<?php echo $callout_organizacion_boton ?>
    			</a>
				<?php	} ?>

	    </div>
	  </div>
	</div>
<?php } ?>

<?php get_footer(); ?>