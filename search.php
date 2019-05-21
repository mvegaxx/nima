<?php include 'header.php'; ?>

<?php wp_enqueue_script("jquery"); wp_head(); ?><?php $udesly_fe_items = udesly_set_fe_items('search'); ?></head>
<body class="<?php echo " ".join( ' ', get_body_class() ); ?>" udesly-page-name="search">
  <div class="w-container">
    <h1 data-udy-fe="text_2122703262"><?php echo $udesly_fe_items['text_2122703262']; ?></h1>
    <form action="/search" class="w-form"><input type="search" class="w-input" autofocus="true" maxlength="256" name="query" placeholder="Search&#x2026;" id="search"><input type="submit" value="Search" class="w-button"></form>
  </div>
  
  <?php include 'scripts.php'; ?>

<?php wp_footer(); ?><?php udesly_set_fe_configuration($udesly_fe_items, 'search'); ?></body></html>