<section class="custom-logo-section" data-scrolling="custom_logo">
   <div class="container">
      <div class="wrap_descr">
         <?php if ( get_field('title_sec_5') ) : ?>
         <span class="title  wow animate__animated animate__fadeInUp"><?php echo get_field('title_sec_5'); ?></span>
         <?php endif; ?>
         <?php if ( get_field('subtitle_sec_5') ) : ?>
         <div class="subtitle  wow animate__animated animate__fadeInUp"><?php echo get_field('subtitle_sec_5'); ?></div>
         <?php endif; ?>

         <?php if ( get_field('descr_sec_5') ) : ?>
         <p class=" wow animate__animated animate__fadeInUp"><?php echo get_field('descr_sec_5'); ?></p>
         <?php endif; ?>
         <a href="javascript:;" class="f_button hover-target modal-toggle  wow animate__animated animate__fadeInUp"
            data-modal="modalForm">
            <span><?php esc_html_e('Ask a Question', 'miffka'); ?></span>
         </a>
      </div>
   </div>
</section>