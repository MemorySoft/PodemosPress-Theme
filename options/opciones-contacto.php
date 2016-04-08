<?php
/**
 *	PÁGINA DE INICIO
 * 	----------------
 */
add_action('admin_menu', 'CreaMenuContacto');
add_action('admin_init', 'RegistraOpcionesContacto');

function CreaMenuContacto() {
  add_submenu_page(
    "configuracion",
  	__("Contacto"), 
  	__("Contacto"), 
  	"manage_options", 
  	"contacto", 
  	"PaginaContacto"
  	);
}

function RegistraOpcionesContacto() {

  add_option("home_carrusel_visibilidad","","","yes");


  register_setting("opciones_home", "home_carrusel_visibilidad");
  
}
?>

<?php
function PaginaContacto() {
  if (!current_user_can('manage_options'))
      wp_die(__("No tienes acceso a esta página."));
  ?>
  <div class="wrap">
    <h1><span class="dashicons dashicons-email-alt" style="font-size: 2rem; margin-right: 1rem;"></span> Página de Contacto <small>- Opciones de configuración</small></h1>
    
    <hr>

    <?php settings_errors(); ?>

    <form method="post" action="options.php">
      <?php settings_fields('opciones_home'); ?>

      

      <p class="submit">
      	<input name="contacto_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
      </p>

    </form>
  </div>
<?php } ?>