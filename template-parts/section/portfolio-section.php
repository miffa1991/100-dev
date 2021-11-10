<section class="portfolio-section" data-scrolling="portfolio">
   <div class="container">
      <div class="swiper-button-prev hover-target"></div>
      <span class="main-title wow animate__animated animate__fadeInUp"><?php the_field('title_sec_6') ?></span>
      <div class="swiper-button-next hover-target"></div>
   </div>
   <?php 
      $about_gellery = get_field('portfolio_sec_6');
      if( $about_gellery ): 
      ?>
   <div class="slider">
      <div class="swiper-container">
         <div class="swiper-wrapper">
            <?php
            foreach( $about_gellery as $image ): ?>

            <div class="swiper-slide wow animate__animated animate__fadeInUp">
               <a class=" hover-target" href="<?php echo wp_get_attachment_image_url( $image , 'full' ); ?>" data-image
                  data-fancybox="portfolio-img-1">
                  <?php echo wp_get_attachment_image( $image , 'full', false, array() ); ?>
               </a>
            </div>
            <?php 
            endforeach; ?>
         </div>
      </div>
   </div>
   <?php endif; ?>
</section>