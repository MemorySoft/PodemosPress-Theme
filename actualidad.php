<?php /* Template Name: Actualidad */ ?>
<?php include('includes/opciones/variables.php'); ?>
<?php get_header(); ?>
<?php
  // Generamos los enlaces a las categorias
  $prensa_id = get_cat_ID( 'sala-de-prensa' );
  $prensa_link = get_category_link( $prensa_id );
  $noticias_id = get_cat_ID( 'noticias' );
  $noticias_link = get_category_link( $noticias_id );
  $opinion_id = get_cat_ID( 'opinion' );
  $opinion_link = get_category_link( $opinion_id );
?>

<!-- CONTENIDO | WIDGETS -->

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
  <div id="prensa" class="row">
    <div class="small-12 columns">
      <h5 class="titulo texto-centrado">Sala de prensa</h5>
    </div>
    <div class="large-12 columns">
      <div class="carrusel -carrusel-tres-items--paginacion sin-margen--abajo">
        <?php 
          $args=array(
          'post_type' => 'post',
          'category_name' => 'sala-de-prensa',
          'posts_per_page'=> 6,
        );
        $prensa_item = new WP_Query($args);
        if( $prensa_item->have_posts() ) { ?>
          <?php  while ( $prensa_item->have_posts() ) : $prensa_item->the_post(); ?>

            <div class="item">
              <div class="articulo stack-for-small">
                <div class="articulo-seccion articulo-seccion--vertical">
                  <div class="articulo-imagen">
                    <a class="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
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
        <a href="<?php echo esc_url( $prensa_link ); ?>" title="ir a la página Sala de Prensa">ver los artículos en Sala de Prensa</a>
      </p>
    </div>
  </div>
<?php } ?>

<!-- NOTICIAS -->

<?php 
  if ($carrusel_noticias_ver == 1) {
  ?>    
  <div id="noticias" class="row">
    <div class="small-12 columns">
      <h5 class="titulo texto-centrado">Noticias</h5>
    </div>
    <div class="large-12 columns">
      <div class="carrusel -carrusel-tres-items--paginacion sin-margen--abajo">
        <?php 
          $args=array(
          'post_type' => 'post',
          'category_name' => 'noticias',
          'posts_per_page'=> 6,
        );
        $noticias_item = new WP_Query($args);
        if( $noticias_item->have_posts() ) { ?>
          <?php  while ( $noticias_item->have_posts() ) : $noticias_item->the_post(); ?>

            <div class="item">
              <div class="articulo stack-for-small">
                <div class="articulo-seccion articulo-seccion--vertical">
                  <div class="articulo-imagen">
                    <a class="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
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
        <a href="<?php echo esc_url( $noticias_link ); ?>" title="ir a la página de la categoría Noticias">ver los artículos en Noticias</a>
      </p>
    </div>
  </div>
<?php } ?>

<!-- OPINIÓN -->

<?php 
  if ($carrusel_opinion_ver == 1) {
  ?>    
  <div id="opinion" class="row">
    <div class="small-12 columns">
      <h5 class="titulo texto-centrado">Opinión</h5>
    </div>
    <div class="large-12 columns">
      <div class="carrusel -carrusel-tres-items--paginacion sin-margen--abajo">
        <?php 
          $args=array(
          'post_type' => 'post',
          'category_name' => 'opinion',
          'posts_per_page'=> 6,
        );
        $opinion_item = new WP_Query($args);
        if( $opinion_item->have_posts() ) { ?>
          <?php  while ( $opinion_item->have_posts() ) : $opinion_item->the_post(); ?>

            <div class="item">
              <div class="articulo stack-for-small">
                <div class="articulo-seccion articulo-seccion--vertical">
                  <div class="articulo-imagen">
                    <a class="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
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
        <a href="<?php echo esc_url( $opinion_link ); ?>" title="ir a la página de la categoría Opinión">ver los artículos en Opinión</a>
      </p>
    </div>
  </div>
<?php } ?>

<!-- CANAL YOUTUBE -->

<?php 
  if ($carrusel_videos_ver == 1) {
  ?>    
  <div id="videos" class="row">
    <div class="small-12 columns">
      <h5 class="titulo texto-centrado">Vídeos</h5>
    </div>
    <div class="large-12 columns">
      <div class="carrusel -carrusel-tres-items--paginacion sin-margen--abajo">
        <?php 
          $args=array(
          'post_type' => 'video',
          'posts_per_page'=> 6,
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
                </div>
              </div>
            </div>

          <?php endwhile; ?>
        <?php } ?>
      </div>
      <p class="texto-centrado"><a href="#">Ver todos los vídeos</a></p>
    </div>
  </div>
<?php } ?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('actualidad-abajo') ) : ?>

		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>