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

  add_option("actualidad_carrusel_visibilidad","","","yes");


  register_setting("opciones_home", "actualidad_carrusel_visibilidad");
}
?>

<?php
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

      

      <p class="submit">
      	<input name="actualidad_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
      </p>

    </form>
  </div>
<?php } ?>