<?php /* Template Name: Instituciones */ ?>
<?php include('includes/opciones/variables.php'); ?>
<?php get_header(); ?>
<?php
  // Generamos los enlaces a la categoria
  $instituciones_id = get_cat_ID( 'instituciones' );
  $instituciones_link = get_category_link( $instituciones_id );
?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('instituciones-arriba') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- NOTICIAS INSTITUCIONALES-->

<?php 
  if ($carrusel_instituciones_ver == 1) {
  ?>    
	<div class="row">
	  <div class="small-12 columns">
	  	<h5 class="titulo texto-centrado">Actualidad 
				<?php 
	    	if ($institucion !== '') { ?>
	    		en el <?php echo $institucion ?>
	    	<?php } ?>
	    </h5>
	  </div>
	  <div class="large-12 columns">
	    <div class="carrusel -carrusel-tres-items--paginacion sin-margen--abajo">
        <?php 
          $args=array(
          'post_type' => 'post',
          'category_name' => 'instituciones',
          'posts_per_page'=> 6,
        );
        $instituciones_item = new WP_Query($args);
        if( $instituciones_item->have_posts() ) { ?>
          <?php  while ( $instituciones_item->have_posts() ) : $instituciones_item->the_post(); ?>

            <div class="item">
              <div class="articulo stack-for-small">
                <div class="articulo-seccion articulo-seccion--vertical">
                  <div class="articulo-imagen">
                    <a class="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                  </div>
                </div>
                <div class="articulo-seccion articulo-seccion--vertical">
                  <a class="<?php the_permalink(); ?>" title="leer <?php the_title(); ?>"><h4 class="articulo-titulo"><?php the_title(); ?></h4></a>
                  <p class="articulo-extracto"><?php the_excerpt(); ?></p>
                </div>
              </div>
            </div>

          <?php endwhile; ?>
        <?php } ?>
      </div>
      <p class="texto-centrado">
        <a href="<?php echo esc_url( $prensa_link ); ?>" title="ir a la página de las publicaciones de la categoría Instituciones">ver los artículos en Instituciones</a>
      </p>
	  </div>
	</div>
<?php } ?>

<!-- ACTIVIDAD INSTITUCIONAL -->

<?php 
  if ($actividad_ver == 1) {
  ?>
	<div class="row collapse">
	  <div class="small-12 columns">
	    <h5 class="titulo texto-centrado">Actividad de los cargos 
			<?php 
    	if ($institucion !== '') { ?>
    		en el <?php echo $institucion ?>
    	<?php } ?>
    </h5>
	  </div>
	  <div class="medium-2 columns">
	    <ul class="tabs vertical" id="example-vert-tabs" data-tabs>
	      <li class="tabs-title is-active"><a href="#presidencia" aria-selected="true">Presidencia</a></li>
	      <li class="tabs-title"><a href="#hacienda">Hacienda</a></li>
	      <li class="tabs-title"><a href="#empleo">Empleo</a></li>
	      <li class="tabs-title"><a href="#educacion">Educación</a></li>
	      <li class="tabs-title"><a href="#sanidad">Sanidad</a></li>
	      <li class="tabs-title"><a href="#infraestructuras">Infraestructuras</a></li>
	      <li class="tabs-title"><a href="#desarrollo-rural">Desarrollo rural</a></li>
	      <li class="tabs-title"><a href="#Peticiones">peticiones</a></li>
	      <li class="tabs-title"><a href="#Reglamento">reglamento</a></li>
	      <li class="tabs-title"><a href="#Ente público">Ente público</a></li>
	      <li class="tabs-title"><a href="#organizacion">Organización</a></li>
	    </ul>
	    </div>
	    <div class="medium-10 columns">
	    <div class="tabs-content vertical" data-tabs-content="example-vert-tabs">
	      <div class="tabs-panel is-active" id="presidencia">
	        <h6>Presidencia y participación ciudadana</h6>
	        <table class="scroll stack">
	          <thead>
	            <tr>
	              <th width="200">Table Header</th>
	              <th>Table Header</th>
	              <th width="150">Table Header</th>
	              <th width="150">Table Header</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	          </tbody>
	        </table>  
	      </div>
	      <div class="tabs-panel" id="hacienda">
	        <h6>Hacienda y sector público</h6>
	        <table class="scroll stack">
	          <thead>
	            <tr>
	              <th width="200">Table Header</th>
	              <th>Table Header</th>
	              <th width="150">Table Header</th>
	              <th width="150">Table Header</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	          </tbody>
	        </table>  
	      </div>
	      <div class="tabs-panel" id="empleo">
	        <h6>Empleo, industria y turismo</h6>
	        <table class="scroll stack">
	          <thead>
	            <tr>
	              <th width="200">Table Header</th>
	              <th>Table Header</th>
	              <th width="150">Table Header</th>
	              <th width="150">Table Header</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	          </tbody>
	        </table> 
	      </div>
	      <div class="tabs-panel" id="educacion">
	        <h6>Educación y cultura</h6>
	        <table class="scroll stack">
	          <thead>
	            <tr>
	              <th width="200">Table Header</th>
	              <th>Table Header</th>
	              <th width="150">Table Header</th>
	              <th width="150">Table Header</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	          </tbody>
	        </table> 
	      </div>
	      <div class="tabs-panel" id="sanidad">
	        <h6>Sanidad</h6>
	        <table class="scroll stack">
	          <thead>
	            <tr>
	              <th width="200">Table Header</th>
	              <th>Table Header</th>
	              <th width="150">Table Header</th>
	              <th width="150">Table Header</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	            <tr>
	              <td>Content Goes Here</td>
	              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
	              <td>Content Goes Here</td>
	              <td>Content Goes Here</td>
	            </tr>
	          </tbody>
	        </table> 
	      </div>
	    </div>
	  </div>
	</div>
<?php } ?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('instituciones-enmedio') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- CARGOS ELECTOS -->

<div class="row">
  <div class="small-12 columns">
    <h5 class="titulo texto-centrado">Relacion de cargos electos
			<?php 
    	if ($institucion !== '') { ?>
    		en el <?php echo $institucion ?>
    	<?php } ?>
    </h5>
  </div>
  
  <div class="item small-12 medium-2 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-2 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-2 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-2 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-2 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-2 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-2 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-2 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-2 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-2 columns end">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-2 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-2 columns">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
  <div class="item small-12 medium-2 columns end">
    <div class="articulo stack-for-small">
      <div class="articulo-seccion articulo-seccion--vertical">
        <div class="articulo-imagen circular">
          <img class="articulo-imagen circular" src="http://placehold.it/130x130" alt="">
        </div>
      </div>
      <div class="articulo-seccion articulo-seccion--vertical">
        <h5 class="articulo-titulo">Lorem ipsum dolor</h5>
        <p class="articulo-extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-envelope"></i></a>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('instituciones-abajo') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- RECORDATORIO -->

<?php 
if ($callout_instituciones_ver == 1) { ?>
  <div class="row">
    <div class="small-12 columns">
      <div class="large callout fondo-gris--claro">
        <h4><?php echo $callout_instituciones_titulo ?></h4>
        <p><?php echo $callout_instituciones_texto ?></p>
        
        <?php 
        if ($callout_instituciones_boton !== '' && $callout_instituciones_enlace !== '') { ?>
          <a href="<?php echo $callout_instituciones_enlace ?>" class="button">
            <?php echo $callout_instituciones_boton ?>
          </a>
        <?php } ?>

      </div>
    </div>
  </div>
<?php } ?>

<?php get_footer(); ?>