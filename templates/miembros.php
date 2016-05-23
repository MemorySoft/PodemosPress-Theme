
<?php /* Template Name: Miembros */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/variables.php'); ?>
<?php get_header(); ?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('miembros-arriba') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- SECRETARÍA GENERAL -->

<?php 
if ($sg_ver == 1) { ?>
	<div class="row internos-cargos">
	  <div class="small-12 medium-4 medium-centered columns">
	  	<h5 class="titulo texto-centrado">
	  		<?php _e('Secretaria General de','podemospress'); ?>
	  		<br>
	  		<?php echo $delegacion_nombre; ?>
	    </h5>
	    <br>
	    <?php 
		  $args = array(
		  	'tax_query' => array(
	        array(
	          'taxonomy' => 'interno',
	          'field' => 'slug',
	          'terms' => array( 'secretaria-general' )
	        ),
		    ),
		  	'post_type' => 'miembro',
	  	);
	  	$cc_item = new WP_Query($args);
	  	if( $cc_item->have_posts() ) { ?>
	  		<div class="small-12 columns">
			  	  <?php  while ( $cc_item->have_posts() ) : $cc_item->the_post(); ?>
			  	    <div class="item">
				  	    <div class="articulo stack-for-small" id="post-<?php the_ID(); ?>">
				  	      <div class="articulo-seccion--vertical">
					  	      <a href="javascript:void(0)" data-open="modal-<?php the_ID(); ?>">
					  	        <div class="articulo-imagen circular">
					  	          <?php the_post_thumbnail(); ?>
					  	        </div>
					  	      </a>
				  	      </div>
				  	      <div class="articulo-seccion--vertical">
				  	        <h5 class="articulo-titulo"><?php the_title(); ?></h5>
				  	        
				  	        <!-- MODAL | MIEMBRO SG -->
				  	        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
				  	          <div class="row">
				  	            <div class="small-12 medium-3 columns texto-derecha">
				  	            	<div class="articulo-imagen circular">
				  	            	  <?php the_post_thumbnail(); ?>
				  	            	  <br>
				  	            	  <br>
				  	            	  <?php 
						  	        		  // Datos de la ficha de miembro
						  	        		  $datos_cargo_organico = get_post_meta( get_the_id(), 'miembro_datos_cargo_organico', true );
						  	        			$datos_twitter = get_post_meta( get_the_id(), 'miembro_datos_twitter', true );
						  	        			$datos_facebook = get_post_meta( get_the_id(), 'miembro_datos_facebook', true );
							  	        		$datos_email = get_post_meta( get_the_id(), 'miembro_datos_email', true );
							  	        	?>
				  	            	  <?php if ( $datos_cargo_organico !='' ) { ?>
					  	            	  <p class="texto-mini">
					  	            	  	<?php echo $datos_cargo_organico; ?>
					  	            	  	<br>
					  	            	  	<?php echo $delegacion_nombre; ?>
					  	            	  </p>
				  	            	  <?php } ?>
				  	            	  <div class="articulo-contacto">
									  	        <?php if ( $datos_twitter !='' ) {  ?>
									  	        	<a href="<?php echo $datos_twitter; ?>">Segueix-me al Twitter <i class="fa fa-twitter"></i></a>
									  	        	<br>
									  	        <?php } ?>
									  	        <?php if ( $datos_facebook !='' ) {  ?>
									  	        	<a href="<?php echo $datos_facebook; ?>">Troba'm al Facebook <i class="fa fa-facebook"></i></a>
									  	        	<br>
									  	        <?php } ?>
									  	        <?php if ( $datos_email !='' ) {  ?>
									  	        	<a href="mailto:<?php echo $datos_email; ?>">Envia'm un email <i class="fa fa-envelope"></i></a>
									  	        <?php } ?>
								  	        </div>
				  	            	</div>
				  	            </div>
				  	            <div class="small-12 medium-7 columns">
				  	              <h2><?php the_title(); ?></h2>
				  	              <?php the_content(); ?>

                	        <div class="botonera sin-margen--abajo">
              	  	        <?php if ($sg_enlace_boton_doc_a !== '' && $sg_texto_boton_doc_a !== '') { ?> 
                	            <a href="<?php echo $sg_enlace_boton_doc_a ?>" class="small success button">
                	            	<i class="fa fa-download"></i> 
                	            	<?php echo $sg_texto_boton_doc_a ?>
                	            </a>
                	          <?php } ?>
                	          <?php if ($sg_enlace_boton_doc_b !== '' && $sg_texto_boton_doc_b !== '') { ?> 
                	            <a href="<?php echo $sg_enlace_boton_doc_b ?>" class="small success button">
                	            	<i class="fa fa-download"></i> 
                	            	<?php echo $sg_texto_boton_doc_b ?>
                	            </a>
                	          <?php } ?>
                	          <?php if ($sg_enlace_boton_doc_c !== '' && $sg_texto_boton_doc_c !== '') { ?> 
                	            <a href="<?php echo $sg_enlace_boton_doc_c ?>" class="small success button">
                	            	<i class="fa fa-download"></i> 
                	            	<?php echo $sg_texto_boton_doc_c ?>
                	            </a>
                	          <?php } ?>
                	        </div>
				  	              <p>
				  	                <hr>
				  	                <a href="javascript:void(0)" class="button invertido--oscuro close-button" data-close aria-label="<?php esc_attr__('Tancar','podemospress'); ?>">
				  	                	<?php _e('Tancar','podemospress'); ?>
             								</a>
				  	              </p>
				  	            </div>
				  	          </div>
				  	        </div>

				  	      </div>
				  	    </div>
			  	    </div> 
			  	  <?php endwhile; ?>
			  </div>
	  	<?php } ?>
	  </div>
	</div>
<?php } ?>

