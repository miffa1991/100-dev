<section class="about-us-section" data-scrolling="about-us">
   <div class="container">
      <div class="wrapper">
         <div class="left-block"><span
               class="main-title wow animate__animated animate__fadeInLeft"><?php the_field('title_sec_2') ?></span>
         </div>
         <div class="right-block">
            <span class="title wow animate__animated animate__fadeInUp">
               <?php the_field('sub_title_sec_2') ?>
            </span>
            <span class="text wow animate__animated animate__fadeInUp"><?php the_field('descr_sec_2') ?></span>
            <picture>
               <?php echo wp_get_attachment_image( get_field('img_sec_3') , 'full', false, array() ); ?>
            </picture>
         </div>
      </div>
   </div>
</section>