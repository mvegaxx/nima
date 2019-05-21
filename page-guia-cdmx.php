<?php include 'header.php'; ?>
<?php $mi_pagina="cdmx"; ?>

<?php wp_enqueue_script("jquery"); wp_head(); ?><?php $udesly_fe_items = udesly_set_fe_items('guia-cdmx'); ?></head>
<body class="body <?php echo " ".join( ' ', get_body_class() ); ?>" udesly-page-name="guia-cdmx"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
 <?php include 'menu.php'; ?> 
  
  <div class="seccion-mx">
    <div class="contenido-mx">
      <div class="linea-mx div-block-5"></div>
      <h1 class="titulo-mx" data-udy-fe="text_1676999353"><?php echo $udesly_fe_items['text_1676999353']; ?></h1>
      <p class="info-mx" data-udy-fe="text_13762841,text_1209917270"><?php echo $udesly_fe_items['text_13762841']; ?><br><br><?php echo $udesly_fe_items['text_1209917270']; ?></p>
      <h2 class="subtitulo-mx" data-udy-fe="text_914380574"><?php echo $udesly_fe_items['text_914380574']; ?></h2>

      <div class="menu-habitaciones mx">

      <a href="#" class="link-mx asterisco" data-filter="Restaurantes">Restaurantes</a>
      <a href="#" class="link-mx" data-filter="Galerias">Galerias</a>
      <a href="#" class="link-mx" data-filter="Museos">Museos</a>
      <a href="#" class="link-mx" data-filter="Arqueologicos">Arqueologicos</a>
        

      <!--
        <?php $categories = get_categories( array(
             'orderby' => '',
             'parent'  => 0,
             'hide_empty'       => 0,
         ) );
        $contador=0;
         foreach ( $categories as $category ) {
           
           if ($contador >= 0) {
             printf( '<a href="#" class="link-mx" data-filter="%2$s">%3$s</a>',
             esc_url( get_category_link( $category->term_id ) ),
             esc_html( $category->name ),
             esc_html( $category->name )
           );# code...
           };
           $contador= $contador +1;
         } ?>
        -->
       
        
        
      </div>

      <div class="container-sitios-mx">

          <?php
          // The Arguments
          $args = array(
              'post_type' => 'lugares', 
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


          <div class="sitio-mx ocultar <?php  foreach((get_the_category()) as $category) { echo $category->cat_name;}?> " data-filter="<?php  foreach((get_the_category()) as $category) { echo $category->cat_name;} ?>">
            
            
            <div class="foto-sitio-mx">
              <?php if ( get_field( 'imagen') ) { ?>
                <img src="<?php the_field( 'imagen' ); ?>">
              <?php } ?>

              <?php $link = get_field( 'link' ); ?>
              <?php if ( $link ) { ?>
                <a class="link-sitios" href="<?php echo $link; ?>" target="_blank"></a>
              <?php } ?>
            </div>
            
            <p class="lugar-sitio-mx" data-udy-fe="text_25078285,text_-1711029021"><?php the_title(); ?></p>
            
            <p class="ciudad-sitio-mx" data-udy-fe="text_-1036441902"><?php the_field( 'lugar' ); ?></p>
          
          </div>
        <?php endwhile; endif; // end of the loop. ?>
        <?php wp_reset_postdata(); ?> 


       
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
  
  <?php include 'scripts.php'; ?>

<?php wp_footer(); ?><?php udesly_set_fe_configuration($udesly_fe_items, 'guia-cdmx'); ?><?php endwhile; endif; ?></body></html>