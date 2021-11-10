<section class="shop-section" data-scrolling="shop">

   <div class="container">
      <span class="main-title wow animate__ animate__fadeInUp"><?php the_field('title_sec_4') ?></span>
      <span class="submain-title wow animate__animated animate__fadeInUp"><?php the_field('subtitle_sec_4') ?></span>
   </div>

   <div class="container">
      <div class="wrapper visible-less">
         <?php
            if (have_rows('shop_sec_4')) :
               while (have_rows('shop_sec_4')) : the_row();
                  $id_post = get_sub_field('logo');
                  $post_img = get_the_post_thumbnail($id_post, 'thumb', array('class'=>'logo_thumb'));
                  $post_img_url = get_the_post_thumbnail_url( $id_post, 'full' );
                  if ($id_post) :
                     setup_postdata($id_post);
                  ?>
         <div class="item  wow animate__animated animate__fadeInUp">
            <a href="<?php echo $post_img_url; ?>" data-fancybox="shop-img-<?php echo $id_post; ?>" class="thumb">

               <?php echo $post_img; ?>
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/big-img-icon.svg" alt="big-img-icon"
                  class="icon_big">
            </a>
            <div class="descr">
               <div class="info">
                  <span class="number"><?php echo get_the_title( $id_post ); ?></span>
                  <span class="price"><?php the_field('price', $id_post) ?></span>
               </div>
               <a href="javascript:;" class="wow animate__animated animate__fadeInUp modal-toggle"
                  data-modal="modalCallBack">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart-icon.svg" alt="cart-icon"
                     class="cart_icon">
               </a>

               </a>
            </div>
         </div>
         <?php endif; 
               endwhile;
            else :
            // no rows found
            endif;
            wp_reset_query();
            ?>

      </div>
      <div class="load-more-block wow animate__animated animate__fadeInDown">
         <a href="javascript:;" class="f_button load-more hover-target">
            <span>
               <?php esc_html_e('show more', 'miffka'); ?>
            </span>
         </a>
      </div>
   </div>
</section>