<?php include 'header.php'; ?>
<?php $mi_pagina="index"; ?>

<?php wp_enqueue_script("jquery"); wp_head(); ?><?php $udesly_fe_items = udesly_set_fe_items('index'); ?></head>
<body class="body <?php echo " ".join( ' ', get_body_class() ); ?>" udesly-page-name="index"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
 <?php include 'menu.php'; ?> 
  
  <div class="carrusel">
    <!-- cuadro informativo central -->
    
    <!-- sliders-->
      <div class="slides-inicio">

        <?php
          // The Arguments
          $args = array(
              'post_type' => 'slides_inicio', 
              'post_status'      => 'publish',
              'posts_per_page'=>-1
             
          );  
          // The Query
          $the_query = new WP_Query( $args );
        ?>
        <?php
          // If we have the posts...
          if ( $the_query->have_posts() ) : 
        ?>
        <!-- Start the loop the loop --> 
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
        
        <div class="slides-post">
          <div class="contenido-slide">
            <div class="info-slider">
              <h1 class="titulo-info-slider" data-udy-fe="text_1164878318"><?php the_title() ?></h1>
              <h2 class="subtitulo-info-slider" data-udy-fe="text_-1018892188,text_-1083198588"><?php the_field( 'texto_del_slide' ); ?></h2>
              <?php $boton = get_field( 'boton' ); ?>
              <?php if ( $boton ) { ?>
                <a href="<?php echo $boton; ?>" class="boton-info-slider w-button" data-udy-fe="text_2047410606,link_35202"><?php the_field( 'texto_del_boton' ); ?></a>
              <?php } ?></a>
            </div>
          </div>
        

          <div class="slide-inicio">
            <?php if ( get_field( 'slide_inicio') ) { ?>
                <img src="<?php the_field( 'slide_inicio' ); ?>" />
            <?php } ?>
          </div>
        </div>
        
        <?php endwhile; endif; // end of the loop. ?>
       <?php wp_reset_postdata(); ?>  
       

      </div>
     
      <div class="right-arrow w-slider-arrow-left">
        <div class="icon w-icon-slider-left"></div>
      </div>
      
      <div class="right-arrow w-slider-arrow-right">
        <div class="icon w-icon-slider-right"></div>
      </div>
    
   
  </div>




  <div class="seccion-bienvenido">
    <div class="texto-bienvenido">
      <h1 class="titulo-bienvenido" data-udy-fe="text_821004169"><?php echo $udesly_fe_items['text_821004169']; ?></h1>
      <p class="parrafo-bienvenido" data-udy-fe="text_11390773"><?php echo $udesly_fe_items['text_11390773']; ?></p>
      <div class="linea-bienvenido"></div>
    </div>
  </div>
  <div class="seccion-3-inicio">
    <div class="contenido-seccion-3 w-clearfix">
      <div class="titulo-seccion-3">
        <h1 class="titilo-encontrarse" data-udy-fe="text_-346773515"><?php echo $udesly_fe_items['text_-346773515']; ?></h1>

        <a href="https://reserve1.resnexus.com/resnexus/reservations/lodging/D8F22D4D-B123-4F2E-B1C8-9F003299CFB5" class="boton-seccion-3 w-button" data-udy-fe="text_-1225558733,link_35203"><?php echo $udesly_fe_items['text_-1225558733']; ?></a>
      </div>
      
      <div class="imagen-1-hotel"><img src="<?php echo $udesly_fe_items['image_-449981753']->src; ?>" alt="<?php echo $udesly_fe_items['image_-449981753']->alt; ?>" class="img-hotel-1" srcset="<?php echo $udesly_fe_items['image_-449981753']->srcset; ?>" data-udy-fe="image_-449981753"></div>
      <div class="imagen-hotal-2"><img src="<?php echo $udesly_fe_items['image_-449058232']->src; ?>" alt="<?php echo $udesly_fe_items['image_-449058232']->alt; ?>" class="img-hotel-2" srcset="<?php echo $udesly_fe_items['image_-449058232']->srcset; ?>" data-udy-fe="image_-449058232"></div>
      <div class="texto-seccion-3">
        <p class="paragraph" data-udy-fe="text_672805448"><?php echo $udesly_fe_items['text_672805448']; ?></p>

        <a href="<?php echo udesly_get_permalink_by_slug('habitaciones'); ?>" class="link-habitaciones" data-udy-fe="text_-226679338,link_35204"><?php echo $udesly_fe_items['text_-226679338']; ?></a>
      </div>
    
    </div>
  </div>
  <div class="seccion-reserva-inicio">
    <div class="contenido-seccion-reserva">
      <h1 class="titulo-reserva-inicio" data-udy-fe="text_36860094,text_-619322808"><?php echo $udesly_fe_items['text_36860094']; ?><br><?php echo $udesly_fe_items['text_-619322808']; ?></h1>
      <p class="paragraph-2" data-udy-fe="text_1839579846"><?php echo $udesly_fe_items['text_1839579846']; ?>

      <a href="<?php echo udesly_get_permalink_by_slug('conoce-mas'); ?>" class="link" data-udy-fe="link_35205"> <span class="text-span" data-udy-fe="text_1698952042"><?php echo $udesly_fe_items['text_1698952042']; ?></span></a></p>

      <a href="https://reserve1.resnexus.com/resnexus/reservations/lodging/D8F22D4D-B123-4F2E-B1C8-9F003299CFB5" class="boton-seccion-3 w-button" data-udy-fe="text_-1225558733,link_35206"><?php echo $udesly_fe_items['text_-1225558733']; ?></a>
    </div>
  
  </div>

  <!-- reconocimientos-->

  <div class="seccion-awards-inicio">
    <div class="contenido-awards-inicio">
      <h1 class="titulo-awards-inicio" data-udy-fe="text_-1321281238"><?php echo $udesly_fe_items['text_-1321281238']; ?></h1>
      <div class="premios-inicio">

        <?php
          // The Arguments
          $args = array(

              'post_type' => 'awards', 
              'post_status'      => 'publish',
              'posts_per_page'=>-1
          );  
          // The Query
          $the_query = new WP_Query( $args );
        ?>
        <?php
          // If we have the posts...
          if ( $the_query->have_posts() ) : 
        ?>
        <!-- Start the loop the loop --> 
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 

        <div class="premio-inicio">
          <?php if ( get_field( 'imagen_premio') ) { ?>
            <img src="<?php the_field( 'imagen_premio' ); ?>"   class="image-6"  />
          <?php } ?>
        </div>

         <?php endwhile; endif; // end of the loop. ?>
              <?php wp_reset_postdata(); ?> 

        

      </div>
    </div>
  </div>


 <!-- reviews-->
 
  <div class="seccion-reviews-inicio">
    <div class="contenido-reviws-inicio">
      <h1 class="titulo-seccion-reviews" data-udy-fe="text_1093952052"><?php echo $udesly_fe_items['text_1093952052']; ?></h1>

      <div class="slides-comentarios">

        <?php
          // The Arguments
          $args = array(

              'post_type' => 'reviews', 
              'post_status'      => 'publish',
              'posts_per_page'=>-1
          );  
          // The Query
          $the_query = new WP_Query( $args );
        ?>
        <?php
          // If we have the posts...
          if ( $the_query->have_posts() ) : 
        ?>
        <!-- Start the loop the loop --> 
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
        
        <div class="div-comentarios">
          <a href="https://www.tripadvisor.com.mx/Hotel_Review-g150800-d11706849-Reviews-Nima_Local_House_Hotel-Mexico_City_Central_Mexico_and_Gulf_Coast.html" target="_blank">
          <div class="comentario">
            <h2 class="titulo-comentario" data-udy-fe="text_61053648"><?php the_title(); ?></h2>
            <p class="texto-comentario" data-udy-fe="text_691814302"><?php the_content( ); ?></p>
            <div class="div-block-2"></div>
          </div></a>
          <div class="persona-comentario w-clearfix">
            <div class="foto-comentario">
               <?php if ( get_field( 'foto_de_perfil') ) { ?>
                  <img src="<?php the_field( 'foto_de_perfil' ); ?>" alt="<?php echo $udesly_fe_items['image_-1969744786']->alt; ?>" class="foto-persona" srcset="<?php echo $udesly_fe_items['image_-1969744786']->srcset; ?>" data-udy-fe="image_-1969744786">
              <?php } ?>
            </div>
            <div class="datos-persona">
              <h1 class="nombre-comentario" data-udy-fe="text_-823842866"><?php the_field( 'nombre' ); ?></h1>
              <h2 class="ver-en-el-sitio" data-udy-fe="text_1886247255"><?php echo $udesly_fe_items['text_1886247255']; ?>
              <a href="https://www.tripadvisor.com.mx/Hotel_Review-g150800-d11706849-Reviews-Nima_Local_House_Hotel-Mexico_City_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="link-ver-en-el-sitio" data-udy-fe="text_2090920549,link_35207"><?php echo $udesly_fe_items['text_2090920549']; ?></a></h2>
            </div>
          </div>
        
        </div>
        

        <?php endwhile; endif; // end of the loop. ?>
        <?php wp_reset_postdata(); ?> 
      </div>


    </div>
  </div>


 <!-- Prensa-->

  <div class="seccion-prensa-inicio">
    <div class="contenido-prensa-inicio">
      <h1 class="titulo-prensa" data-udy-fe="text_-1896235559"><?php echo $udesly_fe_items['text_-1896235559']; ?></h1>

      <div class="div-logos-prensa">

        <?php
          // The Arguments
          $args = array(

              'post_type' => 'logos_prensa', 
              'post_status'      => 'publish',
              'posts_per_page'=>-1
          );  
          // The Query
          $the_query = new WP_Query( $args );
        ?>
        <?php
          // If we have the posts...
          if ( $the_query->have_posts() ) : 
        ?>
        <!-- Start the loop the loop --> 
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
        
        <?php if ( get_field( 'logo_prensa') ) { ?>
        
          <div class="logo-prensa"> <img src="<?php the_field( 'logo_prensa' ); ?>" alt="<?php echo $udesly_fe_items['image_1411544635']->alt; ?>" class="vidanta" ></div>
           <?php } ?>

        <?php endwhile; endif; // end of the loop. ?>
        <?php wp_reset_postdata(); ?> 

      </div>
    </div>
  </div>




  <div class="seccion-instagram-inicio">
    <div class="contenido-seccion-instagram">
      <h1 class="siguenos-en-instragram" data-udy-fe="text_1342987098"><?php echo $udesly_fe_items['text_1342987098']; ?><a href="<?php echo $udesly_fe_items['link_35208']; ?>" class="link-instagram" data-udy-fe="text_-922540139,link_35208"><?php echo $udesly_fe_items['text_-922540139']; ?></a></h1>
      <div class="div-ftos-instagram">
      <?php echo do_shortcode('[instagram-feed]'); ?>
      
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?> 
 
  <?php include 'scripts.php'; ?>

<?php wp_footer(); ?><?php udesly_set_fe_configuration($udesly_fe_items, 'index'); ?><?php endwhile; endif; ?></body></html>