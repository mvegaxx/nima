<?php include 'header.php'; ?>
<?php $mi_pagina="contacto"; ?>

<?php wp_enqueue_script("jquery"); wp_head(); ?><?php $udesly_fe_items = udesly_set_fe_items('contacto'); ?></head>
<body class="body <?php echo " ".join( ' ', get_body_class() ); ?>" udesly-page-name="contacto"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   
 <?php include 'menu.php'; ?> 
  
  <div class="container-contacto">
    <div class="contenido-contacto">
      <div class="linea-contacto"></div>
      <h1 class="titulo-contacto" data-udy-fe="text_-502807441"><?php echo $udesly_fe_items['text_-502807441']; ?></h1>
      <div class="div-form-contacto">
        <div class="titulos-contacto">
          <h2 class="heading-9" data-udy-fe="text_-1475269287"><?php echo $udesly_fe_items['text_-1475269287']; ?></h2>
          <h3 class="heading-10" data-udy-fe="text_-1195521504"><?php echo $udesly_fe_items['text_-1195521504']; ?></h3>
        </div>

        <?php echo do_shortcode ('[contact-form-7 id="1786" title="Contacto"]') ?>
        <!--
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form"><input type="text" class="contacto-field w-input" maxlength="256" name="nombre" data-name="nombre" placeholder="Nombre*" id="nombre" required><input type="email" class="contacto-field w-input" maxlength="256" name="mail" data-name="mail" placeholder="Mail*" id="mail" required><input type="email" class="contacto-field w-input" maxlength="256" name="asunto" data-name="asunto" placeholder="Asunto*" id="asunto" required><textarea id="field" name="field" maxlength="5000" placeholder="Mensaje*" required class="textarea w-input"></textarea><input type="submit" value="Enviar" data-wait="Please wait..." class="submit-button-2 w-button"></form>
          <div class="w-form-done">
            <div data-udy-fe="text_1510909345"><?php echo $udesly_fe_items['text_1510909345']; ?></div>
          </div>
          <div class="w-form-fail">
            <div data-udy-fe="text_-2081500825"><?php echo $udesly_fe_items['text_-2081500825']; ?></div>
          </div>

        </div>-->


      </div>
      <div class="info-contacto">
        <h2 class="titulo-direccion" data-udy-fe="text_-2092620626"><?php echo $udesly_fe_items['text_-2092620626']; ?></h2>
        <p class="info-direccion" data-udy-fe="text_961859738,text_466182469,text_-95085008,text_-247849154"><?php echo $udesly_fe_items['text_961859738']; ?><br><?php echo $udesly_fe_items['text_466182469']; ?><br><?php echo $udesly_fe_items['text_-95085008']; ?><br><?php echo $udesly_fe_items['text_-247849154']; ?></p>
        <h2 class="titulo-direccion" data-udy-fe="text_900871842"><?php echo $udesly_fe_items['text_900871842']; ?></h2>
        <p class="info-direccion" data-udy-fe="text_-654486982"><?php echo $udesly_fe_items['text_-654486982']; ?></p>
        <h2 class="titulo-direccion" data-udy-fe="text_-1675148924"><?php echo $udesly_fe_items['text_-1675148924']; ?></h2>
        <p class="info-direccion" data-udy-fe="text_-2092570648"><?php echo $udesly_fe_items['text_-2092570648']; ?></p>
      </div>
    </div>
  
  </div>
  <div id="mapa" class="container-mapa"></div>
  
  <?php include 'footer.php'; ?>
  
  <?php include 'scripts.php'; ?>

<?php wp_footer(); ?><?php udesly_set_fe_configuration($udesly_fe_items, 'contacto'); ?><?php endwhile; endif; ?></body></html>