<?php include 'header.php'; ?>
<?php $mi_pagina="conoce"; ?>

<?php wp_enqueue_script("jquery"); wp_head(); ?><?php $udesly_fe_items = udesly_set_fe_items('conoce-mas'); ?></head>
<body class="body <?php echo " ".join( ' ', get_body_class() ); ?>" udesly-page-name="conoce-mas"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
 <?php include 'menu.php'; ?> 
  
  <div id="conoce" class="seccion-menu-conoce">
    <div class="contenido-menu-conoce">

      <div class="menu-habitaciones conoce">

        <a href="#eventos"  class="link-menu-conoce" data-udy-fe="text_288152030,link_35202"><?php echo $udesly_fe_items['text_288152030']; ?></a>

        <a href="#spa" class="link-menu-conoce" data-udy-fe="text_83332,link_35203"><?php echo $udesly_fe_items['text_83332']; ?></a>

        <a href="#experiencias" class="link-menu-conoce" data-udy-fe="text_-461302208,link_35204"><?php echo $udesly_fe_items['text_-461302208']; ?></a>

      </div>
    </div>
  </div>
  <div class="seccion-eventos">
    <div id="eventos" class="contenido-eventos">
      <h1 class="titulo-eventos" id="eventos" data-udy-fe="text_288152030"><?php echo $udesly_fe_items['text_288152030']; ?></h1>
      <div class="imagen-eventos"><img src="<?php echo $udesly_fe_items['image_-291695806']->src; ?>" alt="<?php echo $udesly_fe_items['image_-291695806']->alt; ?>" srcset="<?php echo $udesly_fe_items['image_-291695806']->srcset; ?>" data-udy-fe="image_-291695806">
      </div>
      
      <div class="informacion-eventos">
        <h2 class="titulo-seccion-eventos" data-udy-fe="text_1752903248"><?php echo $udesly_fe_items['text_1752903248']; ?></h2>
        <p class="info-eventos" data-udy-fe="text_875993092,text_-1693967021"><?php echo $udesly_fe_items['text_875993092']; ?><br><br><?php echo $udesly_fe_items['text_-1693967021']; ?></p>
        <h3 class="subtitulo-eventos" data-udy-fe="text_-1126465034"><?php echo $udesly_fe_items['text_-1126465034']; ?></h3>
        <!--
        <div class="w-form">
          <form id="wf-form-Eventos-form" name="wf-form-Eventos-form" data-name="Eventos form" class="forms-eventos"><input type="text" class="label-form w-input" maxlength="256" name="nombre" data-name="nombre" placeholder="Nombre*" id="nombre" required><input type="text" class="label-form w-input" maxlength="256" name="apellido" data-name="apellido" placeholder="Apellido*" id="apellido-2" required><input type="email" class="label-form w-input" maxlength="256" name="email" data-name="email" placeholder="Mail*" id="email-3" required><input type="tel" class="label-form w-input" maxlength="256" name="telefono" data-name="telefono" placeholder="Tel&#xE9;fono*" id="telefono" required><input type="email" class="label-form largo w-input" maxlength="256" name="evento" data-name="evento" placeholder="Evento*" id="evento" required><textarea id="mensaje" name="mensaje" placeholder="Mensaje*" maxlength="5000" required data-name="mensaje" class="mensaje-form w-input"></textarea><input type="submit" value="Enviar" data-wait="Please wait..." class="submit-button w-button"></form>
          <div class="w-form-done">
            <div data-udy-fe="text_1510909345"><?php echo $udesly_fe_items['text_1510909345']; ?></div>
          </div>
          <div class="w-form-fail">
            <div data-udy-fe="text_-2081500825"><?php echo $udesly_fe_items['text_-2081500825']; ?></div>
          </div>
        </div>-->
          <?php echo do_shortcode ('[contact-form-7 id="1785" title="Eventos"]') ?>


      </div>
    </div>
  </div>
  <div class="seccion-spa">
    <div class="contenido-spa">
      <div class="linea-spa" id="spa"  ></div>
      <h1 class="titulo-spa" data-udy-fe="text_2049542603"><?php echo $udesly_fe_items['text_2049542603']; ?></h1>
      <div class="info-spa-1">
        <h2 class="subtitulo-spa" data-udy-fe="text_975901754"><?php echo $udesly_fe_items['text_975901754']; ?></h2>
        <p class="paragraph-10" data-udy-fe="text_-340250381,text_1955348377"><?php echo $udesly_fe_items['text_-340250381']; ?><br><br><?php echo $udesly_fe_items['text_1955348377']; ?></p>
        <h3 class="heading-5" data-udy-fe="text_-526068817"><?php echo $udesly_fe_items['text_-526068817']; ?></h3>

        <div id="formspa" class="">

         <!--
            <form id="email-form-spa" name="email-form" data-name="Email Form" class="forms-spa">
              <input type="text" class="label-form w-input" maxlength="256" name="nombrespa" data-name="nombre" placeholder="Nombre*" id="nombrespa" required>
              
              <input type="text" class="label-form w-input" maxlength="256" name="apellidospa" data-name="apellido" placeholder="Apellido*" id="apellidospa" required>
              
              <input type="email" class="label-form w-input" maxlength="256" name="mailspa" data-name="mail" placeholder="Mail*" id="mailspa" required>

              <input type="" class="label-form w-input" maxlength="256" name="telefonospa" data-name="telefono" placeholder="Tel&#xE9;fono*" id="telefonospa" required>
              
              <input type="date" class="label-form largo w-input" maxlength="256" name="fechaspa" data-name="fecha" placeholder="Fecha*" id="fechaspa" value="<?php echo date("Y-m-d");?>"required>

              <input type="submit" value="Enviar" data-wait="Please wait..." class="submit-button w-button">
            </form>-->

          <?php echo do_shortcode ('[contact-form-7 id="1783" title="spa"]') ?>

          
            
          
            

          <div class="w-form-done">
            <div data-udy-fe="text_1510909345"><?php echo $udesly_fe_items['text_1510909345']; ?></div>
          </div>
          <div class="w-form-fail">
            <div data-udy-fe="text_-2081500825"><?php echo $udesly_fe_items['text_-2081500825']; ?></div>
          </div>
        </div>

      </div>
      <div class="imagen-spa"><img src="<?php echo $udesly_fe_items['image_-290772285']->src; ?>" alt="<?php echo $udesly_fe_items['image_-290772285']->alt; ?>" srcset="<?php echo $udesly_fe_items['image_-290772285']->srcset; ?>" data-udy-fe="image_-290772285"></div>
    </div>
  </div>
  <div class="seccion-experiencias">
    <div class="contenido-experiencias">
      <div class="linea-experiencias" id="experiencias"></div>
      <h1 class="titulo-experiencias"  data-udy-fe="text_-461302208"><?php echo $udesly_fe_items['text_-461302208']; ?></h1>

      <div class="menu-experiencias">
        <?php
          // The Arguments
          $args = array(
              'post_type' => 'experiencias', 
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

          <a href="#" class="link-experiencias" data-filter="<?php the_title() ?>" ><?php the_title() ?></a>
    
        <?php endwhile; endif; // end of the loop. ?>
        <?php wp_reset_postdata(); ?>  

      </div>
      <div class="contendor-experiencias">
      <?php
        // The Arguments
        $args = array(
            'post_type' => 'experiencias', 
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
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $contador = $contador + 1;?> 

        
       
      <div class="experiencia ocultar <?php if ($contador == 1) echo 'mostrar' ?>" data-filter="<?php the_title() ?>"> 
        <?php if ( get_field( 'imagen_experiencia') ) { ?>
          <div class="imagen-experiencias">
            <img src="<?php the_field( 'imagen_experiencia' ); ?>">
          </div>
        <?php } ?>

        <div class="info-experiencias">

          <div class="info-experiencias-1">

            <h2 class="subtitulo-experiencias" ><?php the_field( 'titulo_de_la_experiencia' ); ?></h2>

            <h3 class="subtitulo-comida" ><?php the_field( 'titulo_de_la_descripcion' ); ?></h3>

            <p class="paragraph-12" ><?php the_field( 'descripcion' ); ?></p>

            <h3 class="subtitulo-descripcion-comida" data-udy-fe="text_-1415466502"><?php echo $udesly_fe_items['text_-1415466502']; ?></h3>

            <p class="paragraph-13" ><?php the_field( 'experiencias' ); ?></p>

          </div>

          <div class="info-experiencias-2">

            <h3 class="subtitulo-terminos-comida" data-udy-fe="text_-1842132345"><?php echo $udesly_fe_items['text_-1842132345']; ?></h3>

            <p class="paragraph-14" data-udy-fe="text_-358845721"><?php echo $udesly_fe_items['text_-358845721']; ?></p>

          </div>
        </div>
        </div>

     <?php endwhile; endif; // end of the loop. ?>
     <?php wp_reset_postdata(); ?> 

        <div class="div-volver">
          <a href="#conoce" class="link-volver" data-udy-fe="text_-1682909873,link_35203">Volver a inicio</a>
        </div>

      </div>
    </div>
  </div>
  
  <?php include 'footer.php'; ?>

  <?php include 'scripts.php'; ?>


  
<?php wp_footer(); ?><?php udesly_set_fe_configuration($udesly_fe_items, 'conoce-mas'); ?><?php endwhile; endif; ?></body></html>