<?php /* Template Name: Miembros */ ?>
<?php include('/options/variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO | WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('miembros-arriba') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- CONTENIDO | SECRETARÍA GENERAL -->

<div class="row">
  <div class="small-12 medium-8 large-centered columns">
    <div class="miembro stack-for-small">
      <div class="miembro-seccion">
        <div class="thumbnail circular">
          <img class="miembro-imagen circular" src="<?php echo $sg_imagen ?>" alt="">
        </div>
      </div>
      <div class="miembro-seccion">
        <h4 class="miembro-titulo">Secretaría General 
					<?php 
		    	if ($region !== '') { ?>
		    		<br>de <?php echo $region ?>
		    	<?php } ?>
        </h4>
        <p class="miembro-extracto"><?php echo $sg_bio ?></p>
        <a href="<?php echo $sg_enlace_boton ?>" class="small success button">
        	<i class="fa fa-download"></i> 
        	<?php echo $sg_texto_boton ?>
        </a>
        <hr>
        <ul class="menu">
          <li><a href="<?php echo $sg_twitter ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a href="<?php echo $sg_facebook ?>"><i class="fa fa-facebook"></i></a></li>
          <li><a href="mailto:<?php echo $sg_email ?>"><i class="fa fa-envelope"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- CONTENIDO | CONSEJO CIUDADANO -->

<?php 
if ($cc_ver == 1) { ?>
	<div id="cc" class="row">
	  <div class="small-12 columns">
	    <h5 class="titulo texto-centrado">Consejo Ciudadano 
				<?php 
	    	if ($region !== '') { ?>
	    		de <?php echo $region ?>
	    	<?php } ?>
	    </h5>
	  </div>
	  <div class="small-12 columns texto-centrado">
	    <p><?php echo $cc_descripcion ?></p>
	    <p>
		    <?php 
				if ($cc_enlace_boton_actas !== '' && $cc_texto_boton_actas !== '') { ?>
		      <a href="<?php echo $cc_enlace_boton_actas ?>" class="small success button">
		      	<i class="fa fa-download"></i> 
		      	<?php echo $cc_texto_boton_actas ?>
		      </a>
		    <?php } 

				if ($cc_enlace_boton_reglamento !== '' && $cc_texto_boton_reglamento !== '') { ?>
	      <a href="<?php echo $cc_enlace_boton_reglamento ?>" class="small success button">
	      	<i class="fa fa-download"></i> 
	      	<?php echo $cc_texto_boton_reglamento ?>
	      </a>
				<?php } ?>

	      <!-- <a href="contacto.html" class="small button">Contacto</a> -->
	    </p>
	  </div>

	  <div class="small-12 columns">
	    <div class="-carrusel-tres-items--navegacion">       
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
<?php } ?>

<!-- CONTENIDO | COMISIÓN DE GARANTIAS -->

<?php 
if ($cg_ver == 1) { ?>
	<div id="cgd" class="row">
	  <div class="small-12 columns">
	    <h5 class="titulo texto-centrado">Comisión de Garantias Democráticas 
				<?php 
	    	if ($region !== '') { ?>
	    		de <?php echo $region ?>
	    	<?php } ?>
	    </h5>
	  </div>
	  <div class="small-12 columns texto-centrado">
	    <p><?php echo $cc_descripcion ?></p>
	    <p>
		    <?php 
				if ($cg_enlace_boton_actas !== '' && $cg_texto_boton_actas !== '') { ?>
		      <a href="<?php echo $cg_enlace_boton_actas ?>" class="small success button">
		      	<i class="fa fa-download"></i> 
		      	<?php echo $cg_texto_boton_actas ?>
		      </a>
		    <?php } 

				if ($cg_enlace_boton_reglamento !== '' && $cg_texto_boton_reglamento !== '') { ?>
	      <a href="<?php echo $cg_enlace_boton_reglamento ?>" class="small success button">
	      	<i class="fa fa-download"></i> 
	      	<?php echo $cg_texto_boton_reglamento ?>
	      </a>
				<?php } ?>

	      <!-- <a href="contacto.html" class="small button">Contacto</a> -->
	    </p>
	  </div>

	  <div class="small-12 columns">
	    <div class="-carrusel-tres-items--navegacion">       
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="item">
	        <div class="miembro stack-for-small">
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <div class="thumbnail circular">
	              <img class="miembro-imagen circular" src="http://placehold.it/200x200" alt="">
	            </div>
	          </div>
	          <div class="miembro-seccion miembro-seccion--vertical">
	            <h4 class="miembro-titulo">Lorem ipsum dolor sit amet</h4>
	            <p class="miembro-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, corporis. Unde eveniet facilis facere nobis deleniti voluptatem, quibusdam harum dolor illum labore ipsum.</p>
	            <hr>
	            <a href=""><i class="fa fa-twitter"></i></a>
	            <a href=""><i class="fa fa-facebook"></i></a>
	            <a href=""><i class="fa fa-envelope"></i></a>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
<?php } ?>

<!-- CONTENIDO | WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('miembros-abajo') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- CONTENIDO | RECORDATORIO -->

<?php 
if ($callout_miembros_ver == 1) { ?>
	<div class="row">
	  <div class="small-12 columns">
	    <div class="large callout texto-centrado fondo-gris--claro">
	      <h4><?php echo $callout_miembros_titulo ?></h4>
				<p><?php echo $callout_miembros_texto ?></p>
				
				<?php 
			  if ($callout_miembros_boton !== '' && $callout_miembros_enlace !== '') { ?>
    			<a href="<?php echo $callout_miembros_enlace ?>" class="button">
    				<?php echo $callout_miembros_boton ?>
    			</a>
				<?php	} ?>

	    </div>
	  </div>
	</div>
<?php } ?>

<?php get_footer(); ?>