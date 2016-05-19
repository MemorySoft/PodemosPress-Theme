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
	    <h5 class="titulo texto-centrado"><?php _e('Organització','podemospress'); ?></h5>
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
    <h4 class="texto-centrado">
    	<?php printf( __('Com s\'organitza %s','podemospress') , $delegacion_nombre ); ?>
    </h4>
  </div>
</div>

<div class="franja fondo-gris--claro">
	<div class="row sin-margen--abajo">
	  <div class="small-12 columns texto-centrado">
	    <h3><?php _e("Assemblea Ciutadana",'podemospress'); ?>
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
	  		<p><?php _e("L'Assemblea Ciutadana la conforma el conjunt de la ciutadanía inscrita a Podem. Es l'espai on es prenen les grans decisions (eleccions primaries, eleccions a carrecs interns, estratègia polìtica, programa…) i on tots els inscrits participen de forma directa i igual amb veu i vot. Els ùnics requisits per a participar son: ser major de divuit anys, comprometres en la construcció de Podem i acceptar el seu Codi Ètic.",'podemospress'); ?></p>
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
	    <h4><?php _e("Secretaria General",'podemospress'); ?></h4>
	    <?php 
		  if ($sg_descripcion !== '') { ?>
	  		<p><?php echo $sg_descripcion ?></p>
	  	<?php } 
	  	else { ?>
	  		<p><?php _e("Es nomena mitjançant elecció directa en primàries obertes a tota la ciutadania inscrita en Podem. Exerceix la representació política i institucional de Podem i assegura la coordinació entre les àrees executives del Consell Ciutadà, òrgan que presideix.",'podemospress'); ?></p>
	    <?php }

	  	if ($sg_enlace_boton !== '' && $sg_texto_boton !== '') { ?> 
	      <a href="<?php echo $sg_enlace_boton ?>" class="small button">
	      	<?php echo $sg_texto_boton ?>
	      </a>
	    <?php } ?>
	  </div>

	  <div class="small-12 medium-4 columns texto-centrado">
	    <h4><?php _e("Consell Ciutadà",'podemospress'); ?></h4>
	    <?php
		  if ($cc_descripcion !== '') { ?>
	    	<p><?php echo $cc_descripcion ?></p>
	    <?php } 
	  	else { ?>
	  		<p><?php _e("És un òrgan executiu col·legiat triat mitjançant primàries obertes a la ciutadania. Desenvolupa les decisions adoptades per l'Assemblea Ciutadana i manté una constant rendició de comptes davant aquesta Assemblea i davant els cercles amb mecanismes de participació directa.",'podemospress'); ?></p>
	    <?php } 

	    if ($cc_enlace_boton !== '' && $cc_texto_boton !== '') { ?> 
	      <a href="<?php echo $cc_enlace_boton ?>" class="small button">
	      	<?php echo $cc_texto_boton ?>
	      </a>
	    <?php } ?>
	  </div>

	  <div class="small-12 medium-4 columns texto-centrado">
	    <h4><?php _e("Comisió de Garanties",'podemospress'); ?></h4>
	    <?php 
		  if ($cg_descripcion !== '') { ?>
	    	<p><?php echo $cg_descripcion ?></p>
	    <?php } 
	  	else { ?>
	  		<p><?php _e("És l'òrgan encarregat de vetllar pel respecte als drets dels inscrits en Podem i pels principis fonamentals i les normes de funcionament de l'organització. Està composta per membres triats de forma directa i independent en primàries obertes.",'podemospress'); ?></p>
	    <?php } 

	    if ($cg_enlace_boton !== '' && $cg_texto_boton !== '') { ?> 
	      <a href="<?php echo $cg_enlace_boton ?>" class="small button">
	      	<?php echo $cg_texto_boton ?>
	      </a>
	    <?php } ?>
	  </div>
	</div>
</div>

<!-- SECRETARÍAS -->

<?php 
if ($secretarias_ver == 1) { ?>
	<div class="row">
	  <div class="small-12 columns">
	    <h5 class="titulo texto-centrado">
	    	<?php printf( __('Secretaries del Consell Ciutadà de %s','podemospress') , $delegacion_nombre ); ?>
	    </h5>
	  </div>
    <?php 
	  $args = array(
	  	'post_type' => 'secretaria',
  	);
  	$area_item = new WP_Query($args);
  	if( $area_item->have_posts() ) { ?>
  		<?php  while ( $area_item->have_posts() ) : $area_item->the_post(); ?>
			  <div class="small-12 medium-4 columns" id="post-<?php the_ID(); ?>">
			    <div class="tarjeta tarjeta-morada">
			      <div class="tarjeta-contenido">
			        <span class="tarjeta-titulo"><?php the_title(); ?></span>
			      </div>
			      <div class="tarjeta-accion">
			        <a href="javascript:void(0)" class="control-abrir control-abrir--derecha"></a>
			      </div>
			      <div id="tarjeta-1" class="tarjeta-reverso">
			        <div class="tarjeta-contenido">
			          <p class="tarjeta-texto"><?php $customLength=40; the_excerpt(); ?></p>
			        </div>
			        <div class="tarjeta-accion">
			          <a class="small button invertido" href="<?php the_permalink(); ?>">+ Info</a>
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
	    <h5 class="titulo texto-centrado">
	    	<?php printf( __('Cercles de %s','podemospress') , $delegacion_nombre ); ?>
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