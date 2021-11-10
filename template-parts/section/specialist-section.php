<section class="specialist-section" data-scrolling="team">
   <div class="container">
      <span class="main-title wow animate__animated animate__fadeInUp"><?php the_field('title_sec_7'); ?></span>
      <!-- Remove class 'visible-less' after lazy loading was clicked -->
      <div class="wrapper visible-less">
         <?php if (have_rows('specialist_rep')) :
                  while (have_rows('specialist_rep')) : the_row(); ?>
         <div class="item wow animate__animated animate__fadeInDown">
            <div class="img-block">
               <?php echo wp_get_attachment_image( get_sub_field('foto') , 'full', false, array() ); ?>
            </div>
            <div class="info-block">
               <span class="name"><?php the_sub_field('name') ?></span>
               <span class="position"><?php the_sub_field('position') ?></span>
               <span class="info"><?php the_sub_field('info') ?> </span>
               <a href="javascript:;" class="read-more hover-target modal-toggle" data-modal="modalForm">
                  <?php esc_html_e('Request a call', 'miffka'); ?></a>
            </div>
         </div>
         <?php  
            endwhile;
               else :
               // no rows found
               endif;
            wp_reset_query(); ?>
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