<!-- CONSEJO CIUDADANO -->

<?php 
if ($cc_ver == 1) { ?>
	<div id="cc" class="row internos-cargos" data-equalizer data-equalize-on="medium">
	  <div class="small-12 columns">
	    <h5 class="titulo texto-centrado">
	    	<?php printf( __('Consell Ciutadà de %s','podemospress') , $delegacion_nombre ); ?>
	    </h5>
	  </div>
	  <div class="small-12 columns texto-centrado">
	    <p><?php echo $cc_descripcion ?></p>
	    <div class="botonera">
		    <?php 
				if ($cc_enlace_boton_actas !== '' && $cc_texto_boton_actas !== '') { ?>
		      <a href="<?php echo $cc_enlace_boton_actas ?>" class="small success button">
		      	<i class="fa fa-download"></i> 
		      	<?php echo $cc_texto_boton_actas ?>
		      </a>
		    <?php } 
				if ($cc_enlace_boton_reglamento !== '' && $cc_texto_boton_reglamento !== '') { ?>
	      <a href="<?php echo $cc_enlace_boton_reglamento ?>" class="small success button">
	      	<i class="fa fa-download"></i> 
	      	<?php echo $cc_texto_boton_reglamento ?>
	      </a>
				<?php } 
				if ($cc_enlace_boton_organigrama !== '' && $cc_texto_boton_organigrama !== '') { ?>
	      <a href="<?php echo $cc_enlace_boton_organigrama ?>" class="small success button">
	      	<i class="fa fa-download"></i> 
	      	<?php echo $cc_texto_boton_organigrama ?>
	      </a>
	      <?php } ?>
	    </div>
	  </div>

	  <?php 
  	  $args = array(
  	  	'tax_query' => array(
	        array(
            'taxonomy' => 'interno',
            'field' => 'slug',
            'terms' => array( 'consejo-ciudadano' )
	        ),
  	    ),
  	  	'post_type' => 'miembro',
  	  	'posts_per_page' => -1,
  	);
  	$cc_item = new WP_Query($args);
  	if( $cc_item->have_posts() ) { ?>
  		<div class="small-12 columns">
	    	<div class="-carrusel-seis-items">
		  	  <?php  while ( $cc_item->have_posts() ) : $cc_item->the_post(); ?>
		  	    <div class="item">
			  	    <div class="articulo stack-for-small" id="post-<?php the_ID(); ?>">
			  	      <div class="articulo-seccion articulo-seccion--vertical">
				  	      <a href="javascript:void(0)" data-open="modal-<?php the_ID(); ?>">
				  	        <div class="articulo-imagen circular">
				  	          <?php the_post_thumbnail(); ?>
				  	        </div>
				  	      </a>
			  	      </div>
			  	      <div class="articulo-seccion articulo-seccion--vertical">
			  	        <h5 class="articulo-titulo" data-equalizer-watch><?php the_title(); ?></h5>
			  	        
			  	        <!-- MODAL | MIEMBROS CC -->
			  	        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
			  	          <div class="row">
			  	            <div class="small-12 medium-3 columns texto-derecha">
			  	            	<div class="articulo-imagen circular">
			  	            	  <?php the_post_thumbnail(); ?>
			  	            	  <br>
			  	            	  <br>
			  	            	  <?php 
					  	        		  // Datos de la ficha de miembro
					  	        		  $datos_cargo_organico = get_post_meta( get_the_id(), 'miembro_datos_cargo_organico', true );
					  	        			$datos_twitter = get_post_meta( get_the_id(), 'miembro_datos_twitter', true );
					  	        			$datos_facebook = get_post_meta( get_the_id(), 'miembro_datos_facebook', true );
						  	        		$datos_email = get_post_meta( get_the_id(), 'miembro_datos_email', true );
						  	        	?>
			  	            	  <?php if ( $datos_cargo_organico !='' ) { ?>
				  	            	  <p class="texto-mini">
				  	            	  	<?php echo $datos_cargo_organico; ?>
				  	            	  	<br>
				  	            	  	<?php echo $delegacion_nombre; ?>
				  	            	  </p>
			  	            	  <?php } ?>
			  	            	  <div class="articulo-contacto">
								  	        <?php if ( $datos_twitter !='' ) {  ?>
								  	        	<a href="<?php echo $datos_twitter; ?>">Segueix-me al Twitter <i class="fa fa-twitter"></i></a>
								  	        	<br>
								  	        <?php } ?>
								  	        <?php if ( $datos_facebook !='' ) {  ?>
								  	        	<a href="<?php echo $datos_facebook; ?>">Troba'm al Facebook <i class="fa fa-facebook"></i></a>
								  	        	<br>
								  	        <?php } ?>
								  	        <?php if ( $datos_email !='' ) {  ?>
								  	        	<a href="mailto:<?php echo $datos_email; ?>">Envia'm un email <i class="fa fa-envelope"></i></a>
								  	        <?php } ?>
							  	        </div>
			  	            	</div>
			  	            </div>
			  	            <div class="small-12 medium-7 columns">
			  	              <h2><?php the_title(); ?></h2>
			  	              <?php the_content(); ?>
			  	              <p>
			  	                <hr>
			  	                <a href="javascript:void(0)" class="button invertido--oscuro close-button" data-close aria-label="<?php esc_attr__('Tancar','podemospress'); ?>">
			  	                	<?php _e('Tancar','podemospress'); ?>
           								</a>
			  	              </p>
			  	            </div>
			  	          </div>
			  	        </div>

			  	      </div>
			  	    </div>
		  	    </div>  
		  	  <?php endwhile; ?>
		  	</div>
		  </div>
  	<?php } ?>
  </div>
<?php } ?>

