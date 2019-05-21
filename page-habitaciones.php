<?php include 'header.php'; ?>
<?php $mi_pagina="habitaciones"; ?>

<?php wp_enqueue_script("jquery"); wp_head(); ?><?php $udesly_fe_items = udesly_set_fe_items('habitaciones'); ?></head>
<body class="body <?php echo " ".join( ' ', get_body_class() ); ?>" udesly-page-name="habitaciones"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
 <?php include 'menu.php'; ?> 
 
  <div class="habitaciones-seccion-conoce">
    <div class="contenido-conoce-habitaciones">
      <div class="linea-conoce-habitaciones"></div>
      <h1 class="titulo-conoce-habitaciones" data-udy-fe="text_-1707496528"><?php echo $udesly_fe_items['text_-1707496528']; ?></h1>
      <div class="contenido-habitaciones-1">
        <p class="parrfo-habitaciones" data-udy-fe="text_1758757516"><?php echo $udesly_fe_items['text_1758757516']; ?></p>
        <div class="linea-habitaciones"></div>
        <h2 class="subtitulo-renta" id="habitaciones" data-udy-fe="text_1520992531"><?php echo $udesly_fe_items['text_1520992531']; ?></h2>
        <p class="paragraph-4" data-udy-fe="text_1595707655"><?php echo $udesly_fe_items['text_1595707655']; ?></p>
      </div>
      <div class="contenido-habitaciones-2">
        <h2 class="subtitulo-servicios-habitaciones" data-udy-fe="text_268836253"><?php echo $udesly_fe_items['text_268836253']; ?></h2>
        <p class="paragraph-5" data-udy-fe="text_-1378278440,text_-1293186460,text_313188314,text_-1296738725,text_226503469,text_-978033024,text_-736944654,text_1265130669,text_1133092748,text_1381688643"><?php echo $udesly_fe_items['text_-1378278440']; ?><br><?php echo $udesly_fe_items['text_-1293186460']; ?><br><?php echo $udesly_fe_items['text_313188314']; ?><br><?php echo $udesly_fe_items['text_-1296738725']; ?><br><?php echo $udesly_fe_items['text_226503469']; ?><br><?php echo $udesly_fe_items['text_-978033024']; ?><br><?php echo $udesly_fe_items['text_-736944654']; ?><br><?php echo $udesly_fe_items['text_1265130669']; ?><br><?php echo $udesly_fe_items['text_1133092748']; ?><br><?php echo $udesly_fe_items['text_1381688643']; ?></p>
      </div>
    </div>
  </div>
  <div class="seccion-habitaciones">
    <div class="contenido-habitaciones">

      <div class="menu-habitaciones">
        <?php
        // The Arguments
        $args = array(
            'post_type' => 'cuartos', 
            'post_status'      => 'publish',
            'posts_per_page'=>-1
           
        );  
        // The Query
        $the_query = new WP_Query( $args );
      ?>
      <?php
        // If we have the posts...
        if ( $the_query->have_posts() ) : 
        $contador = 0;
      ?>
      <!-- Start the loop the loop --> 
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $contador = $contador + 1; ?> 

        <a href="#" class="<?php if( $contador == 1 ) echo 'asterisco'; ?>" data-filter="<?php the_title() ?>" ><h1 class="link-menu-habitaciones" > <?php the_title() ?> </h1></a>

      <?php endwhile; endif; // end of the loop. ?>
      <?php wp_reset_postdata(); ?> 


      </div>
      <div class="contenedor-habitaciones">
      <div class="flechas">
            <div class="left-arrow-2 ">
              <div class="icon w-icon-slider-left"></div>
            </div>
            <div class="right-arrow-2 ">
              <div class="icon w-icon-slider-right"></div>
            </div>
       </div>
      <?php
        // The Arguments
        $args = array(
            'post_type' => 'cuartos', 
            'post_status'      => 'publish',
            'posts_per_page'=>-1
           
        );  
        // The Query
        $the_query = new WP_Query( $args );
      ?>
      <?php
        // If we have the posts...
        if ( $the_query->have_posts() ) : 
        $contador = 0
      ?>
      <!-- Start the loop the loop --> 
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $contador = $contador + 1; ?> 
      
      <div  class="habitacion ocultar <?php if ($contador == 1) echo 'mostrar' ?>" data-filter="<?php the_title() ?>">

    
          <div class="carrusel-habitaciones">
                  <?php if ( have_rows( 'galeria' ) ) : ?>
                                    <?php while ( have_rows( 'galeria' ) ) : the_row(); ?>
                                      <?php if ( get_sub_field( 'imagen_1') ) { ?>
                                      <div class="w-slide">
                                        <img src="<?php the_sub_field( 'imagen_1' ); ?>" />
                                      </div>
                                      <?php } ?>
                                      <?php if ( get_sub_field( 'imagen_2') ) { ?>
                                        <div class="w-slide">
                                        <img src="<?php the_sub_field( 'imagen_2' ); ?>" />
                                      </div>
                                      <?php } ?>
                                      <?php if ( get_sub_field( 'imagen_3') ) { ?>
                                        <div class="w-slide">
                                        <img src="<?php the_sub_field( 'imagen_3' ); ?>" />
                                      </div>
                                      <?php } ?>
                                      <?php if ( get_sub_field( 'imagen_4') ) { ?>
                                        <div class="w-slide">
                                        <img src="<?php the_sub_field( 'imagen_4' ); ?>" />
                                      </div>
                                      <?php } ?>
                                      <?php if ( get_sub_field( 'imagen_5') ) { ?>
                                        <div class="w-slide">
                                        <img src="<?php the_sub_field( 'imagen_5' ); ?>" />
                                      </div>
                                      <?php } ?>
                                      <?php if ( get_sub_field( 'imagen_6') ) { ?>
                                        <div class="w-slide">
                                        <img src="<?php the_sub_field( 'imagen_6' ); ?>" />
                                      </div>
                                      <?php } ?>
                                      <?php if ( get_sub_field( 'imagen_7') ) { ?>
                                        <div class="w-slide">
                                        <img src="<?php the_sub_field( 'imagen_7' ); ?>" />
                                      </div>
                                      <?php } ?>
                                      <?php if ( get_sub_field( 'imagen_8') ) { ?>
                                        <div class="w-slide">
                                        <img src="<?php the_sub_field( 'imagen_8' ); ?>" />
                                      </div>
                                      <?php } ?>
                                      <?php if ( get_sub_field( 'imagen_9') ) { ?>
                                        <div class="w-slide">
                                        <img src="<?php the_sub_field( 'imagen_9' ); ?>" />
                                      </div>
                                      <?php } ?>
                                      <?php if ( get_sub_field( 'imagen_10') ) { ?>
                                        <div class="w-slide">
                                        <img src="<?php the_sub_field( 'imagen_10' ); ?>" />
                                      </div>
                                      <?php } ?>

                                    <?php endwhile; ?>
                                  <?php endif; ?>

                               
                 </div>

             
           
      

         

          <div class="informacion-habitaciones">

            <div class="info-habitaciones-1">

              <h1 class="heading-3" data-udy-fe="text_172635657"><?php the_field( 'titulo_descriptivo' ); ?></h1>

              <p class="paragraph-6" data-udy-fe="text_1978818824"><?php the_field( 'descripcion' ); ?></p>

              <a href="https://reserve1.resnexus.com/resnexus/reservations/lodging/D8F22D4D-B123-4F2E-B1C8-9F003299CFB5" class="boton-seccion-3 w-button" data-udy-fe="text_-1225558733,link_35202"><?php echo $udesly_fe_items['text_-1225558733']; ?></a>
            </div>

            <div class="info-habitaciones-2">

              <h2 class="subtitulo-amenidades" data-udy-fe="text_1437627001"><?php echo $udesly_fe_items['text_1437627001']; ?></h2>

              <p class="paragraph-7" ><?php the_field( 'amenidades' ); ?></p>

            </div>
          </div>

          <div class="div-video-habitaciones"><?php the_field( 'video' ); ?></div>
           
          </div>

            <?php endwhile; endif; // end of the loop. ?>
           <?php wp_reset_postdata(); ?> 
           <!-- end the loop the loop --> 
          </div>

      <div class="div-volver">

        <a href="#habitaciones" class="link-volver" data-udy-fe="text_-1682909873,link_35203"><?php echo $udesly_fe_items['text_-1682909873']; ?></a></div>
    
    </div>
  </div>
  
  <?php include 'footer.php'; ?>
  
  <?php include 'scripts.php'; ?>

<?php wp_footer(); ?><?php udesly_set_fe_configuration($udesly_fe_items, 'habitaciones'); ?><?php endwhile; endif; ?></body></html>