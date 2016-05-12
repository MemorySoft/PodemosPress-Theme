<?php get_header(); ?>

<div class="contenedor">

  <!-- CONTENIDO -->

  <div class="row">
  	<div class="small-12 columns">
  		<?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

          <!-- POST -->

          <div class="row">
            <div class="small-12 columns">
              <?php edit_post_link('Editar', ''); ?>
              <div class="articulo-cabecera">
                <h3 class="articulo-titulo"><?php the_title(); ?></h3>
              </div>
              <div class="articulo-imagen">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="articulo-info">
                <span class="articulo-fecha"><?php the_time('j \d\e\ F'); ?></span>
              </div>
              <div class="articulo-texto">
                <?php the_content(); ?>
              </div>
            </div>
          </div>

          <!-- BOTONES SOCIALES -->

          <div class="row botones-sociales">
            <div class="small-12 columns">
              <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="boton-social boton-facebook">
                <i class="fa fa-facebook"></i>
                Facebook
              </a>
              <a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>" class="boton-social boton-twitter">
                <i class="fa fa-twitter"></i>
                Twitter
              </a>
              <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="boton-social boton-google">
                <i class="fa fa-google-plus"></i>
                Google Plus
              </a>
            </div>
          </div>
        <?php endwhile; ?>
    
        <!-- NAVEGACION POSTS -->

        <div class="row navegacion-articulos">
        	<hr>
          <div class="small-12 medium-6 medium columns navegacion-anterior-articulo"> 
            <?php previous_post_link( '<p>ARTÍCULO PREVIO</p> %link', '%title' ); ?>
          </div>
          <div class="small-12 medium-6 texto-derecha medium columns navegacion-proximo-articulo">
            <?php next_post_link( '<p>PRÓXIMO ARTÍCULO</p> %link', '%title' ); ?>
          </div>
        </div>
        <?php endif; ?>
  	</div>
  </div>

</div> <!-- /.contenedor -->

<?php get_footer(); ?>