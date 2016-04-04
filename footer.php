  <!-- PIE DE PÁGINA -->

  <footer>
    <div class="franja fondo-gris--claro sin-margen--abajo">
      <div class="row footer">
        <div class="small-12 large-3 columns">
          <h5>NAVEGACIÓN</h5>
          <ul class="no-bullet entre-lineas">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
          </ul>
        </div>
        <div class="small-12 large-3 columns">
          <h5>NAVEGACIÓN</h5>
          <ul class="no-bullet entre-lineas">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
          </ul>
        </div>
        <div class="small-12 large-3 columns">
          <h5>PODEM ILLES</h5>
          <a href="#"><h4 class="logo-texto">Podem <br> Menorca</h4></a>
          <a href="#"><h4 class="logo-texto">Podem <br> Eivissa</h4></a>
          <a href="#"><h4 class="logo-texto">Podem <br> Mallorca</h4></a>
        </div>
        <div class="small-12 large-3 columns">
          <h2 class="logo-texto"><?php echo get_option('delegacion_nombre'); ?></h2>
          <h5><?php echo get_option('delegacion_direccion'); ?></h5>
          <p>
            <i class="fa fa-phone"></i> <?php echo get_option('delegacion_telefono'); ?><br>
            <?php echo get_option('delegacion_horario_am'); ?><br>
            <?php echo get_option('delegacion_horario_pm'); ?>
          </p>
        </div>
      </div>
    </div>

    <div class="franja--estrecha fondo-gris--oscuro sin-margen--abajo">
      <div class="row sin-margen--abajo">
        <div class="small-12 large-9 columns">
          <ul class="menu">
            <?php wp_nav_menu( array( 'theme_location' => 'menu-secundario' ) ); ?>
          </ul>
        </div>
        <div class="small-12 large-3 columns">
          <ul class="menu">
            <li><a href="<?php echo get_option('delegacion_twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php echo get_option('delegacion_facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php echo get_option('delegacion_youtube'); ?>"><i class="fa fa-youtube"></i></a></li>
            <li><a href="<?php echo get_option('delegacion_instagram'); ?>"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?php echo get_option('delegacion_analitica'); ?>', 'auto');
    ga('require', 'linkid', 'linkid.js');
    ga('send', 'pageview');

  </script>
  
  <?php wp_footer() ?>
  </body>
</html>