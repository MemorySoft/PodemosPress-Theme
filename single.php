<?php get_header(); ?>

<div class="contenedor">

  <!-- CONTENIDO -->

  <div class="row">

    <!-- BARRA LATERAL -->

    <div class="small-12 medium-4 columns show-for-medium sidebar">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
              
      <?php endif; ?>
      <?php wp_list_categories(); ?>
      <hr>
      <li>Etiquetes</li>
      <?php wp_tag_cloud( 'format=list' ); ?>
      <hr>
      <li>Más recientes</li>
      <?php wp_get_archives('type=postbypost&limit=10'); ?>
      <hr>
      <li>Archivo</li>
      <?php wp_get_archives('type=yearly'); ?>
    </div>

    <!-- POST -->

  	<div class="small-12 medium-8 columns">
  		<?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

          <div class="row">
            <div class="small-12 columns">
              <?php edit_post_link('Editar', ''); ?>
              <div class="articulo-imagen">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="articulo-info">
                <span class="articulo-fecha"><?php the_time('j \d\e\ F'); ?></span>
                <span class="articulo-categoria"><?php the_category(); ?></span>
              </div>
              <div class="articulo-cabecera">
                <h3 class="articulo-titulo"><?php the_title(); ?></h3>
              </div>
              <div class="articulo-texto">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
    
        <!-- NAVEGACION POSTS -->

        <div class="row navegacion-articulos">
        	<hr>
          <div class="small-12 medium-6 medium columns navegacion-anterior-articulo"> 
            <?php previous_post_link( '<p>ARTÍCULO PREVIO</p> %link', '%title' ); ?>
          </div>
          <div class="small-12 medium-6 medium columns navegacion-proximo-articulo">
            <?php next_post_link( '<p>PRÓXIMO ARTÍCULO</p> %link', '%title' ); ?>
          </div>
        </div>
        <?php endif; ?>
  	</div>
  </div>

</div> <!-- /.contenedor -->

<?php get_footer(); ?>