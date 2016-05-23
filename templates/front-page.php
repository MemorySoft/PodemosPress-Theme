<?php /* Template Name: Portada */ ?>
<?php require( get_template_directory() . '/includes/opciones/variables.php'); ?>
<?php get_header(); ?>

	<!-- CARRUSEL DE NOTICIAS -->

  <?php 
    if ($carrusel_home_ver == 1) {
    ?>    
  	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-carrusel') ) : ?>
      <div class="carrusel portada-carrusel -carrusel-un-item">
        <?php 
        $noticias_args = array(
          'post_type' => 'post',
          'category_name' => 'portada',
          'posts_per_page'=> 3,
        );
        $carrusel_args = array(
          'post_type' => 'carrusel'
        );
        $carrusel_item = new WP_Query($carrusel_args);
        $instituciones_item = new WP_Query($noticias_args);
        if( $instituciones_item->have_posts() ) { ?>
          <?php  while ( $instituciones_item->have_posts() ) : $instituciones_item->the_post(); ?>
            <div class="carrusel-item">
              <?php the_post_thumbnail(); ?>
              <div class="carrusel-seccion">
                <h1 class="carrusel-titulo"><?php the_title(); ?></h1>
                <a class="carrusel-enlace button invertido" href="<?php the_permalink(); ?>" title="<?php esc_attr__('Llegir','podemospress'); ?> <?php the_title(); ?>">
                    <?php _e('Llegir','podemospress'); ?>
                  </a>
              </div>
            </div>
          <?php endwhile; ?>
        <?php } elseif( $carrusel_item->have_posts() ) { ?>
          <?php  while ( $carrusel_item->have_posts() ) : $carrusel_item->the_post(); ?>
            <div>
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endwhile; ?>
        <?php } ?>
      </div>
    <?php endif; ?>
  <?php } ?>

  <!-- CAMPAÑA DESTACADA -->

  <?php 
    if ($destacado_home_ver == 1) {
    ?>  
    <div class="row texto-centrado">
      <div class="small-12 columns">
        <?php 
          $args = array(
          'post_type' => 'destacado',
          'posts_per_page'=> 1,
        );
        $destacado_item = new WP_Query($args);
        if( $destacado_item->have_posts() ) { ?>
          <?php  while ( $destacado_item->have_posts() ) : $destacado_item->the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
          <?php endwhile; ?>
        <?php } ?>
      </div>
    </div>
  <?php } ?>

  <!-- ACCESO PORTALES -->

  <?php 
  	if ($portales_ver == 1) {
		?>
	  <div class="franja fondo-gris--claro">
	    <div class="row sin-margen--abajo texto-centrado">
        <?php if ( $portales_titulo_izq !='' && $portales_texto_izq !='' && $portales_enlace_btn_izq !='' && $portales_texto_btn_izq !='' ) { ?>
          <div class="small-12 large-6 columns">
            <h4><?php echo $portales_titulo_izq ?></h4>
            <p><?php echo $portales_texto_izq ?></p>
            <a href="<?php echo $portales_enlace_btn_izq ?>" class="small button"><?php echo $portales_texto_btn_izq ?></a>
          </div>
        <?php } else { ?>
  	      <div class="small-12 large-6 columns">
            <h4><?php _e('Transparencia','podemospress'); ?></h4>
            <p><?php _e("Consulta tota la comptabilitat del partit al detall, així com els perfils dels nostres càrrecs interns i públics, les seves declaracions de béns i l'activitat parlamentària que realitzen.",'podemospress'); ?></p>
            <a href="https://transparencia.podemos.info/" class="small button"><?php _e('Visita el portal','podemospress'); ?></a>
          </div>
        <?php } ?>
        <?php if ( $portales_titulo_der !='' && $portales_texto_der !='' && $portales_enlace_btn_der !='' && $portales_texto_btn_der !='' ) { ?>
  	      <div class="small-12 large-6 columns">
  	        <h4><?php echo $portales_titulo_der ?></h4>
            <p><?php echo $portales_texto_der ?></p>
            <a href="<?php echo $portales_enlace_btn_der ?>" class="small button"><?php echo $portales_texto_btn_der ?></a>
  	      </div>
        <?php } else { ?>
          <div class="small-12 large-6 columns">
            <h4><?php _e('Participació','podemospress'); ?></h4>
            <p><?php _e("Plaza Podem, el nostre canal de Appgree i l'aplicació Osoigo són algunes de les eines que des de Podem utilitzem per promoure la participació entre els ciutadans, fomentant el debat i possibilitant el contacte.",'podemospress'); ?></p>
            <a href="https://transparencia.podemos.info/" class="small button"><?php _e('Participa!','podemospress'); ?></a>
          </div>
        <?php } ?>
	    </div>
	  </div>
  <?php	} ?>

  <!-- ACTUALIDAD -->

  <div class="row">
    <div class="small-12 large-8 columns contenido-principal">
      <h5 class="titulo"><?php _e('Actualitat','podemospress'); ?></h5>

      <?php 
      $excluir_portada = get_cat_ID('portada');
      $args=array(
        'post_type' => 'post',
        'posts_per_page'=> 6,
        'category__not_in'=> $excluir_portada,
      );
      $posts = new WP_Query($args);
      if( $posts->have_posts() ) { 
        while ( $posts->have_posts() ) : $posts->the_post(); ?>
        <div class="articulo stack-for-small">
          <div class="articulo-seccion">
            <div class="articulo-imagen">
              <?php the_post_thumbnail(); ?>
            </div>
          </div>
          <div class="articulo-seccion">
            <a href="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>">
              <h4 class="articulo-titulo"><?php the_title(); ?></h4>
            </a>
            <span class="articulo-extracto"><?php $customLength=50; the_excerpt(); ?></span>
          </div>
        </div>
        <?php endwhile; ?>
      <?php } ?>      
    </div>
    

    <!-- BARRA LATERAL -->

    <div class="small-12 large-4 columns barra-lateral">

      <!-- AGENDA -->
      
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-lateral-uno') ) : ?>
      	
      <?php endif; ?>

      <!-- DESTACADO -->

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-lateral-dos') ) : ?>

			<?php endif; ?>

      <!-- REDES -->

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-lateral-tres') ) : ?>
				<?php
        if ($timeline_twitter !== '') { ?>
		      <div class="modulo modulo-twitter">
		        <?php echo $timeline_twitter ?>
		      </div>
		    <?php }
		    if ($timeline_facebook !== '') { ?>
		      <div class="modulo modulo-facebook">
		        <?php echo $timeline_facebook ?>
		      </div>
		    <?php } ?>
	    <?php endif; ?>
    </div>
  </div>

  <!-- WIDGETS -->

	<div class="row sin-margen--abajo">
		<div class="small-12 columns">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-enmedio') ) : ?>

			<?php endif; ?>
		</div>
	</div>

  <!-- VIDEOS -->

  <?php 
  if ($video_ver == 1) {
  ?>    
    <div id="videos" class="row">
      <div class="small-12 columns">
        <h5 class="titulo texto-centrado"><?php _e('Vídeos','podemospress'); ?></h5>
      </div>  
      <?php 
        $args=array(
        'post_type' => 'video',
        'posts_per_page'=> 6,
      );
      $videos_item = new WP_Query($args);
      if( $videos_item->have_posts() ) { ?>
        <?php  while ( $videos_item->have_posts() ) : $videos_item->the_post(); ?>
          <div class="small-12 medium-4 columns">
            <div class="item">
              <div class="articulo stack-for-small">
                <div class="articulo-seccion articulo-seccion--vertical">
                  <div class="articulo-imagen flex-video">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php } ?>
      <div class="small-12 columns">
          <?php
          if ($timeline_youtube !== '') { ?>
            <div class="modulo modulo-youtube">
              <span class="flota-derecha"><?php echo $timeline_youtube ?></span>
            </div>
          <?php } ?>
        </div>
    </div>
  <?php } ?>

  <!-- COLABORACIÓN -->

	<?php 
  	if ($colabora_ver == 1) {
  	?>
	  <div class="row" data-equalizer data-equalize-on="medium">
	    <div class="small-12 columns">
	      <h5 class="titulo texto-centrado">
          <?php printf( __("Col·labora amb %s",'podemospress') , $delegacion_nombre ); ?> 
        </h5>
	    </div>
	    <div class="small-12 large-3 columns">

        <?php 
        if ($colabora_enlace_uno !== '' && $colabora_titulo_uno !== '' && $colabora_texto_uno !== '') { ?>
  	    	<a href="<?php echo $colabora_enlace_uno ?>">
  	      	<div class="callout fondo-morado texto-centrado" data-equalizer-watch>
  	          <h5><?php echo $colabora_titulo_uno ?></h5>
  	          <p><?php echo $colabora_texto_uno ?></p>
  	      	</div>
  	      </a>
        <?php } ?>

	    </div>
	    <div class="small-12 large-3 columns">
        <?php 
        if ($colabora_enlace_dos !== '' && $colabora_titulo_dos !== '' && $colabora_texto_dos !== '') { ?>
  	    	<a href="<?php echo $colabora_enlace_dos ?>">
  	      	<div class="callout fondo-morado texto-centrado" data-equalizer-watch>
  	          <h5><?php echo $colabora_titulo_dos ?></h5>
  	          <p><?php echo $colabora_texto_dos ?></p>
  	      	</div>
  	      </a>
        <?php } ?>

	    </div>
	    <div class="small-12 large-3 columns">

        <?php 
        if ($colabora_enlace_tres !== '' && $colabora_titulo_tres !== '' && $colabora_texto_tres !== '') { ?>
  	    	<a href="<?php echo $colabora_enlace_tres ?>">
  	      	<div class="callout fondo-morado texto-centrado" data-equalizer-watch>
  	          <h5><?php echo $colabora_titulo_tres ?></h5>
  	          <p><?php echo $colabora_texto_tres ?></p>
  	      	</div>
  	      </a>
        <?php } ?>

	    </div>
	    <div class="small-12 large-3 columns">

        <?php 
        if ($colabora_enlace_cuatro !== '' && $colabora_titulo_cuatro !== '' && $colabora_texto_cuatro !== '') { ?>
  	    	<a href="<?php echo $colabora_enlace_cuatro ?>">
  	      	<div class="callout fondo-morado texto-centrado" data-equalizer-watch>
  	          <h5><?php echo $colabora_titulo_cuatro ?></h5>
  	          <p><?php echo $colabora_texto_cuatro ?></p>
  	      	</div>
  	      </a>
        <?php } ?>

	    </div>
	  </div>
	<?php } ?>

  <!-- RECORDATORIO -->

  <?php 
  if ($callout_home_ver == 1) { ?>
    <div class="row">
      <div class="small-12 columns">
        <div class="large callout fondo-gris--claro">
          <h4><?php echo $callout_home_titulo ?></h4>
          <p><?php echo $callout_home_texto ?></p>
          
          <?php 
          if ($callout_home_boton !== '' && $callout_home_enlace !== '') { ?>
            <a href="<?php echo $callout_home_enlace ?>" class="button">
              <?php echo $callout_home_boton ?>
            </a>
          <?php } ?>

        </div>
      </div>
    </div>
  <?php } ?>

<?php get_footer(); ?>