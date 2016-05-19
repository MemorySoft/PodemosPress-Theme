<?php /* Template Name: Instituciones */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/variables.php'); ?>
<?php get_header(); ?>
<?php
  // Generamos los enlaces a la categoria
  $instituciones_id = get_cat_ID( 'instituciones' );
  $instituciones_link = get_category_link( $instituciones_id );
?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('instituciones-arriba') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- NOTICIAS INSTITUCIONALES-->

<?php 
  if ($carrusel_instituciones_ver == 1) {
  ?>    
	<div class="row instituciones-noticias">
	  <div class="small-12 columns">
	  	<h5 class="titulo texto-centrado"><?php _e("Actualitat",'podemospress'); ?> 
				<?php 
	    	if ($institucion !== '') { ?>- <?php echo $institucion ?>
	    	<?php } ?>
	    </h5>
	  </div>
	  <div class="large-12 columns">
	    <div class="carrusel -carrusel-tres-items sin-margen--abajo">
        <?php 
          $args = array(
          'post_type' => 'post',
          'category_name' => 'instituciones',
          'posts_per_page'=> 9,
        );
        $instituciones_item = new WP_Query($args);
        if( $instituciones_item->have_posts() ) { ?>
          <?php  while ( $instituciones_item->have_posts() ) : $instituciones_item->the_post(); ?>

            <div class="item">
              <div class="articulo stack-for-small">
                <div class="articulo-seccion articulo-seccion--vertical">
                  <div class="articulo-imagen">
                    <a class="<?php the_permalink(); ?>" title="<?php _e("Llegir",'podemospress'); ?> <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                  </div>
                </div>
                <div class="articulo-seccion articulo-seccion--vertical">
                  <a class="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><h4 class="articulo-titulo"><?php the_title(); ?></h4></a>
                  <p class="articulo-extracto"><?php the_excerpt(); ?></p>
                </div>
              </div>
            </div>

          <?php endwhile; ?>
        <?php } ?>
      </div>
      <p class="texto-centrado">
        <a href="<?php echo esc_url( $instituciones_link ); ?>" title="<?php _e("anar a la pàgina de les publicacions de la categoria Institucions",'podemospress'); ?>"><?php _e("veure els articles a Institucions",'podemospress'); ?></a>
      </p>
	  </div>
	</div>
<?php } ?>

<!-- ACTIVIDAD INSTITUCIONAL -->

<?php 
  if ($actividad_ver == 1) {
  ?>
	<div class="row instituciones-actividad">
	  <div class="small-12 columns">
	    <h5 class="titulo texto-centrado"><?php _e("Activitat dels càrrecs",'podemospress'); ?> 
			<?php 
    	if ($institucion !== '') { ?>
    		<?php _e("al",'podemospress'); ?> <?php echo $institucion ?>
    	<?php } ?>
    </h5>
	  </div>
	  <div class="medium-2 columns">
	    <ul class="tabs vertical" id="example-vert-tabs" data-tabs>
	      <li class="tabs-title is-active"><a href="#presidencia" aria-selected="true"><?php _e("Presidencia",'podemospress'); ?></a></li>
	      <!-- TODO: acabar i18n -->
	      <li class="tabs-title"><a href="#hacienda">Hacienda</a></li>
	      <li class="tabs-title"><a href="#empleo">Empleo</a></li>
	      <li class="tabs-title"><a href="#educacion">Educación</a></li>
	      <li class="tabs-title"><a href="#sanidad">Sanidad</a></li>
	      <li class="tabs-title"><a href="#infraestructuras">Infraestructuras</a></li>
	      <li class="tabs-title"><a href="#desarrollo-rural">Desarrollo rural</a></li>
	      <li class="tabs-title"><a href="#Peticiones">peticiones</a></li>
	      <li class="tabs-title"><a href="#Reglamento">reglamento</a></li>
	      <li class="tabs-title"><a href="#Ente público">Ente público</a></li>
	      <li class="tabs-title"><a href="#organizacion">Organización</a></li>
	    </ul>
	    </div>
	    <div class="medium-10 columns">
	    <div class="tabs-content vertical" data-tabs-content="example-vert-tabs">
	      <div class="tabs-panel is-active" id="presidencia">
	        <h6>Presidencia y participació ciutadana</h6>
	        <table class="scroll stack">
	          <thead>
	            <tr>
	              <th width="200">Table Header</th>
	              <th>Table Header</th>
	              <th width="150">Table Header</th>
	              <th width="150">Table Header</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	          </tbody>
	        </table>  
	      </div>
	      <div class="tabs-panel" id="hacienda">
	        <h6>Hacienda y sector público</h6>
	        <table class="scroll stack">
	          <thead>
	            <tr>
	              <th width="200">Table Header</th>
	              <th>Table Header</th>
	              <th width="150">Table Header</th>
	              <th width="150">Table Header</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	          </tbody>
	        </table>  
	      </div>
	      <div class="tabs-panel" id="empleo">
	        <h6>Empleo, industria y turismo</h6>
	        <table class="scroll stack">
	          <thead>
	            <tr>
	              <th width="200">Table Header</th>
	              <th>Table Header</th>
	              <th width="150">Table Header</th>
	              <th width="150">Table Header</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	          </tbody>
	        </table> 
	      </div>
	      <div class="tabs-panel" id="educacion">
	        <h6>Educación y cultura</h6>
	        <table class="scroll stack">
	          <thead>
	            <tr>
	              <th width="200">Table Header</th>
	              <th>Table Header</th>
	              <th width="150">Table Header</th>
	              <th width="150">Table Header</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	          </tbody>
	        </table> 
	      </div>
	      <div class="tabs-panel" id="sanidad">
	        <h6>Sanidad</h6>
	        <table class="scroll stack">
	          <thead>
	            <tr>
	              <th width="200">Table Header</th>
	              <th>Table Header</th>
	              <th width="150">Table Header</th>
	              <th width="150">Table Header</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	          </tbody>
	        </table> 
	      </div>
	    </div>
	  </div>
	</div>
<?php } ?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('instituciones-enmedio') ) : ?>

		<?php endif; ?>
	</div>
