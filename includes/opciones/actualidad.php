<?php
/**
 *	PÁGINA DE ACTUALIDAD
 * 	--------------------
 */
add_action('admin_menu', 'CreaMenuActualidad');
add_action('admin_init', 'RegistraOpcionesActualidad');

function CreaMenuActualidad() {
  add_submenu_page(
    "configuracion",
  	__("Actualidad"), 
  	__("Actualidad"), 
  	"manage_options", 
  	"actualidad", 
  	"PaginaActualidad"
  	);
}

function RegistraOpcionesActualidad() {

  add_option("actualidad_carrusel_prensa_visibilidad","","","yes");
  add_option("actualidad_carrusel_noticias_visibilidad","","","yes");
  add_option("actualidad_carrusel_opinion_visibilidad","","","yes");
  add_option("actualidad_carrusel_videos_visibilidad","","","yes");


  register_setting("opciones_actualidad", "actualidad_carrusel_prensa_visibilidad");
  register_setting("opciones_actualidad", "actualidad_carrusel_noticias_visibilidad");
  register_setting("opciones_actualidad", "actualidad_carrusel_opinion_visibilidad");
  register_setting("opciones_actualidad", "actualidad_carrusel_videos_visibilidad");
}

function PaginaActualidad() {
  if (!current_user_can('manage_options'))
      wp_die(__("No tienes acceso a esta página."));
  ?>
  <div class="wrap">
    <h1><span class="dashicons dashicons-megaphone" style="font-size: 2rem; margin-right: 1rem;"></span> Página de Actualidad <small>- Opciones de configuración</small></h1>
    
    <hr>

    <?php settings_errors(); ?>

    <form method="post" action="options.php">
      <?php settings_fields('opciones_actualidad'); ?>

      <h2>Sala de prensa</h2>
      <p>Opciones de visibilidad del carrusel de artículos de la categoria Sala de prensa.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar Sala de prensa</th>
          <td>
          <?php $options = get_option( "actualidad_carrusel_prensa_visibilidad" ); ?>
          <input type="checkbox" name="actualidad_carrusel_prensa_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar la sección Sala de prensa</span>
        </tr>
      </table>

      <hr>

      <h2>Noticias</h2>
      <p>Opciones de visibilidad del carrusel de artículos de la categoria Noticias.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar Noticias</th>
          <td>
          <?php $options = get_option( "actualidad_carrusel_noticias_visibilidad" ); ?>
          <input type="checkbox" name="actualidad_carrusel_noticias_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar la sección Noticias</span>
        </tr>
      </table>

      <hr>

      <h2>Opinion</h2>
      <p>Opciones de visibilidad del carrusel de artículos de la categoria Opinion.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar Opinion</th>
          <td>
          <?php $options = get_option( "actualidad_carrusel_opinion_visibilidad" ); ?>
          <input type="checkbox" name="actualidad_carrusel_opinion_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar la sección Opinion</span>
        </tr>
      </table>

      <hr>

      <h2>Videos</h2>
      <p>Opciones de visibilidad del carrusel de artículos de la categoria Videos.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar Videos</th>
          <td>
          <?php $options = get_option( "actualidad_carrusel_videos_visibilidad" ); ?>
          <input type="checkbox" name="actualidad_carrusel_videos_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar la sección Videos</span>
        </tr>
      </table>

      <p class="submit">
      	<input name="actualidad_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
      </p>

    </form>
  </div>
<?php } ?>