<?php /* Template Name: Actualidad */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/variables.php'); ?>
<?php get_header(); ?>
<?php
  // Generamos los enlaces a las categorias
  $prensa_id = get_cat_ID( 'Sala de prensa' );
  $prensa_link = get_category_link( $prensa_id );
  $noticias_id = get_cat_ID( 'Noticias' );
  $noticias_link = get_category_link( $noticias_id );
  $opinion_id = get_cat_ID( 'Opinion' );
  $opinion_link = get_category_link( $opinion_id );
?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('actualidad-arriba') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- NAVEGACIÓN CATEGORIAS -->
    
<div class="row">
  <div class="small-12 columns">
    <div data-sticky-container>
      <div data-sticky data-options="marginTop:0;" style="width:100%">
        <ul class="menu menu-actualidad expanded fondo-morado texto-centrado">
          <li><a href="#prensa">Sala de prensa</a></li>
          <li><a href="#noticias">Noticias</a></li>
          <li><a href="#opinion">Opinión</a></li>
          <li><a href="#videos">Videos</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- SALA DE PRENSA -->

<?php 
  if ($carrusel_prensa_ver == 1) {
  ?>    
  <div id="prensa" class="row actualidad-carrusel">
    <div class="small-12 columns">
      <h5 class="titulo texto-centrado">Sala de prensa</h5>
    </div>
    <div class="large-12 columns">
      <div class="carrusel -carrusel-tres-items--navegacion sin-margen--abajo">
        <?php 
          $args=array(
          'post_type' => 'post',
          'category_name' => 'sala-de-prensa',
          'posts_per_page'=> 9,
        );
        $prensa_item = new WP_Query($args);
        if( $prensa_item->have_posts() ) { ?>
          <?php  while ( $prensa_item->have_posts() ) : $prensa_item->the_post(); ?>

            <div class="item">
              <div class="articulo stack-for-small">
                <div class="articulo-seccion articulo-seccion--vertical">
                  <div class="articulo-imagen">
                    <a href="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                  </div>
                </div>
                <div class="articulo-seccion articulo-seccion--vertical">
                  <h4 class="articulo-titulo"><a href="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><?php the_title(); ?></a></h4>
                  <p class="articulo-extracto"><?php the_excerpt(); ?></p>
                </div>
              </div>
            </div>

          <?php endwhile; ?>
        <?php } ?>
      </div>
      <p class="texto-centrado">
        <a href="<?php echo esc_url( $prensa_link ); ?>" title="ir a la página Sala de Prensa">todos los artículos de Sala de Prensa</a>
      </p>
    </div>
  </div>
<?php } ?>

<!-- NOTICIAS -->

<?php 
  if ($carrusel_noticias_ver == 1) {
  ?>    
  <div id="noticias" class="row actualidad-carrusel">
    <div class="small-12 columns">
      <h5 class="titulo texto-centrado">Noticias</h5>
    </div>
    <div class="large-12 columns">
      <div class="carrusel -carrusel-tres-items--navegacion sin-margen--abajo">
        <?php 
          $args=array(
          'post_type' => 'post',
          'category_name' => 'noticias',
          'posts_per_page'=> 9,
        );
        $noticias_item = new WP_Query($args);
        if( $noticias_item->have_posts() ) { ?>
          <?php  while ( $noticias_item->have_posts() ) : $noticias_item->the_post(); ?>

            <div class="item">
              <div class="articulo stack-for-small">
                <div class="articulo-seccion articulo-seccion--vertical">
                  <div class="articulo-imagen">
                    <a href="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                  </div>
                </div>
                <div class="articulo-seccion articulo-seccion--vertical">
                  <h4 class="articulo-titulo"><a href="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><?php the_title(); ?></a></h4>
                  <p class="articulo-extracto"><?php the_excerpt(); ?></p>
                </div>
              </div>
            </div>

          <?php endwhile; ?>
        <?php } ?>
      </div>
      <p class="texto-centrado">
        <a href="<?php echo esc_url( $noticias_link ); ?>" title="ir a la página de la categoría Noticias">todos los artículos de Noticias</a>
      </p>
    </div>
  </div>
<?php } ?>

<!-- OPINIÓN -->

<?php 
  if ($carrusel_opinion_ver == 1) {
  ?>    
  <div id="opinion" class="row actualidad-carrusel">
    <div class="small-12 columns">
      <h5 class="titulo texto-centrado">Opinión</h5>
    </div>
    <div class="large-12 columns">
      <div class="carrusel -carrusel-tres-items--navegacion sin-margen--abajo">
        <?php 
          $args=array(
          'post_type' => 'post',
          'category_name' => 'opinion',
          'posts_per_page'=> 9,
        );
        $opinion_item = new WP_Query($args);
        if( $opinion_item->have_posts() ) { ?>
          <?php  while ( $opinion_item->have_posts() ) : $opinion_item->the_post(); ?>

            <div class="item">
              <div class="articulo stack-for-small">
                <div class="articulo-seccion articulo-seccion--vertical">
                  <div class="articulo-imagen">
                    <a href="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                  </div>
                </div>
                <div class="articulo-seccion articulo-seccion--vertical">
                  <h4 class="articulo-titulo"><a href="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><?php the_title(); ?></a></h4>
                  <p class="articulo-extracto"><?php the_excerpt(); ?></p>
                </div>
              </div>
            </div>

          <?php endwhile; ?>
        <?php } ?>
      </div>
      <p class="texto-centrado">
        <a href="<?php echo esc_url( $opinion_link ); ?>" title="ir a la página de la categoría Opinión">todos los artículos de Opinión</a>
      </p>
    </div>
  </div>
<?php } ?>

<!-- CANAL YOUTUBE -->

<?php 
  if ($carrusel_videos_ver == 1) {
  ?>    
  <div id="videos" class="row actualidad-carrusel">
    <div class="small-12 columns">
      <h5 class="titulo texto-centrado">Vídeos</h5>
    </div>
    <div class="large-12 columns">
      <div class="carrusel -carrusel-tres-items--navegacion sin-margen--abajo">
        <?php 
          $args=array(
          'post_type' => 'video',
          'posts_per_page'=> 9,
        );
        $videos_item = new WP_Query($args);
        if( $videos_item->have_posts() ) { ?>
          <?php  while ( $videos_item->have_posts() ) : $videos_item->the_post(); ?>

            <div class="item">
              <div class="articulo stack-for-small">
                <div class="articulo-seccion articulo-seccion--vertical">
                  <div class="articulo-imagen flex-video">
                    <?php the_content(); ?>
                  </div>
                  <h5><a href="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><?php the_title(); ?></a></h5>
                </div>
              </div>
            </div>

          <?php endwhile; ?>
        <?php } ?>
      </div>
      <p class="texto-centrado"><a href="<?php bloginfo('url'); ?>/videos">Ver todos los vídeos</a></p>
    </div>
  </div>
<?php } ?>

<!-- ENLACE AL BLOG -->

<div class="row">
  <div class="small-12 columns">
    <div class="callout large fondo-morado">
      <h4>No te pierdas ninguna noticia <a class="button invertido flota-derecha" href="<?php bloginfo('url'); ?>/noticias">Todas las noticias</a></h4>
    </div>
  </div>
</div>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('actualidad-abajo') ) : ?>

		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>