</div>

<section class="row instituciones-cargos-contenedor">

	<!-- CARGOS AYUNTAMIENTOS -->

	<?php 
	  if ($ayuntamiento_ver == 1) {
	  ?>
		<div class="row sin-margen--abajo instituciones-cargos" data-equalizer data-equalize-on="medium">
		  <div class="small-12 columns">
		    <h5 class="titulo texto-centrado">
		    	<?php _e('Relació de càrrecs electes a l\'Ajuntament','podemospress'); ?> 
		    </h5>
		  </div>
		  
	  	<?php 
	  	  $args = array(
	  	  	'tax_query' => array(
		        array(
	            'taxonomy' => 'institucion',
	            'field' => 'slug',
	            'terms' => array( 'ayuntamiento' )
		        ),
	  	    ),
	  	  	'post_type' => 'miembro',
	  	);
	  	$ayuntamiento_item = new WP_Query($args);
	  	if( $ayuntamiento_item->have_posts() ) { ?>
	  	  <?php  while ( $ayuntamiento_item->have_posts() ) : $ayuntamiento_item->the_post(); ?>
	  	    <div class="item small-12 medium-2 columns">
		  	    <div class="articulo stack-for-small" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
			  	      <a href="javascript:void(0)" data-open="modal-<?php the_ID(); ?>">
			  	        <div class="articulo-imagen circular">
			  	          <?php the_post_thumbnail(); ?>
			  	        </div>
			  	      </a>
		  	      </div>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <h5 class="articulo-titulo" data-equalizer-watch><?php the_title(); ?></h5>
		  	        <?php
		  	        	$datos_cargo_institucional = get_post_meta( get_the_id(), 'miembro_datos_cargo_institucional', true );
									$datos_cargo_organico = get_post_meta( get_the_id(), 'miembro_datos_cargo_organico', true );
									$datos_twitter = get_post_meta( get_the_id(), 'miembro_datos_twitter', true );
									$datos_facebook = get_post_meta( get_the_id(), 'miembro_datos_facebook', true );
									$datos_email = get_post_meta( get_the_id(), 'miembro_datos_email', true );
		  	        ?>
		  	        <div class="articulo-contacto">
		  	        <?php if ( $datos_twitter !='' ) { ?>
		  	        	<a href="<?php echo $datos_twitter; ?>"><i class="fa fa-twitter"></i></a>
		  	        <?php } ?>
		  	        <?php if ( $datos_facebook !='' ) { ?>
		  	        	<a href="<?php echo $datos_facebook; ?>"><i class="fa fa-facebook"></i></a>
		  	        <?php } ?>
		  	        <?php if ( $datos_email !='' ) { ?>
		  	        	<a href="mailto:<?php echo $datos_email; ?>"><i class="fa fa-envelope"></i></a>
		  	        <?php } ?>
		  	        </div>
		  	        <!-- MODAL | MIEMBRO -->
		  	        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
		  	          <div class="row">
		  	            <div class="small-12 medium-3 columns texto-derecha">
		  	            	<div class="articulo-imagen circular">
		  	            	  <?php the_post_thumbnail(); ?>
		  	            	  <br>
		  	            	  <br>
		  	            	  <?php if ( 	$datos_cargo_institucional !='' ) { ?>
			  	            	  <p class="lead">
			  	            	  	<?php printf( __('%1$s a l\'Ajuntament de %2$s','podemospress') , $datos_cargo_institucional , $region ); ?>
			  	            	  </p>
			  	            	<?php } ?>
			  	            	<?php if ( 	$datos_cargo_organico !='' ) { ?>
			  	            	  <p>
			  	            	  	<?php printf( __('%1$s a %2$s','podemospress') , $datos_cargo_organico , $delegacion_nombre ); ?>
			  	            	  </p>
		  	            	  <?php } ?>
		  	            	</div>
		  	            </div>
		  	            <div class="small-12 medium-7 columns">
		  	              <h2><?php the_title(); ?></h2>
		  	              <?php the_content(); ?>
		  	              <p>
		  	                <hr>
		  	                <a href="javascript:void(0)" class="button invertido--oscuro close-button" data-close aria-label="<?php esc_attr__('Tancar','podemospress'); ?>"><?php _e("Tancar",'podemospress'); ?></a>
		  	              </p>
		  	            </div>
		  	          </div>
		  	        </div>
		  	      </div>
		  	    </div>
	  	    </div> 
	  	  <?php endwhile; ?>
	  	<?php } ?>
		</div>
	<?php } ?>

	<!-- CARGOS CONSELL INSULAR -->

	<?php 
	  if ($consell_ver == 1) {
	  ?>
		<div class="row sin-margen--abajo instituciones-cargos" data-equalizer data-equalize-on="medium">
		  <div class="small-12 columns">
		    <h5 class="titulo texto-centrado">
		    	<?php _e("Relació de càrrecs electes al Consell Insular",'podemospress'); ?>
		    </h5>
		  </div>
		  
	  	<?php 
	  	  $args = array(
	  	  	'tax_query' => array(
		        array(
	            'taxonomy' => 'institucion',
	            'field' => 'slug',
	            'terms' => array( 'consell-insular' )
		        ),
	  	    ),
	  	  	'post_type' => 'miembro',
	  	);
	  	$consell_item = new WP_Query($args);
	  	if( $consell_item->have_posts() ) { ?>
	  	  <?php  while ( $consell_item->have_posts() ) : $consell_item->the_post(); ?>
	  	  	<div class="item small-12 medium-2 columns">
		  	    <div class="articulo stack-for-small" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <a href="javascript:void(0)" data-open="modal-<?php the_ID(); ?>">
			  	        <div class="articulo-imagen circular">
			  	          <?php the_post_thumbnail(); ?>
			  	        </div>
			  	      </a>
		  	      </div>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <h5 class="articulo-titulo" data-equalizer-watch><?php the_title(); ?></h5>
		  	        <?php
		  	        	$datos_cargo_institucional = get_post_meta( get_the_id(), 'miembro_datos_cargo_institucional', true );
									$datos_cargo_organico = get_post_meta( get_the_id(), 'miembro_datos_cargo_organico', true );
									$datos_twitter = get_post_meta( get_the_id(), 'miembro_datos_twitter', true );
									$datos_facebook = get_post_meta( get_the_id(), 'miembro_datos_facebook', true );
									$datos_email = get_post_meta( get_the_id(), 'miembro_datos_email', true );
		  	        	if ( 	$datos_cargo_institucional !='' && $datos_cargo_organico !='' && $datos_twitter !='' && $datos_facebook !='' && $datos_email !='' ) { 
		  	        ?>
		  	        <div class="articulo-contacto">
		  	        	<a href="<?php echo $datos_twitter; ?>"><i class="fa fa-twitter"></i></a>
		  	        	<a href="<?php echo $datos_facebook; ?>"><i class="fa fa-facebook"></i></a>
		  	        	<a href="mailto:<?php echo $datos_email; ?>"><i class="fa fa-envelope"></i></a>
		  	        </div>
		  	        <!-- MODAL | MIEMBRO -->
		  	        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
		  	          <div class="row">
		  	            <div class="small-12 medium-3 columns texto-derecha">
		  	            	<div class="articulo-imagen circular">
		  	            	  <?php the_post_thumbnail(); ?>
		  	            	  <br>
		  	            	  <br>
		  	            	  <?php if ( 	$datos_cargo_institucional !='' ) { ?>
			  	            	  <p class="lead">
			  	            	  	<?php printf( __('%1$s al Consell Insular de %2$s','podemospress') , $datos_cargo_institucional , $region ); ?>
			  	            	  </p>
			  	            	<?php } ?>
			  	            	<?php if ( 	$datos_cargo_organico !='' ) { ?>
			  	            	  <p>
			  	            	  	<?php printf( __('%1$s a %2$s','podemospress') , $datos_cargo_organico , $delegacion_nombre ); ?>
			  	            	  </p>
		  	            	  <?php } ?>
		  	            	</div>
		  	            </div>
		  	            <div class="small-12 medium-7 columns">
		  	              <h2><?php the_title(); ?></h2>
		  	              <?php the_content(); ?>
		  	              <p>
		  	                <hr>
		  	                <a href="javascript:void(0)" class="button invertido--oscuro close-button" data-close aria-label="<?php esc_attr__('Tancar','podemospress'); ?>"><?php _e("Tancar",'podemospress'); ?></a>
		  	              </p>
		  	            </div>
		  	          </div>
		  	        </div>
		  	        <?php } ?>
		  	      </div>
		  	    </div>
	  	    </div> 
	  	  <?php endwhile; ?>
	  	<?php } ?>
		</div>
	<?php } ?>

	<!-- CARGOS CABILDO -->

	<?php 
	  if ($cabildo_ver == 1) {
	  ?>
		<div class="row sin-margen--abajo instituciones-cargos" data-equalizer data-equalize-on="medium">
		  <div class="small-12 columns">
		    <h5 class="titulo texto-centrado">
		    	<?php _e("Relació de càrrecs electes al Cabildo",'podemospress'); ?>
		    </h5>
		  </div>
		  
	  	<?php 
	  	  $args = array(
	  	  	'tax_query' => array(
		        array(
	            'taxonomy' => 'institucion',
	            'field' => 'slug',
	            'terms' => array( 'cabildo' )
		        ),
	  	    ),
	  	  	'post_type' => 'miembro',
	  	);
	  	$cabildo_item = new WP_Query($args);
	  	if( $cabildo_item->have_posts() ) { ?>
	  	  <?php  while ( $cabildo_item->have_posts() ) : $cabildo_item->the_post(); ?>
	  	    <div class="item small-12 medium-2 columns">
		  	    <div class="articulo stack-for-small" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <a href="javascript:void(0)" data-open="modal-<?php the_ID(); ?>">
			  	        <div class="articulo-imagen circular">
			  	          <?php the_post_thumbnail(); ?>
			  	        </div>
			  	      </a>
		  	      </div>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <h5 class="articulo-titulo" data-equalizer-watch><?php the_title(); ?></h5>
		  	        <?php
		  	        	$datos_cargo_institucional = get_post_meta( get_the_id(), 'miembro_datos_cargo_institucional', true );
									$datos_cargo_organico = get_post_meta( get_the_id(), 'miembro_datos_cargo_organico', true );
									$datos_twitter = get_post_meta( get_the_id(), 'miembro_datos_twitter', true );
									$datos_facebook = get_post_meta( get_the_id(), 'miembro_datos_facebook', true );
									$datos_email = get_post_meta( get_the_id(), 'miembro_datos_email', true );
		  	        	if ( 	$datos_cargo_institucional !='' && $datos_cargo_organico !='' && $datos_twitter !='' && $datos_facebook !='' && $datos_email !='' ) { 
		  	        ?>
		  	        <div class="articulo-contacto">
		  	        	<a href="<?php echo $datos_twitter; ?>"><i class="fa fa-twitter"></i></a>
		  	        	<a href="<?php echo $datos_facebook; ?>"><i class="fa fa-facebook"></i></a>
		  	        	<a href="mailto:<?php echo $datos_email; ?>"><i class="fa fa-envelope"></i></a>
		  	        </div>
		  	        <!-- MODAL | MIEMBRO -->
		  	        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
		  	          <div class="row">
		  	            <div class="small-12 medium-3 columns texto-derecha">
		  	            	<div class="articulo-imagen circular">
		  	            	  <?php the_post_thumbnail(); ?>
		  	            	  <br>
		  	            	  <br>
		  	            	  <?php if ( 	$datos_cargo_institucional !='' ) { ?>
			  	            	  <p class="lead">
			  	            	  	<?php printf( __('%1$s al Cabildo de %2$s','podemospress') , $datos_cargo_institucional , $region ); ?>
			  	            	  </p>
			  	            	<?php } ?>
			  	            	<?php if ( 	$datos_cargo_organico !='' ) { ?>
			  	            	  <p>
			  	            	  	<?php printf( __('%1$s a %2$s','podemospress') , $datos_cargo_organico , $delegacion_nombre ); ?>
			  	            	  </p>
		  	            	  <?php } ?>
		  	            	</div>
		  	            </div>
		  	            <div class="small-12 medium-7 columns">
		  	              <h2><?php the_title(); ?></h2>
		  	              <?php the_content(); ?>
		  	              <p>
		  	                <hr>
		  	                <a href="javascript:void(0)" class="button invertido--oscuro close-button" data-close aria-label="<?php esc_attr__('Tancar','podemospress'); ?>"><?php _e("Tancar",'podemospress'); ?></a>
		  	              </p>
		  	            </div>
		  	          </div>
		  	        </div>
		  	        <?php } ?>
		  	      </div>
		  	    </div>
	  	    </div>  
	  	  <?php endwhile; ?>
	  	<?php } ?>
		</div>
	<?php } ?>

	<!-- CARGOS GOBIERNO AUTONÓMICO -->

	<?php 
	  if ($gobierno_autonomico_ver == 1) {
	  ?>
		<div class="row sin-margen--abajo instituciones-cargos" data-equalizer data-equalize-on="medium">
		  <div class="small-12 columns">
		    <h5 class="titulo texto-centrado">
		    	<?php _e("Relació de càrrecs electes al Govern Autonòmic",'podemospress'); ?>
		    </h5>
		  </div>
		  
	  	<?php 
	  	  $args = array(
	  	  	'tax_query' => array(
		        array(
	            'taxonomy' => 'institucion',
	            'field' => 'slug',
	            'terms' => array( 'gobierno-autonomico' )
		        ),
	  	    ),
	  	  	'post_type' => 'miembro',
	  	);
	  	$gobierno_autonomico_item = new WP_Query($args);
	  	if( $gobierno_autonomico_item->have_posts() ) { ?>
	  	  <?php  while ( $gobierno_autonomico_item->have_posts() ) : $gobierno_autonomico_item->the_post(); ?>
	  	    <div class="item small-12 medium-2 columns">
		  	    <div class="articulo stack-for-small" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <a href="javascript:void(0)" data-open="modal-<?php the_ID(); ?>">
			  	        <div class="articulo-imagen circular">
			  	          <?php the_post_thumbnail(); ?>
			  	        </div>
			  	      </a>
		  	      </div>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <h5 class="articulo-titulo" data-equalizer-watch><?php the_title(); ?></h5>
		  	        <?php
		  	        	$datos_cargo_institucional = get_post_meta( get_the_id(), 'miembro_datos_cargo_institucional', true );
									$datos_cargo_organico = get_post_meta( get_the_id(), 'miembro_datos_cargo_organico', true );
									$datos_twitter = get_post_meta( get_the_id(), 'miembro_datos_twitter', true );
									$datos_facebook = get_post_meta( get_the_id(), 'miembro_datos_facebook', true );
									$datos_email = get_post_meta( get_the_id(), 'miembro_datos_email', true );
		  	        	if ( 	$datos_cargo_institucional !='' && $datos_cargo_organico !='' && $datos_twitter !='' && $datos_facebook !='' && $datos_email !='' ) { 
		  	        ?>
		  	        <div class="articulo-contacto">
		  	        	<a href="<?php echo $datos_twitter; ?>"><i class="fa fa-twitter"></i></a>
		  	        	<a href="<?php echo $datos_facebook; ?>"><i class="fa fa-facebook"></i></a>
		  	        	<a href="mailto:<?php echo $datos_email; ?>"><i class="fa fa-envelope"></i></a>
		  	        </div>
		  	        <!-- MODAL | MIEMBRO -->
		  	        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
		  	          <div class="row">
		  	            <div class="small-12 medium-3 columns texto-derecha">
		  	            	<div class="articulo-imagen circular">
		  	            	  <?php the_post_thumbnail(); ?>
		  	            	  <br>
		  	            	  <br>
		  	            	  <?php if ( 	$datos_cargo_institucional !='' ) { ?>
			  	            	  <p class="lead">
			  	            	  	<?php printf( __('%1$s al Govern Autonòmic de %2$s','podemospress') , $datos_cargo_institucional , $region ); ?>
			  	            	  </p>
			  	            	<?php } ?>
			  	            	<?php if ( 	$datos_cargo_organico !='' ) { ?>
			  	            	  <p>
			  	            	  	<?php printf( __('%1$s a %2$s','podemospress') , $datos_cargo_organico , $delegacion_nombre ); ?>
			  	            	  </p>
		  	            	  <?php } ?>
		  	            	</div>
		  	            </div>
		  	            <div class="small-12 medium-7 columns">
		  	              <h2><?php the_title(); ?></h2>
		  	              <?php the_content(); ?>
		  	              <p>
		  	                <hr>
		  	                <a href="javascript:void(0)" class="button invertido--oscuro close-button" data-close aria-label="<?php esc_attr__('Tancar','podemospress'); ?>"><?php _e("Tancar",'podemospress'); ?></a>
		  	              </p>
		  	            </div>
		  	          </div>
		  	        </div>
		  	        <?php } ?>
		  	      </div>
		  	    </div>
	  	    </div> 
	  	  <?php endwhile; ?>
	  	<?php } ?>
		</div>
	<?php } ?>

	<!-- CARGOS PARLAMENTO AUTONÓMICO -->

	<?php 
	  if ($parlamento_autonomico_ver == 1) {
	  ?>
		<div class="row sin-margen--abajo instituciones-cargos" data-equalizer data-equalize-on="medium">
		  <div class="small-12 columns">
		    <h5 class="titulo texto-centrado">
		    	<?php _e("Relació de càrrecs electes al Parlament Autonòmic",'podemospress'); ?>
		    </h5>
		  </div>
		  
	  	<?php 
	  	  $args = array(
	  	  	'tax_query' => array(
		        array(
	            'taxonomy' => 'institucion',
	            'field' => 'slug',
	            'terms' => array( 'parlamento-autonomico' )
		        ),
	  	    ),
	  	  	'post_type' => 'miembro',
	  	);
	  	$parlamento_autonomico_item = new WP_Query($args);
	  	if( $parlamento_autonomico_item->have_posts() ) { ?>
	  	  <?php  while ( $parlamento_autonomico_item->have_posts() ) : $parlamento_autonomico_item->the_post(); ?>
	  	    <div class="item small-12 medium-2 columns">
		  	    <div class="articulo stack-for-small" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <a href="javascript:void(0)" data-open="modal-<?php the_ID(); ?>">
			  	        <div class="articulo-imagen circular">
			  	          <?php the_post_thumbnail(); ?>
			  	        </div>
			  	      </a>
		  	      </div>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <h5 class="articulo-titulo" data-equalizer-watch><?php the_title(); ?></h5>
		  	        <?php
		  	        	$datos_cargo_institucional = get_post_meta( get_the_id(), 'miembro_datos_cargo_institucional', true );
									$datos_cargo_organico = get_post_meta( get_the_id(), 'miembro_datos_cargo_organico', true );
									$datos_twitter = get_post_meta( get_the_id(), 'miembro_datos_twitter', true );
									$datos_facebook = get_post_meta( get_the_id(), 'miembro_datos_facebook', true );
									$datos_email = get_post_meta( get_the_id(), 'miembro_datos_email', true );
		  	        	if ( 	$datos_cargo_institucional !='' && $datos_cargo_organico !='' && $datos_twitter !='' && $datos_facebook !='' && $datos_email !='' ) { 
		  	        ?>
		  	        <div class="articulo-contacto">
		  	        	<a href="<?php echo $datos_twitter; ?>"><i class="fa fa-twitter"></i></a>
		  	        	<a href="<?php echo $datos_facebook; ?>"><i class="fa fa-facebook"></i></a>
		  	        	<a href="mailto:<?php echo $datos_email; ?>"><i class="fa fa-envelope"></i></a>
		  	        </div>
		  	        <!-- MODAL | MIEMBRO -->
		  	        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
		  	          <div class="row">
		  	            <div class="small-12 medium-3 columns texto-derecha">
		  	            	<div class="articulo-imagen circular">
		  	            	  <?php the_post_thumbnail(); ?>
		  	            	  <br>
		  	            	  <br>
		  	            	  <?php if ( 	$datos_cargo_institucional !='' ) { ?>
			  	            	  <p class="lead">
			  	            	  	<?php printf( __('%1$s al Parlament Autonòmic de %2$s','podemospress') , $datos_cargo_institucional , $region ); ?>
			  	            	  </p>
			  	            	<?php } ?>
			  	            	<?php if ( 	$datos_cargo_organico !='' ) { ?>
			  	            	  <p>
			  	            	  	<?php printf( __('%1$s a %2$s','podemospress') , $datos_cargo_organico , $delegacion_nombre ); ?>
			  	            	  </p>
		  	            	  <?php } ?>
		  	            	</div>
		  	            </div>
		  	            <div class="small-12 medium-7 columns">
		  	              <h2><?php the_title(); ?></h2>
		  	              <?php the_content(); ?>
		  	              <p>
		  	                <hr>
		  	                <a href="javascript:void(0)" class="button invertido--oscuro close-button" data-close aria-label="<?php esc_attr__('Tancar','podemospress'); ?>"><?php _e("Tancar",'podemospress'); ?></a>
		  	              </p>
		  	            </div>
		  	          </div>
		  	        </div>
		  	        <?php } ?>
		  	      </div>
		  	    </div>
	  	    </div>  
	  	  <?php endwhile; ?>
	  	<?php } ?>
		</div>
	<?php } ?>

	<!-- CARGOS SENADO -->

	<?php 
	  if ($senado_ver == 1) {
	  ?>
		<div class="row sin-margen--abajo instituciones-cargos" data-equalizer data-equalize-on="medium">
		  <div class="small-12 columns">
		    <h5 class="titulo texto-centrado">
		    	<?php _e("Relació de càrrecs electes al Senat",'podemospress'); ?>
		    </h5>
		  </div>
		  
	  	<?php 
	  	  $args = array(
	  	  	'tax_query' => array(
		        array(
	            'taxonomy' => 'institucion',
	            'field' => 'slug',
	            'terms' => array( 'senado' )
		        ),
	  	    ),
	  	  	'post_type' => 'miembro',
	  	);
	  	$senado_item = new WP_Query($args);
	  	if( $senado_item->have_posts() ) { ?>
	  	  <?php  while ( $senado_item->have_posts() ) : $senado_item->the_post(); ?>
	  	    <div class="item small-12 medium-2 columns">
		  	    <div class="articulo stack-for-small" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <a href="javascript:void(0)" data-open="modal-<?php the_ID(); ?>">
			  	        <div class="articulo-imagen circular">
			  	          <?php the_post_thumbnail(); ?>
			  	        </div>
			  	      </a>
		  	      </div>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <h5 class="articulo-titulo" data-equalizer-watch><?php the_title(); ?></h5>
		  	        <?php
		  	        	$datos_cargo_institucional = get_post_meta( get_the_id(), 'miembro_datos_cargo_institucional', true );
									$datos_cargo_organico = get_post_meta( get_the_id(), 'miembro_datos_cargo_organico', true );
									$datos_twitter = get_post_meta( get_the_id(), 'miembro_datos_twitter', true );
									$datos_facebook = get_post_meta( get_the_id(), 'miembro_datos_facebook', true );
									$datos_email = get_post_meta( get_the_id(), 'miembro_datos_email', true );
		  	        	if ( 	$datos_cargo_institucional !='' && $datos_cargo_organico !='' && $datos_twitter !='' && $datos_facebook !='' && $datos_email !='' ) { 
		  	        ?>
		  	        <div class="articulo-contacto">
		  	        	<a href="<?php echo $datos_twitter; ?>"><i class="fa fa-twitter"></i></a>
		  	        	<a href="<?php echo $datos_facebook; ?>"><i class="fa fa-facebook"></i></a>
		  	        	<a href="mailto:<?php echo $datos_email; ?>"><i class="fa fa-envelope"></i></a>
		  	        </div>
		  	        <!-- MODAL | MIEMBRO -->
		  	        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
		  	          <div class="row">
		  	            <div class="small-12 medium-3 columns texto-derecha">
		  	            	<div class="articulo-imagen circular">
		  	            	  <?php the_post_thumbnail(); ?>
		  	            	  <br>
		  	            	  <br>
		  	            	  <?php if ( 	$datos_cargo_institucional !='' ) { ?>
			  	            	  <p class="lead">
			  	            	  	<?php printf( __('%1$s al Senat','podemospress') , $datos_cargo_institucional ); ?>
			  	            	  </p>
			  	            	<?php } ?>
			  	            	<?php if ( 	$datos_cargo_organico !='' ) { ?>
			  	            	  <p>
			  	            	  	<?php printf( __('%1$s a %2$s','podemospress') , $datos_cargo_organico , $delegacion_nombre ); ?>
			  	            	  </p>
		  	            	  <?php } ?>
		  	            	</div>
		  	            </div>
		  	            <div class="small-12 medium-7 columns">
		  	              <h2><?php the_title(); ?></h2>
		  	              <?php the_content(); ?>
		  	              <p>
		  	                <hr>
		  	                <a href="javascript:void(0)" class="button invertido--oscuro close-button" data-close aria-label="<?php esc_attr__('Tancar','podemospress'); ?>"><?php _e("Tancar",'podemospress'); ?></a>
		  	              </p>
		  	            </div>
		  	          </div>
		  	        </div>
		  	        <?php } ?>
		  	      </div>
		  	    </div>
	  	    </div>  
	  	  <?php endwhile; ?>
	  	<?php } ?>
		</div>
	<?php } ?>

	<!-- CARGOS CONGRESO -->

	<?php 
	  if ($congreso_ver == 1) {
	  ?>
		<div class="row sin-margen--abajo instituciones-cargos" data-equalizer data-equalize-on="medium">
		  <div class="small-12 columns">
		    <h5 class="titulo texto-centrado">
		    	<?php _e("Relació de càrrecs electes al Congrés dels Diputats",'podemospress'); ?>
		    </h5>
		  </div>
		  
	  	<?php 
	  	  $args = array(
	  	  	'tax_query' => array(
		        array(
	            'taxonomy' => 'institucion',
	            'field' => 'slug',
	            'terms' => array( 'congreso' )
		        ),
	  	    ),
	  	  	'post_type' => 'miembro',
	  	);
	  	$congreso_item = new WP_Query($args);
	  	if( $congreso_item->have_posts() ) { ?>
	  	  <?php  while ( $congreso_item->have_posts() ) : $congreso_item->the_post(); ?>
	  	    <div class="item small-12 medium-2 columns">
		  	    <div class="articulo stack-for-small" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <a href="javascript:void(0)" data-open="modal-<?php the_ID(); ?>">
			  	        <div class="articulo-imagen circular">
			  	          <?php the_post_thumbnail(); ?>
			  	        </div>
			  	      </a>
		  	      </div>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <h5 class="articulo-titulo" data-equalizer-watch><?php the_title(); ?></h5>
		  	        <?php
		  	        	$datos_cargo_institucional = get_post_meta( get_the_id(), 'miembro_datos_cargo_institucional', true );
									$datos_cargo_organico = get_post_meta( get_the_id(), 'miembro_datos_cargo_organico', true );
									$datos_twitter = get_post_meta( get_the_id(), 'miembro_datos_twitter', true );
									$datos_facebook = get_post_meta( get_the_id(), 'miembro_datos_facebook', true );
									$datos_email = get_post_meta( get_the_id(), 'miembro_datos_email', true );
		  	        	if ( 	$datos_cargo_institucional !='' && $datos_cargo_organico !='' && $datos_twitter !='' && $datos_facebook !='' && $datos_email !='' ) { 
		  	        ?>
		  	        <div class="articulo-contacto">
		  	        	<a href="<?php echo $datos_twitter; ?>"><i class="fa fa-twitter"></i></a>
		  	        	<a href="<?php echo $datos_facebook; ?>"><i class="fa fa-facebook"></i></a>
		  	        	<a href="mailto:<?php echo $datos_email; ?>"><i class="fa fa-envelope"></i></a>
		  	        </div>
		  	        <!-- MODAL | MIEMBRO -->
		  	        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
		  	          <div class="row">
		  	            <div class="small-12 medium-3 columns texto-derecha">
		  	            	<div class="articulo-imagen circular">
		  	            	  <?php the_post_thumbnail(); ?>
		  	            	  <br>
		  	            	  <br>
		  	            	  <?php if ( 	$datos_cargo_institucional !='' ) { ?>
			  	            	  <p class="lead">
			  	            	  	<?php printf( __('%1$s al Congrés dels Diputats','podemospress') , $datos_cargo_institucional ); ?>
			  	            	  </p>
			  	            	<?php } ?>
			  	            	<?php if ( 	$datos_cargo_organico !='' ) { ?>
			  	            	  <p>
			  	            	  	<?php printf( __('%1$s a %2$s','podemospress') , $datos_cargo_organico , $delegacion_nombre ); ?>
			  	            	  </p>
		  	            	  <?php } ?>
		  	            	</div>
		  	            </div>
		  	            <div class="small-12 medium-7 columns">
		  	              <h2><?php the_title(); ?></h2>
		  	              <?php the_content(); ?>
		  	              <p>
		  	                <hr>
		  	                <a href="javascript:void(0)" class="button invertido--oscuro close-button" data-close aria-label="<?php esc_attr__('Tancar','podemospress'); ?>"><?php _e("Tancar",'podemospress'); ?></a>
		  	              </p>
		  	            </div>
		  	          </div>
		  	        </div>
		  	        <?php } ?>
		  	      </div>
		  	    </div>
	  	    </div> 
	  	  <?php endwhile; ?>
	  	<?php } ?>
		</div>
	<?php } ?>

	<!-- CARGOS GOBIERNO CENTRAL -->

	<?php 
	  if ($gobierno_ver == 1) {
	  ?>
		<div class="row sin-margen--abajo instituciones-cargos" data-equalizer data-equalize-on="medium">
		  <div class="small-12 columns">
		    <h5 class="titulo texto-centrado">
		    	<?php _e("Relació de càrrecs electes al Govern Central",'podemospress'); ?>
		    </h5>
		  </div>
		  
	  	<?php 
	  	  $args = array(
	  	  	'tax_query' => array(
		        array(
	            'taxonomy' => 'institucion',
	            'field' => 'slug',
	            'terms' => array( 'gobierno-central' )
		        	),
	  	    ),
	  	  	'post_type' => 'miembro',
	  	);
	  	$gobierno_item = new WP_Query($args);
	  	if( $gobierno_item->have_posts() ) { ?>
	  	  <?php while ( $gobierno_item->have_posts() ) : $gobierno_item->the_post(); ?>
		  	  <div class="item small-12 medium-2 columns">
		  	    <div class="articulo stack-for-small" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <a href="javascript:void(0)" data-open="modal-<?php the_ID(); ?>">
			  	        <div class="articulo-imagen circular">
			  	          <?php the_post_thumbnail(); ?>
			  	        </div>
			  	      </a>
		  	      </div>
		  	      <div class="articulo-seccion articulo-seccion--vertical">
		  	        <h5 class="articulo-titulo" data-equalizer-watch><?php the_title(); ?></h5>
		  	        <?php
		  	        	$datos_cargo_institucional = get_post_meta( get_the_id(), 'miembro_datos_cargo_institucional', true );
									$datos_cargo_organico = get_post_meta( get_the_id(), 'miembro_datos_cargo_organico', true );
									$datos_twitter = get_post_meta( get_the_id(), 'miembro_datos_twitter', true );
									$datos_facebook = get_post_meta( get_the_id(), 'miembro_datos_facebook', true );
									$datos_email = get_post_meta( get_the_id(), 'miembro_datos_email', true );
		  	        	if ( 	$datos_cargo_institucional !='' && $datos_cargo_organico !='' && $datos_twitter !='' && $datos_facebook !='' && $datos_email !='' ) { 
		  	        ?>
		  	        <div class="articulo-contacto">
		  	        	<a href="<?php echo $datos_twitter; ?>"><i class="fa fa-twitter"></i></a>
		  	        	<a href="<?php echo $datos_facebook; ?>"><i class="fa fa-facebook"></i></a>
		  	        	<a href="mailto:<?php echo $datos_email; ?>"><i class="fa fa-envelope"></i></a>
		  	        </div>
		  	        <!-- MODAL | MIEMBRO -->
		  	        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
		  	          <div class="row">
		  	            <div class="small-12 medium-3 columns texto-derecha">
		  	            	<div class="articulo-imagen circular">
		  	            	  <?php the_post_thumbnail(); ?>
		  	            	  <br>
		  	            	  <br>
		  	            	  <?php if ( 	$datos_cargo_institucional !='' ) { ?>
			  	            	  <p class="lead">
			  	            	  	<?php printf( __('%1$s al Govern Central','podemospress') , $datos_cargo_institucional ); ?>
			  	            	  </p>
			  	            	<?php } ?>
			  	            	<?php if ( 	$datos_cargo_organico !='' ) { ?>
			  	            	  <p>
			  	            	  	<?php printf( __('%1$s a %2$s','podemospress') , $datos_cargo_organico , $delegacion_nombre ); ?>
			  	            	  </p>
		  	            	  <?php } ?>
		  	            	</div>
		  	            </div>
		  	            <div class="small-12 medium-7 columns">
		  	              <h2><?php the_title(); ?></h2>
		  	              <?php the_content(); ?>
		  	              <p>
		  	                <hr>
		  	                <a href="javascript:void(0)" class="button invertido--oscuro close-button" data-close aria-label="<?php esc_attr__('Tancar','podemospress'); ?>"><?php _e("Tancar",'podemospress'); ?></a>
		  	              </p>
		  	            </div>
		  	          </div>
		  	        </div>
		  	        <?php } ?>
		  	      </div>
		  	    </div>
	  	    </div>  
		  	<?php endwhile; ?>
			<?php } ?>
		</div>
	<?php } ?>
</section>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('instituciones-abajo') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- RECORDATORIO -->

<?php 
if ($callout_instituciones_ver == 1) { ?>
  <div class="row">
    <div class="small-12 columns">
      <div class="large callout fondo-gris--claro">
        <h4><?php echo $callout_instituciones_titulo ?></h4>
        <p><?php echo $callout_instituciones_texto ?></p>
        
        <?php 
        if ($callout_instituciones_boton !== '' && $callout_instituciones_enlace !== '') { ?>
          <a href="<?php echo $callout_instituciones_enlace ?>" class="button">
            <?php echo $callout_instituciones_boton ?>
          </a>
        <?php } ?>

      </div>
    </div>
  </div>
<?php } ?>

<?php get_footer(); ?>