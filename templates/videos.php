<?php /* Template Name: Vídeos */ ?>
<?php get_header(); ?>

<!-- VIDEOS -->
    
<div id="videos" class="row actualidad-carrusel">
  <div class="small-12 columns">
    <h5 class="titulo texto-centrado"><?php _e('Vídeos','podemospress'); ?></h5>
  </div>
  <div class="large-12 columns">
    <?php 
      $temp_query = $wp_query; // El truco del almendruco http://darrinb.com/how-to-paginate-a-custom-wordpress-query-loop/
      $args = array(
      'post_type' => 'video',
      'posts_per_page'=> 12,
      'paged' => $paged
    );
    $wp_query = new WP_Query($args);
    if( $wp_query->have_posts() ) { ?>
      <div class="row" data-equalizer data-equalize-on="medium">
        <?php  while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <div class="item small-12 medium-4 columns" data-equalizer-watch>
            <div class="articulo stack-for-small">
              <div class="articulo-seccion articulo-seccion--vertical">
                <div class="articulo-imagen flex-video">
                  <?php the_content(); ?>
                </div>
                <h5><a href="<?php the_permalink(); ?>" title="<?php _e('Llegir','podemospress'); ?> <?php the_title(); ?>"> <?php the_title(); ?></a></h5>
              </div>
            </div>
          </div>
        <?php endwhile; ?>

        <hr>
        <nav class="prev-next-posts">
          <div class="prev-posts-link">
            <?php echo get_next_posts_link( __('Vídeos antics') ); ?>
          </div>
          <div class="next-posts-link">
            <?php echo get_previous_posts_link( __('Vídeos mes nous') ); ?>
          </div>
        </nav>
        <?php $wp_query = $temp_query; ?>
      </div>
    <?php } ?>
  </div>
</div>

<?php get_footer(); ?>