<?php include 'header.php'; ?>

<?php wp_enqueue_script("jquery"); wp_head(); ?><?php $udesly_fe_items = udesly_set_fe_items('blog'); ?></head>
<body class="body <?php echo " ".join( ' ', get_body_class() ); ?>" udesly-page-name="blog">
   
 <?php include 'menu.php'; ?> 
  
  <div class="seccion-blog">
    <div class="contenido-blog">
      <div class="linea-blog"></div>
      <h1 class="titulo-blog" data-udy-fe="text_-1373478323"><?php echo $udesly_fe_items['text_-1373478323']; ?></h1>
      <div class="div-block-7">

        <div class="info-blog-1">
          
          <?php
          if ( have_posts() ) :
            while ( have_posts() ) : 
              the_post();
              //contenido del loop (template tags, html, etc)?>
          
          <div class="articulo">

            <div class="imagen-articulo">
             <?php the_post_thumbnail(); ?>

            </div>

            <h2 class="titulo-articulo" data-udy-fe="text_341111487">  <?php the_title()?> </h2>

            <div class="datos-articulo">

              <p class="fecha-articulo" data-udy-fe="text_-609343294"><?php the_date() ?></p>

              <p class="comentarios" data-udy-fe="text_-2047511618"><?php echo get_comments_number(); ?> comentarios </p>

              <p class="categoria-del-articulo" data-udy-fe="text_-358878941"><?php  foreach((get_the_category()) as $category) { echo $category->cat_name   ;} ?> </p>

            </div>

            <p class="texto-articulo" data-udy-fe="text_608872024"><?php the_content( 'Leer más > >' ); ?></p>
          </div>
         
           <?php endwhile;

          endif; ?>

            <?php $max_page = $wp_query->max_num_pages;
                  if (!$paged && $max_page >= 1) {
                      $current_page = 1;
                  }
                  else {
                      $current_page = $paged;
                  } ?>

                  

               <div class="page-nav fix paginacion-blog w-clearfix">
                 <div class="numeros-paginacion w-clearfix">
                   <div class="suf-page-nav fix "> </div>
                  
                    <span class="page-index"><?php printf(__('P&aacute;gina %1$s de %2$s'), $current_page, $max_page); ?></span>
                       <?php echo paginate_links(array(
                       "base" => add_query_arg("paged", "%#%"),
                       "format" => '',
                       "type" => "plain",
                       "total" => $max_page,
                       "current" => $current_page,
                       "show_all" => false,
                       "end_size" => 2,
                       "mid_size" => 2,
                       "prev_next" => true,
                       "next_text" => __('&rArr;'),
                       "prev_text" => __('&lArr;'),
                       )); ?>
                  </div>
                </div>
           
           
          <?php wp_reset_query(); ?>
          


        </div>



<!-- menu lateral -->
        <div class="menu-lateral-blog">
          
      
        


          
          <h2 class="titulo-menu-blog" data-udy-fe="text_1607367139"><?php echo $udesly_fe_items['text_1607367139']; ?></h2>
          <h3 class="subtitulo-menu-blog" data-udy-fe="text_-796876171"><?php echo $udesly_fe_items['text_-796876171']; ?></h3>

          <form action="/search" class="search w-form"><input type="search" class="search-input w-input" maxlength="256" name="query" placeholder="Search&#x2026;" id="search" required><input type="submit" value="." class="search-button w-button"></form>

          <h1 class="subtitulo-fechas-blog" data-udy-fe="text_686916164"><?php echo $udesly_fe_items['text_686916164']; ?></h1>

          <p class="paragraph-17" data-udy-fe="text_-1730785300,text_-457527221,text_778117118,text_-31229508,text_1032558491,text_1752548306,text_1610792076,text_778117117"><?php echo $udesly_fe_items['text_-1730785300']; ?><br><?php echo $udesly_fe_items['text_-457527221']; ?><br><?php echo $udesly_fe_items['text_778117118']; ?><br><?php echo $udesly_fe_items['text_-31229508']; ?><br><?php echo $udesly_fe_items['text_1032558491']; ?><br><?php echo $udesly_fe_items['text_1752548306']; ?><br><?php echo $udesly_fe_items['text_1610792076']; ?><br><?php echo $udesly_fe_items['text_778117117']; ?></p>
        
        

          <h2 class="subtitulo-categorias-blog" data-udy-fe="text_-1089792390"><?php echo $udesly_fe_items['text_-1089792390']; ?></h2>
          
         
          
          <p class="paragraph-19" ><?php $categories = get_categories( array(
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
             } ?></p>

      
        </div>
      </div>
    </div>
  </div>
  
  <?php include 'footer.php'; ?>
  
  <?php include 'scripts.php'; ?>

<?php wp_footer(); ?><?php udesly_set_fe_configuration($udesly_fe_items, 'blog'); ?></body></html>