<!-- COMISIÓN DE GARANTIAS -->

<?php 
if ($cg_ver == 1) { ?>
	<div id="cgd" class="row internos-cargos" data-equalizer data-equalize-on="medium">
	  <div class="small-12 columns">
	    <h5 class="titulo texto-centrado"> 
	    	<?php printf( __('Comisió de Garanties Democrátiques de %s','podemospress') , $delegacion_nombre ); ?>
	    </h5>
	  </div>
	  <div class="small-12 columns texto-centrado">
	    <p><?php echo $cc_descripcion ?></p>
	    <div class="botonera">
		    <?php 
				if ($cg_enlace_boton_actas !== '' && $cg_texto_boton_actas !== '') { ?>
		      <a href="<?php echo $cg_enlace_boton_actas ?>" class="small success button">
		      	<i class="fa fa-download"></i> 
		      	<?php echo $cg_texto_boton_actas ?>
		      </a>
		    <?php } 

				if ($cg_enlace_boton_reglamento !== '' && $cg_texto_boton_reglamento !== '') { ?>
	      <a href="<?php echo $cg_enlace_boton_reglamento ?>" class="small success button">
	      	<i class="fa fa-download"></i> 
	      	<?php echo $cg_texto_boton_reglamento ?>
	      </a>
				<?php } ?>
	    </div>
	  </div>

	  <?php 
  	  $args = array(
  	  	'tax_query' => array(
	        array(
            'taxonomy' => 'interno',
            'field' => 'slug',
            'terms' => array( 'comision-de-garantias' )
	        ),
  	    ),
  	  	'post_type' => 'miembro',
  	  	'posts_per_page' => -1,
  	);
  	$cg_item = new WP_Query($args);
  	if( $cg_item->have_posts() ) { ?>
  		<div class="small-12 columns">
	    	<div class="-carrusel-seis-items">
		  	  <?php  while ( $cg_item->have_posts() ) : $cg_item->the_post(); ?>
		  	    <div class="item">
			  	    <div class="articulo stack-for-small" id="post-<?php the_ID(); ?>">
			  	      <div class="articulo-seccion articulo-seccion--vertical">
				  	      <a href="javascript:void(0)" data-open="modal-<?php the_ID(); ?>">
				  	        <div class="articulo-imagen circular">
				  	          <?php the_post_thumbnail(); ?>
				  	        </div>
				  	      </a>
			  	      </div>
			  	      <div class="articulo-seccion articulo-seccion--vertical">
			  	        <h5 class="articulo-titulo" data-equalizer-watch><?php the_title(); ?></h5>
			  	        
			  	        <!-- MODAL | MIEMBROS CC -->
			  	        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
			  	          <div class="row">
			  	            <div class="small-12 medium-3 columns texto-derecha">
			  	            	<div class="articulo-imagen circular">
			  	            	  <?php the_post_thumbnail(); ?>
			  	            	  <br>
			  	            	  <br>
			  	            	  <?php 
					  	        		  // Datos de la ficha de miembro
					  	        			$datos_cargo_organico = get_post_meta( get_the_id(), 'miembro_datos_cargo_organico', true );
					  	        			$datos_twitter = get_post_meta( get_the_id(), 'miembro_datos_twitter', true );
					  	        			$datos_facebook = get_post_meta( get_the_id(), 'miembro_datos_facebook', true );
						  	        		$datos_email = get_post_meta( get_the_id(), 'miembro_datos_email', true );
						  	        	?>
			  	            	  <?php if ( $datos_cargo_organico !='' ) { ?>
				  	            	  <p class="texto-mini">
				  	            	  	<?php echo $datos_cargo_organico; ?>
				  	            	  	<br>
				  	            	  	<?php echo $delegacion_nombre; ?>
				  	            	  </p>
			  	            	  <?php } ?>
			  	            	  <div class="articulo-contacto">
								  	        <?php if ( $datos_twitter !='' ) {  ?>
								  	        	<a href="<?php echo $datos_twitter; ?>">Segueix-me al Twitter <i class="fa fa-twitter"></i></a>
								  	        	<br>
								  	        <?php } ?>
								  	        <?php if ( $datos_facebook !='' ) {  ?>
								  	        	<a href="<?php echo $datos_facebook; ?>">Troba'm al Facebook <i class="fa fa-facebook"></i></a>
								  	        	<br>
								  	        <?php } ?>
								  	        <?php if ( $datos_email !='' ) {  ?>
								  	        	<a href="mailto:<?php echo $datos_email; ?>">Envia'm un email <i class="fa fa-envelope"></i></a>
								  	        <?php } ?>
							  	        </div>
			  	            	</div>
			  	            </div>
			  	            <div class="small-12 medium-7 columns">
			  	              <h2><?php the_title(); ?></h2>
			  	              <?php the_content(); ?>
			  	              <p>
			  	                <hr>
			  	                <a href="javascript:void(0)" class="button invertido--oscuro close-button" data-close aria-label="<?php esc_attr__('Tancar','podemospress'); ?>">
			  	                	<?php _e('Tancar','podemospress'); ?>
           								</a>
			  	              </p>
			  	            </div>
			  	          </div>
			  	        </div>

			  	      </div>
			  	    </div>
		  	    </div> 
		  	  <?php endwhile; ?>
		  	</div>
		  </div>
  	<?php } ?>
  </div>
<?php } ?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('miembros-abajo') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- RECORDATORIO -->

<?php 
if ($callout_miembros_ver == 1) { ?>
	<div class="row">
	  <div class="small-12 columns">
	    <div class="large callout fondo-gris--claro">
	      <h4><?php echo $callout_miembros_titulo ?></h4>
				<p><?php echo $callout_miembros_texto ?></p>
				
				<?php 
			  if ($callout_miembros_boton !== '' && $callout_miembros_enlace !== '') { ?>
    			<a href="<?php echo $callout_miembros_enlace ?>" class="button">
    				<?php echo $callout_miembros_boton ?>
    			</a>
				<?php	} ?>

	    </div>
	  </div>
	</div>
<?php } ?>

<?php get_footer(); ?>