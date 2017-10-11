<?php 

	//Template Name: Landing Page

	get_header();

?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="item active" style="background-image: url(<?php echo get_theme_mod('slide_s1'); ?>);">
      
      <div class="carousel-caption">

          <h1><?php echo get_theme_mod('slide_texto1') ?></h1>
        
      </div>
    </div>

    <div class="item" style="background-image: url(<?php echo get_theme_mod('slide_s2'); ?>);">
      
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item" style="background-image: url(<?php echo get_theme_mod('slide_s3'); ?>);">
  
      <div class="carousel-caption">
        
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<section class="container-fluid">

            <h2 class="text-center"> Nosotros </h2>
            <hr class="header-line" />
            <div class="clearfix"></div>

          <div class="row">

            <article class="col-sm-4">
                  <div class="img-nosotros" style="background-image: url(<?php echo get_theme_mod('curso_nosotros_img1'); ?>);">

                        <div class="social">
                            <ul class="list-inline text-center social-net">
                                <li>
                                    <a class="btn btn-info" href="<?php echo get_theme_mod('curso_nosotros_enlace1'); ?>" target="_blank">
                                      <i class="fa fa-twitter fa-2x <?php
                                          echo get_theme_mod('nosotros_icono1');?> "></i>
                                      
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="">
                                      <i class="fa fa-facebook fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-warning" href="">
                                      <i class="fa fa-instagram fa-2x"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>  
                </div>
                
                <h3><?php echo get_theme_mod('curso_nosotros_titulo1'); ?></h3>
                <p>Bio</p>

                <hr class="header-line" />

                <div class="clearfix"> </div>

                <p> <?php echo get_theme_mod('curso_nosotros_parrafo1'); ?>
                </p>
                  
             

            </article>


            <article class="col-sm-4">

            <div class="img-nosotros" style="background-image: url(http://placehold.it/300x300/);">

                        <div class="social">
                            <ul class="list-inline text-center social-net">
                                <li>
                                    <a class="btn btn-info" href="">
                                      <i class="fa fa-twitter fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="">
                                      <i class="fa fa-facebook fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-warning" href="">
                                      <i class="fa fa-instagram fa-2x"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                      
                </div>

                <h3>Nombre</h3>
                <p>Bio</p>

                <hr class="header-line" />

                <div class="clearfix"> </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex necessitatibus ullam, minima omnis aspernatur, dolorem corrupti quidem nulla dicta sit. Beatae doloremque dolore tempore, eaque, labore id sapiente iure atque?
                </p>
            
                

              
            </article>
            <article class="col-sm-4">

                 <div class="img-nosotros" style="background-image: url('http://placehold.it/300x300/');">

                        <div class="social">
                            <ul class="list-inline text-center social-net">
                                <li>
                                    <a class="btn btn-info" href="">
                                      <i class="fa fa-twitter fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="">
                                      <i class="fa fa-facebook fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-warning" href="">
                                      <i class="fa fa-instagram fa-2x"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                      
                </div>

                <h3>Nombre</h3>
                <p>Bio</p>

                <hr class="header-line" />

                <div class="clearfix"> </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex necessitatibus ullam, minima omnis aspernatur, dolorem corrupti quidem nulla dicta sit. Beatae doloremque dolore tempore, eaque, labore id sapiente iure atque?
                </p>
                  

                

              
            </article>

        </div>
          
        
  
</section>

<section class="container mt30">
    
      <h2 class="text-center">Productos</h2>

      <hr class="header-line"></hr>

      <div class="clearfix"></div>


      <div class="row">
          <?php

              $args = array('post_type' => 'Productos', 'posts_per_page' => 4);

              $loop = new WP_Query($args);

              while($loop->have_posts()):$loop->the_post();
              
             echo '<article class="col-sm-3">';
                    
               echo '<div class="productos">';

                         the_post_thumbnail('full',
                        array('class' => 'img-responsive')); 

                echo  '<a href="';

                echo the_permalink();

                echo '">';

                  echo  '<h4 class="text-center">';
                 echo   the_title();
                 echo'</h4>';

                echo '</a>';

                  echo '<span class="text-center">'.the_excerpt().'</span>';
                           
                          
                 echo  '</div>';

                 echo  '</article>';   

                 

        
              endwhile;

          ?>
      </div>



</section>

<section class="container mt30">

    <article class="container">

        <h2 class="text-center">Contacto</h2>

        <hr class="header-line" />
      
      <!-- Formulario -->

      <div class="clearfix"></div>  
          
          <div class="row">

              <article class="col-sm-10 col-sm-offset-1">

                    <?php echo do_shortcode(get_theme_mod('curso_contacto_form')); ?>
              </article>
            
          </div>
      
    </article>


</section>

<section class="mapa mt40">

    <div class="mapa-content">
        <article class="titulo-mapa">

            <h2>Ubícanos</h2>
            
        </article>
    </div>


</section>



<?php
	get_footer();

?>