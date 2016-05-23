<?php get_header(); ?>

<div class="contenedor">

  <!-- CONTENIDO -->

  <div class="row">
    <div class="small-12 columns contenido-principal">

      <!-- POST -->

  		<?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <h1 class="pagina-titulo"><?php the_title(); ?></h1>
          <div class="pagina-contenido">
            <div class="pagina-imagen-caja">
              <span class="pagina-imagen">
                <?php the_post_thumbnail(); ?>
              </span>
            </div>
            <div class="pagina-texto">
              <?php the_content(); ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>

</div> <!-- /.contenedor -->

<?php get_footer(); ?>