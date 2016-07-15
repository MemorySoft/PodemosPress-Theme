<?php /* Template Name: Contacto */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/variables.php'); ?>
<?php get_header(); ?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contacto-arriba') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- MAPA -->
    
<div class="row" data-equalizer data-equalize-on="medium">
  <div class="small-12 medium-6 columns">
    <div class="large callout fondo-morado" data-equalizer-watch>
      <h2 class="logo-texto sin-margen"><?php echo $delegacion_nombre ?></h2>
      <h5><?php echo $delegacion_direccion ?></h5>
      <div class="media-object">
        <div class="media-object-section">
          <i class="fa fa-clock-o fa-3x"></i>
        </div>
        <div class="media-object-section">
          <p>
            <strong>
              <?php echo $delegacion_horario_am ?><br>
              <?php echo $delegacion_horario_pm ?>
            </strong>
          </p>
        </div>
      </div>
      <div class="media-object">
        <div class="media-object-section">
          <i class="fa fa-phone fa-3x"></i>
        </div>
        <div class="media-object-section">
          <h3 class="sin-margen"><?php echo $delegacion_telefono ?></h3>
        </div>
      </div>
    </div>
  </div>
  <div class="small-12 medium-6 columns">
    <div class="destacado-media flex-video" data-equalizer-watch>
      <?php echo $circulos_media ?>
    </div>
  </div>
</div>

<!-- FORMULARIO -->

<div class="row formulario">
	<div class="small-12 columns">
		<?php // include( trailingslashit( get_template_directory() ). '/partials/formulario.php'); ?>
	</div>
</div>

<!-- DIRECTORIO -->

<?php 
  if ($directorio_ver == 1) {
  ?>
	<div class="row">
	  <h5 class="titulo texto-centrado"><?php _e('Directori','podemospress' ); ?></h5>
	  <div class="small-12 columns texto-centrado">
	    <p><?php _e('Directori de contactes públics d\'àrees i càrrecs','podemospress' ); ?> <?php if ($delegacion_nombre !== '') { ?>- <?php echo $delegacion_nombre ?><?php }?></p>
	  </div>
	</div>
	<div class="row small-up-1 medium-up-2 large-up-3" data-equalizer data-equalize-on="medium">
    <?php 
	  $args = array(
	  	'post_type' => 'contacto',
  	);
  	$contacto_item = new WP_Query($args);
  	if( $contacto_item->have_posts() ) { ?>
  		<?php  while ( $contacto_item->have_posts() ) : $contacto_item->the_post(); ?>
	      <div class="column directorio-item callout large" data-equalizer-watch>
	      	<?php
						$telefono = get_post_meta( get_the_id(), 'contacto_telefono', true );
						$email = get_post_meta( get_the_id(), 'contacto_email', true );
						$telegram = get_post_meta( get_the_id(), 'contacto_telegram', true );
	        ?>
        	<h6 class="directorio-nombre"><?php the_title(); ?></h6> 
        	<div class="directorio-telefono"><strong><a href="tel:<?php echo $telefono ?>"><?php echo $telefono ?></a></strong></div>
        	<div class="directorio-email"><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></div>
        	<?php if ($telegram !== '') { ?> 
        		<div class="directorio-telegram">
        			<a class="button tiny hollow" href="<?php echo $telegram ?>" target="_blank">
        				<i class="fa fa-paper-plane"></i> TELEGRAM
        			</a>
        		</div>
        	<?php } ?>
	      </div>
      <?php endwhile; ?>
    <?php } ?>
	</div>
<?php } ?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contacto-abajo') ) : ?>

		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>