<?php include 'header.php'; ?>
<?php $mi_pagina="galeria"; ?>

<?php wp_enqueue_script("jquery"); wp_head(); ?><?php $udesly_fe_items = udesly_set_fe_items('galeria'); ?></head>
<body class="body <?php echo " ".join( ' ', get_body_class() ); ?>" udesly-page-name="galeria"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
 <?php include 'menu.php'; ?> 
  
  <div class="seccion-galeria">
    <div class="contenido-galeria">
      <div class="linea-galeria"></div>
      <h1 class="titulo-galeria" data-udy-fe="text_1468145715"><?php echo $udesly_fe_items['text_1468145715']; ?></h1>
     
      <div class="contenedor-slider-galeria">

        
        <div data-animation="slide" class="slider-3 w-slider"> 
          
        <?php
          // The Arguments
          $args = array(
              'post_type' => 'slides_galeria', 
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
          <?php if ( get_field( 'imagen') ) { ?>
            <img src="<?php the_field( 'imagen' ); ?>" />
          <?php } ?>
          <?php if ( get_field( 'video') ) { ?>
          <div class="video">
            <?php the_field( 'video' ); ?>
            </div>
          <?php } ?>



       <?php endwhile; endif; // end of the loop. ?>
        <?php wp_reset_postdata(); ?>     

        </div>    
        <div class="w-slider-arrow-left">
          <div class="icon w-icon-slider-left"></div>
        </div>
        <div class="w-slider-arrow-right">
          <div class="icon w-icon-slider-right"></div>
        </div>
        
      </div>
      <div class="info-galeria">
      <?php
        // The Arguments
        $args = array(
            'post_type' => 'slides_galeria', 
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
      
      <h2 class="subtitulo-galeria"><?php the_title() ?></h2>

       <?php endwhile; endif; // end of the loop. ?>
       <?php wp_reset_postdata(); ?>

      </div>
      <div class="info-galeria">
      <?php
        // The Arguments
        $args = array(
            'post_type' => 'slides_galeria', 
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
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
      
           <h3 class="heading-8" data-udy-fe="text_45835569"> <?php echo $contador=$contador + 1 ?> / <?php echo $the_query->post_count; ?> </h3>

       <?php endwhile; endif; // end of the loop. ?>
       <?php wp_reset_postdata(); ?>

      </div>
      
      
      
     

          
    </div>
    
  </div>

  <?php include 'footer.php'; ?>
  
  <?php include 'scripts.php'; ?>

<?php wp_footer(); ?><?php udesly_set_fe_configuration($udesly_fe_items, 'galeria'); ?><?php endwhile; endif; ?></body></html>