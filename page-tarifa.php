<?php include 'header.php'; ?>
<?php $mi_pagina="tarifa"; ?>

<?php wp_enqueue_script("jquery"); wp_head(); ?><?php $udesly_fe_items = udesly_set_fe_items('tarifa'); ?></head>
<body class="body <?php echo " ".join( ' ', get_body_class() ); ?>" udesly-page-name="tarifa"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
 <?php include 'menu.php'; ?> 
 
  <div class="seccion-tarifa">
    <div class="contenido-tarifa">
      <div class="linea-tarifa"></div>
      <h1 class="titulo-tarifa" data-udy-fe="text_-1905454968"><?php echo $udesly_fe_items['text_-1905454968']; ?></h1>
      <h2 class="subtitulo-tarifa" data-udy-fe="text_-465801388"><?php echo $udesly_fe_items['text_-465801388']; ?></h2>
      <p class="parrafo-1-tarifa" data-udy-fe="text_1839579846,text_-1702077157,text_550272367"><?php echo $udesly_fe_items['text_1839579846']; ?><br><br><?php echo $udesly_fe_items['text_-1702077157']; ?><br><br><?php echo $udesly_fe_items['text_550272367']; ?></p>
      <h3 class="subtitulo-garantia" data-udy-fe="text_-1800390838"><?php echo $udesly_fe_items['text_-1800390838']; ?></h3>
      <p class="parrafo-1-tarifa" data-udy-fe="text_90319703,text_8205,text_-623266033,text_235704083"><?php echo $udesly_fe_items['text_90319703']; ?><br><?php echo $udesly_fe_items['text_8205']; ?><br><?php echo $udesly_fe_items['text_-623266033']; ?><br><br><?php echo $udesly_fe_items['text_235704083']; ?></p>
      <h3 class="subtitulo-garantia" data-udy-fe="text_2033414751"><?php echo $udesly_fe_items['text_2033414751']; ?></h3>
      <p class="parrafo-1-tarifa" data-udy-fe="text_-81576603,text_-465486177,text_745628863"><?php echo $udesly_fe_items['text_-81576603']; ?><br><br><?php echo $udesly_fe_items['text_-465486177']; ?><br><br><?php echo $udesly_fe_items['text_745628863']; ?></p>
    </div>
  </div>
  
  <?php include 'footer.php'; ?>
  
  <?php include 'scripts.php'; ?>

<?php wp_footer(); ?><?php udesly_set_fe_configuration($udesly_fe_items, 'tarifa'); ?><?php endwhile; endif; ?></body></html>