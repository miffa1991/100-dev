<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



function estore_quick_view_product_callback(){
	
	if ( ! wp_verify_nonce( $_POST['nonce'], 'quick-nonce' ) ) {
		wp_die( 'Данные отправлены с левого адреса' );
	}
	$id = $_POST['id'] ? $_POST['id'] : ''; 
	$return_html = '';
   $post_service = get_post( $id );
	?>


<div class="modal-content">
   <div class="full-info-service-block">
      <div id="video_service" class="video">
         <?php if( get_field('link_on_video_srv', $id) ) : ?>
         <a class="video__link" href="<?php the_field('link_on_video_srv', $id) ?>">
            <picture>
               <img
                  src="<?php if(get_field('poster_on_video', $id)) {the_field('poster_on_video', $id); } else { echo 'https://i.ytimg.com/vi/x4IG90aOP2o/hqdefault.jpg';} ?>"
                  class="video__media">
            </picture>
         </a>
         <button class="video__button" type="button" aria-label="Запустить видео">
            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M0.971682 19.7206L0.97168 0.279297L17.7315 9.99996L0.971682 19.7206Z" fill="white" />
            </svg>
         </button>
         <?php else : ?>
         <picture>
            <img src="<?php the_field('poster_on_video', $id) ?>" class="video__media">
         </picture>
         <?php endif; ?>
      </div>
   </div>

   <div class="description-block">
      <span class="main-title"> <?php echo get_the_title( $id ); ?></span>
      <div class="text-wrapper"><?= apply_filters( 'the_content', $post_service->post_content ) ?></div>
      <div class="button-group">
         <a href="<?php the_field('link_on_price', $id) ?>" target="_blank" class="f_button border-button hover-target">
            <span><?php esc_html_e('View price list', 'miffka'); ?></span>
         </a>
         <a href="javascript:;" class="f_button hover-target modal-toggle" data-modal="modalForm">
            <span><?php esc_html_e('Sign up for the service', 'miffka'); ?></span>
         </a>
      </div>
   </div>
   <section class="why-we-section">
      <div class="top-block">
         <div class="container">
            <div class="wrapper">
               <div class="left-block">
                  <span class="main-title"><?php the_field('title_sec_5', 'option') ?></span>
                  <div class="inner-wrapper">
                     <?php if (have_rows('why_rep_sec_5', 'option')) :
                        while (have_rows('why_rep_sec_5', 'option')) : the_row(); ?>
                     <div class="item">
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
                     <li><?php the_sub_field('advance') ?></li>
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
   </section>
   <?php 
      $serv_gellery = get_field('portfolio_service', $id );
         if( $serv_gellery ): 
            $i=1;
      ?>
   <section class="portfolio-section">
      <div class="container">
         <div class="swiper-button-prev hover-target"></div>
         <span class="main-title"><?php esc_html_e('Portfolio', 'miffka'); ?></span>
         <div class="swiper-button-next hover-target"></div>
      </div>


      <div class="slider">
         <div class="swiper-container">
            <div class="swiper-wrapper">
               <?php foreach( $serv_gellery as $image ): ?>

               <div class="swiper-slide">
                  <a class=" hover-target" href="<?php echo wp_get_attachment_image_url( $image , 'full' ); ?>"
                     data-image data-fancybox="portfolio-img-serv">
                     <?php echo wp_get_attachment_image( $image , 'full', false, array() ); ?>
                  </a>
               </div>

               <?php 
               $i++;
                     endforeach; ?>
            </div>
         </div>
      </div>

      <div class="button-group">
         <a href="<?php the_field('link_on_price', $id) ?>" target="_blank" class="f_button border-button hover-target">
            <span><?php esc_html_e('View price list', 'miffka'); ?></span>
         </a>
         <a href="javascript:;" class="f_button hover-target modal-toggle" data-modal="modalForm">
            <span><?php esc_html_e('Sign up for the service', 'miffka'); ?></span></a>
      </div>

   </section>
   <?php endif; ?>
</div>

<script>
jQuery(document).ready(function($) {

   // Custom modal
   $('.modal-toggle').on('click', function(e) {
      e.preventDefault();

      var this_data_modal = $(this).data('modal');
      $('body').addClass('open-modal');
      $('.modal#' + this_data_modal).addClass('is-visible');
   });

   $('[data-close="close"]').on('click', function(e) {
      e.preventDefault();
      $('body').removeClass('open-modal');
      $(this).closest('.modal').removeClass('is-visible');

   });
   $('#modalService [data-close="close"]').on('click', function(e) {
      e.preventDefault();
      $(".video__media").attr("src", "");

   });

   // end

});
</script>

<?php

	echo $return_html; 
	wp_die();
}

add_action( 'wp_ajax_ajax_quick_view', 'estore_quick_view_product_callback' );
add_action( 'wp_ajax_nopriv_ajax_quick_view', 'estore_quick_view_product_callback' );