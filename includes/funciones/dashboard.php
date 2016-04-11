<?php 

// Insertamos el logo del cliente en el panel de administración
function podemospress_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login.css" />';
}
add_action('login_head', 'podemospress_custom_login');

// Pie de pagina del panel de Administración
function change_footer_admin() {  
    echo '&copy;2016 PODEMOS. Todos los derechos reservados - Creado por <a href="http://memorysoft.es">Memory Soft</a>';  
}  
add_filter('admin_footer_text', 'change_footer_admin');
?>