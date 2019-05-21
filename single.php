<?php include 'header.php'; ?>
<?php $mi_pagina="articulo"; ?>

<?php wp_enqueue_script("jquery"); wp_head(); ?><?php $udesly_fe_items = udesly_set_fe_items('articulo'); ?></head>
<body class="body <?php echo " ".join( ' ', get_body_class() ); ?>" udesly-page-name="articulo">

      
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 
 <?php include 'menu.php'; ?> 
  
  <div class="container-articulo">
    <div class="contenido-articulo">
      <div class="linea-articulo"></div>
      <h1 class="titulo-blog-articulo" data-udy-fe="text_-1373478323"><?php echo $udesly_fe_items['text_-1373478323']; ?></h1>
      

      <div class="articulo-completo">
        
        

        <div class="imagen-rincipal-articulo">
          <?php the_post_thumbnail(); ?>
        </div>

        <h2 class="subtitulo-artidulo" data-udy-fe="text_149582703"> <?php the_title() ?></h2>

        <div class="datos-articulos">

          <p class="fecha-articulo" data-udy-fe="text_-609343294"><?php the_date() ?></p>
          <p class="comentarios" data-udy-fe="text_-764086078"> <?php echo get_comments_number(); ?> comentarios </p>
          <p class="categoria-del-articulo" data-udy-fe="text_311972067"><?php  foreach((get_the_category()) as $category) { echo $category->cat_name ;} ?> </p>

        </div>

         <?php the_content()?>

        <div class="paginacion-articulo w-clearfix">
          <a href="<?php echo $udesly_fe_items['link_35202']; ?>" class="link-2" data-udy-fe="text_1640621857,link_35202"><?php echo $udesly_fe_items['text_1640621857']; ?></a>
          <a href="<?php echo $udesly_fe_items['link_35203']; ?>" class="link-3" data-udy-fe="text_-1830966966,link_35203"><?php echo $udesly_fe_items['text_-1830966966']; ?></a>
        </div>

      
   

        <div class="linea-paginacion-articulo"></div>

        <h3 class="titulo-cmpartir" data-udy-fe="text_-598594107"><?php echo $udesly_fe_items['text_-598594107']; ?></h3>
        
        <div class="compartir-redes">
        
       
            
            <a class="redes-articulo" href="https://www.facebook.com/HotelNima/" target="_blank">
              <img src="<?php echo $udesly_fe_items['image_-1195741160']->src; ?>" alt="<?php echo $udesly_fe_items['image_-1195741160']->alt; ?>" class="image-13" >
            </a>
     
         
       
            <a class="redes-articulo" href="https://twitter.com/share?text=I%20am%20Nima&url=https://wp.me/p8zziG-f5" target="_blank">
              <img src="<?php echo $udesly_fe_items['image_2024677759']->src; ?>" alt="<?php echo $udesly_fe_items['image_2024677759']->alt; ?>" class="image-13" srcset="<?php echo $udesly_fe_items['image_2024677759']->srcset; ?>" data-udy-fe="image_2024677759">
            </a>
        

        
     
            <a class="redes-articulo" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fnimalocalhousehotel.com%2Fi-am-nima%2F&description=I%20am%20Nima&media=https%3A%2F%2Fi0.wp.com%2Fnimalocalhousehotel.com%2Fwp-content%2Fuploads%2F2017%2F03%2FFachada-nima-local-house-hotel.jpg%3Ffit%3D705%252C470" target="_blank">
              <img src="<?php echo $udesly_fe_items['image_-1144879765']->src; ?>" alt="<?php echo $udesly_fe_items['image_-1144879765']->alt; ?>" class="image-13" srcset="<?php echo $udesly_fe_items['image_-1144879765']->srcset; ?>" data-udy-fe="image_-1144879765">
            </a>
         

         
            <a class="redes-articulo" href="https://www.tumblr.com/share/link?url=http%3A%2F%2Fnimalocalhousehotel.com%2Fi-am-nima%2F&name=I%20am%20Nima&description=Discover%20elegance%20and%20luxury%20within%20my%20four%20chambers.%20Come%20across%20the%20long%20story%20I%20have%20to%20reveal%20and%20be%20ready%20to%20witness%20something%20so%20special%2C%C2%A0as%20me." target="_blank">
              <img src="<?php echo $udesly_fe_items['image_-720201509']->src; ?>" alt="<?php echo $udesly_fe_items['image_-720201509']->alt; ?>" class="image-13" srcset="<?php echo $udesly_fe_items['image_-720201509']->srcset; ?>" data-udy-fe="image_-720201509">
            </a>
         
         
          <a class="redes-articulo" href="mailto:?subject=I%20am%20Nima&body=http://nimalocalhousehotel.com/i-am-nima/" target="_blank">
            
              <img src="<?php echo $udesly_fe_items['image_-1223048835']->src; ?>" alt="<?php echo $udesly_fe_items['image_-1223048835']->alt; ?>" class="image-13" srcset="<?php echo $udesly_fe_items['image_-1223048835']->srcset; ?>" data-udy-fe="image_-1223048835">
            </a>
          
        
        </div>
        <div class="contenedor-comentarios">
          <div class="comentarios-articulo">
            <div class="circulo-comentarios">
              <p class="numero-comentarios" data-udy-fe="text_48"><?php echo get_comments_number(); ?></p>
            </div>
          </div>
          <p class="texto-comentarios" data-udy-fe="text_1543427560"><?php echo $udesly_fe_items['text_1543427560']; ?></p>
        </div>
         
      

      
                 
        <?php

                global $wpdb;

                $sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID,

                comment_post_ID, comment_author, comment_date_gmt, comment_date, comment_approved,

                comment_type,comment_author_url,

                SUBSTRING(comment_content,1,30) AS com_excerpt

                FROM $wpdb->comments

                LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID =

                $wpdb->posts.ID)

                WHERE comment_approved = '1' AND comment_type = '' AND

                post_password = ''

                ORDER BY comment_date_gmt DESC

                LIMIT 10";

                $comments = $wpdb->get_results($sql);

                $output = $pre_HTML;

                $output .= "\n<ul class='container-comentarios'>";

                foreach ($comments as $comment) {

                $output .= "\n<li>". "\n<h3>". strip_tags($comment->comment_author) . "\n</h3>" ." dice :" . "\n<p>". strip_tags($comment->comment_date) .  "\n</p>" .

                 "<a href=\"" . get_permalink($comment->ID) .

                "#comment-" . $comment->comment_ID . "\" title=\"on " .

                $comment->post_title . "\">" . strip_tags($comment->com_excerpt)

                ."</a></li>";

                }

                $output .= "\n</ul>";

                $output .= $post_HTML;

                echo $output;?>

        <?php comment_form(); ?>
           <div class="checkbox-field w-checkbox"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input"><label for="checkbox" class="w-form-label" data-udy-fe="text_1313927694"><?php echo $udesly_fe_items['text_1313927694']; ?></label></div>


        



      </div>
      <div class="menu-lateral-blog">
        <h2 class="titulo-menu-blog" data-udy-fe="text_1607367139"><?php echo $udesly_fe_items['text_1607367139']; ?></h2>
        <h3 class="subtitulo-menu-blog" data-udy-fe="text_-796876171"><?php echo $udesly_fe_items['text_-796876171']; ?></h3>
        <form action="/search" class="search w-form"><input type="search" class="search-input w-input" maxlength="256" name="query" placeholder="Search&#x2026;" id="search" required><input type="submit" value="." class="search-button w-button"></form>
        <h1 class="subtitulo-fechas-blog" data-udy-fe="text_686916164"><?php echo $udesly_fe_items['text_686916164']; ?></h1>
        <p class="paragraph-17" data-udy-fe="text_-1730785300,text_-457527221,text_778117118,text_-31229508,text_1032558491,text_1752548306,text_1610792076,text_778117117"><?php echo $udesly_fe_items['text_-1730785300']; ?><br><?php echo $udesly_fe_items['text_-457527221']; ?><br><?php echo $udesly_fe_items['text_778117118']; ?><br><?php echo $udesly_fe_items['text_-31229508']; ?><br><?php echo $udesly_fe_items['text_1032558491']; ?><br><?php echo $udesly_fe_items['text_1752548306']; ?><br><?php echo $udesly_fe_items['text_1610792076']; ?><br><?php echo $udesly_fe_items['text_778117117']; ?></p>
        <h2 class="subtitulo-categorias-blog" data-udy-fe="text_-1089792390"><?php echo $udesly_fe_items['text_-1089792390']; ?></h2>
        <p class="paragraph-19" data-udy-fe="text_215930887,text_288152030,text_2428079,text_-612892014"><?php echo $udesly_fe_items['text_215930887']; ?><br><?php echo $udesly_fe_items['text_288152030']; ?><br><?php echo $udesly_fe_items['text_2428079']; ?><br><?php echo $udesly_fe_items['text_-612892014']; ?></p>
      </div>
    </div>
  </div>
  
  <?php include 'footer.php'; ?>
  
  <?php include 'scripts.php'; ?>

<?php wp_footer(); ?><?php udesly_set_fe_configuration($udesly_fe_items, 'articulo'); ?>


<?php endwhile; endif; ?>



</body></html>