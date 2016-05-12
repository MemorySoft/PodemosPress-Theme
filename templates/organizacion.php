<?php /* Template Name: Organizacion */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/variables.php'); ?>
<?php get_header(); ?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('organizacion-arriba') ) : ?>

		<?php endif; ?>
	</div>
</div>
			
<!-- INTRO -->
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

<!-- ASAMBLEA CIUDADANA -->

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
		  <br>
	  </div>

	<!-- ÓRGANOS -->

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

<!-- ÁREAS -->

<?php 
if ($areas_ver == 1) { ?>
	<div class="row">
	  <div class="small-12 columns">
	    <h5 class="titulo texto-centrado">Áreas del Consejo Ciudadano <?php echo $ambito ?></h5>
	  </div>
    <?php 
	  $args = array(
	  	'post_type' => 'area',
  	);
  	$area_item = new WP_Query($args);
  	if( $area_item->have_posts() ) { ?>
  		<?php  while ( $area_item->have_posts() ) : $area_item->the_post(); ?>
			  <div class="small-12 medium-4 columns" id="post-<?php the_ID(); ?>">
			  	<?php 
						$enlace_contacto = get_post_meta( get_the_id(), 'area_contacto_visibilidad', true );
			  	?>
			    <div class="tarjeta tarjeta-morada">
			      <div class="tarjeta-contenido">
			        <span class="tarjeta-titulo"><?php the_title(); ?></span>
			      </div>
			      <div class="tarjeta-accion">
			        <a href="javascript:void(0)" class="control-abrir control-abrir--derecha"></a>
			      </div>
			      <div id="tarjeta-1" class="tarjeta-reverso">
			        <div class="tarjeta-contenido">
			          <p class="tarjeta-texto"><?php $customLength=50; the_excerpt(); ?></p>
			        </div>
			        <div class="tarjeta-accion">
			          <a class="small button invertido" href="<?php the_permalink(); ?>">+ Info</a>
			          <?php if ( $enlace_contacto !='' ) { ?>
			          	<a class="small button plano" href="<?php bloginfo('url'); ?>/contacto">Contacto</a>
			          <?php } ?>
			          <a href="javascript:void(0)" class="control-cerrar control-cerrar--derecha"></a>
			        </div>
			      </div>
			    </div>
			  </div>
		  <?php endwhile; ?>
	  <?php } ?>
	</div>
<?php } ?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('organizacion-abajo') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- CÍRCULOS -->
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

<!-- RECORDATORIO -->

<?php 
if ($callout_organizacion_ver == 1) { ?>
	<div class="row">
	  <div class="small-12 columns">
	    <div class="large callout fondo-gris--claro">
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