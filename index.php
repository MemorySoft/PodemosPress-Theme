<?php get_header(); ?>

<div class="contenedor">

  <!-- TITULO -->

  <div class="row">
    <div class="small-12 columns">
      <?php ?>
        <?php if ( is_category() ) { ?>
          <h3 class="pagina-titulo">Categoría: <?php single_cat_title(); ?></h3>
        <?php } elseif ( is_tag() ) { ?>
          <h3 class="pagina-titulo">Etiqueta: <?php single_tag_title(); ?></h3>
        <?php } elseif ( is_day() ) { ?>
          <h3 class="pagina-titulo"><?php the_time('j \d\e\ F \d\e\ Y'); ?></h3>
        <?php } elseif ( is_month() ) { ?>
          <h3 class="pagina-titulo"><?php the_time('F \d\e\ Y'); ?></h3>
        <?php } elseif ( is_year() ) { ?>
          <h3 class="pagina-titulo"><?php the_time('Y'); ?></h3>
        <?php } elseif ( is_author() ) { ?>
          <h3 class="pagina-titulo">Artículos de <?php get_the_author();?></h3>
        <?php } elseif ( isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
          <h3 class="pagina-titulo">Archivo de <?php bloginfo( 'name' ); ?></h3>
      <?php } ?>
    </div>
  </div>

  <!-- CONTENIDO -->

  <div class="row">

    <!-- BARRA LATERAL -->

    <div class="small-12 medium-4 columns show-for-medium sidebar">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
              
      <?php endif; ?>
      <?php wp_list_categories(); ?>
      <hr>
      <li>Más recientes</li>
      <?php wp_get_archives('type=postbypost&limit=10'); ?>
      <hr>
      <li>Archivo</li>
      <?php wp_get_archives('type=yearly'); ?>
    </div>

    <!-- ARTICULOS -->

    <div class="small-12 medium-8 columns contenido-principal">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <div <?php post_class(); ?>>
            <div id="post-<?php the_ID(); ?>" class="articulo stack-for-small">
              <div class="articulo-seccion">
                <a class="articulo-imagen" href="<?php the_permalink(); ?>" title="Leer <?php the_title(); ?>">
                  <?php the_post_thumbnail(); ?>
                </a>
              </div>
              <div class="articulo-seccion">
                <h4 class="articulo-titulo"><a href="<?php the_permalink(); ?>" title="Leer <?php the_title(); ?>"><?php the_title(); ?></a></h4>
                <div class="articulo-info">                  
                  <span class="articulo-fecha"><?php the_time('j \d\e\ F \|\ G:i'); ?></span>
                </div>
                <div class="articulo-extracto"><?php echo the_excerpt(); ?></div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <?php else: ?>
        <div class="large-12 medium-12 columns">
          <h2>No hay artículos</h2>
          <p>Parece que aún no hay artículos publicados aquí...</p>
        </div>
      <?php endif; ?>

      <!-- PAGINADOR -->

      <div id="articulos-navegacion" class="row">
      	<hr>
        <div class="large-12 medium-12 columns">
          <span class="articulos-recientes"><?php previous_posts_link( 'Recientes' ); ?></span>
          <span class="articulos-antiguos flota-derecha"><?php next_posts_link( 'Antiguos' ); ?></span>
        </div>
      </div>
    </div>
  </div>
</div> <!-- /.contenedor -->

<?php get_footer(); ?>