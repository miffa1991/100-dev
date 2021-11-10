<section class="why-we-section" data-scrolling="why-we">
   <div class="top-block">
      <div class="container">
         <div class="wrapper">
            <div class="left-block">
               <span
                  class="main-title wow animate__animated animate__fadeInUp"><?php the_field('title_sec_5', 'option') ?></span>
               <div class="inner-wrapper">
                  <?php if (have_rows('why_rep_sec_5', 'option')) :
                  while (have_rows('why_rep_sec_5', 'option')) : the_row(); ?>
                  <div class="item wow animate__animated animate__fadeInDown">
                     <span class="item-count scroll-view" data-percent="<?php the_sub_field('number') ?>">
                        <b><?php the_sub_field('number') ?></b> <?php the_sub_field('descr_number') ?>
                     </span>
                     <span class="item-info"><?php the_sub_field('descr_under_number') ?></span>
                  </div>
                  <?php  
                           endwhile;
                        else :
                        // no rows found
                        endif;
                     wp_reset_query();
                     ?>
               </div>
            </div>
            <div class="right-block">
               <ul>
                  <?php if (have_rows('why_rep_sec_5_2', 'option')) :
                  while (have_rows('why_rep_sec_5_2', 'option')) : the_row(); ?>
                  <li class=" wow animate__animated animate__fadeInDown"><?php the_sub_field('advance') ?></li>
                  <?php  
                           endwhile;
                        else :
                        // no rows found
                        endif;
                     wp_reset_query();
                     ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="bottom-block">
      <div class="container">
         <div class="wrapper">
            <div class="left-block">
               <span class="main-title wow animate__animated animate__fadeInUp">
                  <?php the_field('title_sec_6'); ?>
               </span>
               <span class="description wow animate__animated animate__fadeInDown">
                  <?php the_field('sub_title_sec_6'); ?>
               </span>
            </div>
            <div class="right-block">
               <?php if (get_field('shortcode_form_sec_6')) :
										the_field('shortcode_form_sec_6');
						endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>