<?php /* Template Name: Portada */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/variables.php'); ?>
<?php get_header(); ?>

	<!-- CARRUSEL DE NOTICIAS -->

  <?php 
    if ($carrusel_home_ver == 1) {
    ?>    
  	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-carrusel') ) : ?>
      <div class="carrusel -carrusel-un-item--sin-controles">
        <?php 
          $args=array(
          'post_type' => 'carrusel'
        );
        $carrusel_item = new WP_Query($args);
        if( $carrusel_item->have_posts() ) { ?>
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
	      <div class="small-12 large-6 columns">
	        <h4><?php echo $portales_titulo_izq ?></h4>
	        <p><?php echo $portales_texto_izq ?></p>
	        <a href="<?php echo $portales_enlace_btn_izq ?>" class="small button"><?php echo $portales_texto_btn_izq ?></a>
	      </div>
	      <div class="small-12 large-6 columns">
	        <h4><?php echo $portales_titulo_der ?></h4>
          <p><?php echo $portales_texto_der ?></p>
          <a href="<?php echo $portales_enlace_btn_der ?>" class="small button"><?php echo $portales_texto_btn_der ?></a>
	      </div>
	    </div>
	  </div>
  <?php	} ?>

  <!-- ACTUALIDAD -->

  <div class="row">
    <div class="small-12 large-8 columns contenido-principal">
      <h5 class="titulo">Actualidad</h5>

      <?php $args=array(
        'post_type' => 'post',
        'posts_per_page'=> 6,
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
          <p class="articulo-extracto"><?php the_excerpt(); ?></p>
          
          </div>
        </div>
        <?php endwhile; ?>
      <?php } ?>      

      <div class="row">
        <div class="small-12 columns">
          <hr>
          <a href="index.php" class="tiny button flota-derecha">Ver toda la actualidad</a>
        </div>
      </div>
    </div>
    

    <!-- BARRA LATERAL | AGENDA -->

    <div class="small-12 large-4 columns barra-lateral">
      
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-lateral-uno') ) : ?>
      	<div class="modulo modulo-agenda">
        	<h5 class="titulo">Eventos</h5>
          <div class="modulo-agenda-lista">
            <article class="evento">
              <div class="evento-fecha">
                <p class="evento-mes">Sept</p>
                <p class="evento-dia">18</p>
              </div>
              <div class="evento-descripcion">
                <h6 class="evento-descripcion-cabecera">
                  <a href="#" title="Day in the Life of Foundation for Apps">Day in the Life of Foundation for Apps</a>
                </h6>
                <p class="evento-descripcion-detalles"><span class="evento-descripcion-hora"></span>BDConf - Altlanta</p>
              </div>
            </article>
            <hr>
            <article class="evento">
              <div class="evento-fecha">
                <p class="evento-mes">Sept</p>
                <p class="evento-dia">18</p>
              </div>
              <div class="evento-descripcion">
                <h6 class="evento-descripcion-cabecera">
                  <a href="#" title="Day in the Life of Foundation for Apps">Day in the Life of Foundation for Apps</a>
                </h6>
                <p class="evento-descripcion-detalles"><span class="evento-descripcion-hora"></span>BDConf - Altlanta</p>
              </div>
            </article>
            <hr>
            <article class="evento">
              <div class="evento-fecha">
                <p class="evento-mes">Sept</p>
                <p class="evento-dia">18</p>
              </div>
              <div class="evento-descripcion">
                <h6 class="evento-descripcion-cabecera">
                  <a href="#" title="Day in the Life of Foundation for Apps">Day in the Life of Foundation for Apps</a>
                </h6>
                <p class="evento-descripcion-detalles"><span class="evento-descripcion-hora"></span>BDConf - Altlanta</p>
              </div>
            </article>
            <hr>
          </div>
          <div class="modulo-controles">
            <a href="#" class="tiny button">Ver agenda completa</a>
          </div>
      	</div>
      <?php endif; ?>

      <!-- BARRA LATERAL | DESTACADO -->

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-lateral-dos') ) : ?>

			<?php endif; ?>

      <!-- BARRA LATERAL | REDES -->

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
        <h5 class="titulo texto-centrado">Vídeos</h5>
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
	      <h5 class="titulo texto-centrado">Colabora con Podemos</h5>
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