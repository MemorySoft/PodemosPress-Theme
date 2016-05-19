<?php
/**
 *	CONFIGURACIÓN GLOBAL
 * 	--------------------
 */
add_action('admin_menu', 'CreaMenuConfiguracion');
add_action('admin_init', 'RegistraOpcionesConfiguracion');

function CreaMenuConfiguracion() {
  add_menu_page(
  	__("Podemos"), 
  	__("Podemos"), 
  	"manage_options", 
  	"configuracion", 
  	"ConfiguracionGlobal", 
  	"dashicons-marker", 
  	4.1
  	);
  add_submenu_page(
  	"configuracion",
  	__("Configuración"), 
  	__("Configuración"), 
  	"manage_options", 
  	"configuracion", 
  	"ConfiguracionGlobal"
  	);
}

function RegistraOpcionesConfiguracion() {


  add_option("global_banner_visibilidad","","","yes");
  add_option("global_banner_texto","","","yes");
  add_option("global_banner_texto_boton","","","yes");
  add_option("global_banner_enlace_boton","","","yes");

  get_option("global_menu_subdelegaciones_visibilidad","","","yes");

  add_option("global_analitica","","","yes");


  register_setting("opciones_globales", "global_analitica");
  
  register_setting("opciones_globales", "global_banner_visibilidad");
  register_setting("opciones_globales", "global_banner_texto");
  register_setting("opciones_globales", "global_banner_texto_boton");
  register_setting("opciones_globales", "global_banner_enlace_boton");

  register_setting("opciones_globales", "global_menu_subdelegaciones_visibilidad");
}

function ConfiguracionGlobal() {
    if (!current_user_can('manage_options'))
        wp_die(__("No tienes acceso a esta página."));
    ?> 

    <div class="wrap">
      <h1><span class="dashicons dashicons-admin-generic" style="font-size: 2rem; margin-right: 1rem;"></span>  Configuración Global <small>- Ajustes que afectan a todo el sitio web</small></h1>
    
      <hr>

      <?php settings_errors(); ?> 

      <form method="post" action="options.php">
        <?php settings_fields('opciones_globales'); ?>

	      <h2>Anuncio global</h2>
	      <p>Este contenido aparecerá en la parte superior de todas las páginas del sitio. Úsalo consecuentemente.</p>
	      <table class="form-table">
	        <tr valign="top">
	          <th scope="row">Mostrar anuncio</th>
	          <td>
	          <?php $options = get_option( "global_banner_visibilidad" ); ?>
	          <input type="checkbox" name="global_banner_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Marcar para activar el anuncio</span>
	        </tr>
	        <tr valign="top">
	          <th scope="row">Texto del anuncio</th>
	          <td><input type="text" name="global_banner_texto" size="40" value="<?php echo get_option('global_banner_texto'); ?>" /></td>
	        </tr>
	        <tr valign="top">
	          <th scope="row">Botón del anuncio</th>
	          <td><input type="text" name="global_banner_texto_boton" size="40" value="<?php echo get_option('global_banner_texto_boton'); ?>" />
	          <span class="description">Texto del botón</span>
	          <br>
	          <input type="text" name="global_banner_enlace_boton" size="40" value="<?php echo get_option('global_banner_enlace_boton'); ?>" />
	          <span class="description">Enlace del botón</span></td>
	        </tr>
	      </table>

	      <hr>

	      <h2>Menú de sub delegaciones</h2>
	      <p>Controla la visibilidad del menú del footer que contiene los enlaces a las delegaciones de ámbito territorial inferior a esta. Para agregar items al menu, dirígete a <code>Apariencia / Menús</code>. Este menú aparece en todas las páginas</p>
	      <table class="form-table">
	        <tr valign="top">
		        <th scope="row">Mostrar menú</th>
		        <td>
		        <?php $options = get_option( "global_menu_subdelegaciones_visibilidad" ); ?>
		        <input type="checkbox" name="global_menu_subdelegaciones_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Marcar para activar el menú de subdelegaciones </span>
		      </tr>
	      </table>

	      <hr>

	      <h2>Analitica de página</h2>
	      <p>Las analíticas de página ayudan a saber el número de visitantes, las páginas más vistas y otros parametros relativos a este sitio web.</p>
	      <table class="form-table">
	        <tr valign="top">
	          <th scope="row">ID de Google Analytics</th>
	          <td><input type="text" name="global_analitica" size="30" value="<?php echo get_option('global_analitica'); ?>" /></td>
	        </tr>
	      </table>

	      <p class="submit">
	        <input name="global_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
	      </p>
        
      </form>  
    </div>
    <?php
}
?>