<!DOCTYPE html>
<html class="no-js" itemscope itemtype="http://schema.org/Article" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

	<!-- Iconos -->
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">

  <!-- RSS -->
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0 Feed para los artículos de Código Nuevo" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3 - <?php bloginfo('name'); ?> " href="<?php bloginfo('atom_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="Comments Feed - para todos los comentarios de Código Nuevo" href="<?php bloginfo('comments_rss2_url'); ?>" />

	<!-- Estilos críticos -->
  <style>
		/* Inserta aquí los estilo críticos que deben cargar al inicio */
  </style>

  <!-- Estilos -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Istok+Web:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" /> 
  
  <!-- Twitter card -->
  <meta name="twitter:widgets:csp" content="on">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:url" content="<?php bloginfo('url'); ?>">
  <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
  <meta name="twitter:description" content="<?php echo bloginfo( 'description' ); ?>">
  <meta name="twitter:image" content="<?php echo esc_url( get_theme_mod( 'new_code_logo' ) ); ?>">

  <!-- Google + -->
  <meta itemprop="name" content="<?php bloginfo('name'); ?>">
  <meta itemprop="description" content="<?php echo bloginfo( 'description' ); ?>">
  <meta itemprop="image" content="<?php echo esc_url( get_theme_mod( 'new_code_logo' ) ); ?>">

  <!-- Scripts -->
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/what-input.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>

  <!-- Cabeceras insertadas por WordPress -->
  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

	<!-- CABECERA -->

  <div class="franja--estrecha fondo-gris--claro sin-margen--abajo">
    <div class="row sin-margen--abajo">
      <div class="small-12 large-3 large-offset-9 columns">
        <ul class="menu selector-idioma">
          <li><a href="">Castellano</a></li>
          <li><a href="">Català</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="top-bar">
    <div class="row">
      <div class="small-12 columns">
        <div class="top-bar-title">
          <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
            <span class="menu-icon dark" data-toggle></span>
          </span>
          <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
				    <div class='site-logo'>
				      <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
				      	<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
				      </a>
				    </div>
					<?php else : ?>
			    		<strong>
			    			<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
			    				<?php bloginfo( 'name' ); ?>
			    			</a>
			    		</strong>
					<?php endif; ?>
        </div>
        <div id="responsive-menu">
          <div class="top-bar-right">
            <ul class="menu">
              <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <?php 
    $breadcrumb_ver = get_option('home_breadcrumb_visibilidad');
    if ($breadcrumb_ver == 1 && is_home()) {
    ?>
    <div class="row">
      <div class="hide-for-small medium-12 columns">
        <nav aria-label="Estás aquí:" role="navigation">
          <?php the_breadcrumb(); ?>
        </nav>
      </div>
    </div>
  <?php } ?>