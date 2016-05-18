<?php 
function podemospress_setup() {
	// MENUS
	add_theme_support( 'menus' );
	register_nav_menus(array(
		'menu-principal'			=> __( 'Menú principal' ),
		'menu-secundario' 		=> __( 'Menú secundario' ),
		'menu-noticias' 			=> __( 'Menú noticias' ),
		'menu-superior' 			=> __( 'Menú superior' ),
		'menu-subdelegaciones'=> __( 'Menú subdelegaciones' ),
		'menu-inferior'				=> __( 'Menú inferior' ),
	));
	function menu_principal() {
		wp_nav_menu( array(
			'theme_location' 		=> 'menu-principal',
			'container'       	=> 'nav',
			'container_class'		=> 'top-bar-menu',
			'menu_class' 				=> 'menu menu-principal menu-responsive',
			'menu_id'         	=> 'menu-primario',
			'depth'							=> '0',
			'fallback_cb' 			=> false
		));
	}
	function menu_secundario() {
		wp_nav_menu( array(
			'theme_location' 		=> 'menu-secundario',
			'menu_class' 				=> 'menu-secundario lista--simple lista--entre-lineas'
		));
	}
	function menu_noticias() {
		wp_nav_menu( array(
			'theme_location' 		=> 'menu-noticias',
			'menu_class' 				=> 'menu-noticias lista--simple lista--entre-lineas'
		));
	}
	function menu_superior() {
		wp_nav_menu( array(
			'theme_location' 		=> 'menu-superior',
			'menu_class' 				=> 'menu menu-superior menu-horizontal menu-responsive'
		));
	}
	function menu_subdelegaciones() {
		wp_nav_menu( array(
			'theme_location' 		=> 'menu-subdelegaciones',
			'menu_class' 				=> 'menu menu-subdelegaciones menu-horizontal menu-responsive'
		));
	}
	function menu_inferior() {
		wp_nav_menu( array(
			'theme_location' 		=> 'menu-inferior',
			'menu_class' 				=> 'menu menu-inferior menu-horizontal menu-responsive'
		));
	}
	
	// SOPORTE PARA TRADUCCIONES
	load_theme_textdomain( 'podemospress', get_template_directory() . '/languages' );
	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
	require_once( $locale_file );

	// SOPORTE PARA IMÁGENES DESTACADAS
	add_theme_support( 'post-thumbnails' );

	// SOPORTE PARA RSS DE LAS ENTRADAS
	add_theme_support( 'automatic-feed-links' );

	// SOPORTE PARA FONDO PERSONALIZADO
	add_theme_support( 'custom-background', array(
		'default-color' => 'fff',
	) );

	// SOPORTE PARA LOGOTIPO PERSONALIZADO
	function podemospress_theme_customizer( $wp_customize ) {
		$wp_customize->add_section( 'podemospress_logo_section' , array(
			'title' => __( 'Logotipo', 'podemospress' ),
			'priority' => 30,
			'description' => 'Añade un imagen para reemplazar el nombre del sitio por un logotipo personalizado',
		) );
		$wp_customize->add_setting( 'podemospress_logo' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'podemospress_logo', array(
			'label' => __( 'Personaliza el logotipo', 'podemospress' ),
			'section' => 'podemospress_logo_section',
			'settings' => 'podemospress_logo',
		) ) );
	}
	add_action( 'customize_register', 'podemospress_theme_customizer' );
}
add_action( 'after_setup_theme', 'podemospress_setup' );
?>