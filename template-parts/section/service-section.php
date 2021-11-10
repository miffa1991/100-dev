<section class="service-section">
   <div class="container">
      <span class="main-title wow animate__animated animate__fadeInUp">
         <?php the_field('title_sec_3'); ?>
      </span>
      <div class="wrapper">
         <?php
            if (have_rows('services_sec_3_rep')) :
               while (have_rows('services_sec_3_rep')) : the_row();
                  $id_post = get_sub_field('service');
                  $post_img = get_the_post_thumbnail($id_post, 'full');
						$size_post = '';
						if(get_sub_field('size_post') === 'half'){
							$size_post = 'w-50';
						} else {
							$size_post = 'w-25';
						}
                  if ($id_post) :
                     setup_postdata($id_post);
                  ?>
         <div class="item wow animate__animated animate__fadeInUp <?php echo $size_post; ?> ">
            <picture>
               <?php echo $post_img; ?>
            </picture>
            <div class="bottom-block">

               <a href="javascript:;" data-product-id="<?php echo $id_post; ?>"
                  class="item-name modal-toggle hover-target modal-product-link" data-modal="modalService">
                  <?php echo get_the_title( $id_post ); ?>
               </a>
               <a href="javascript:;" data-product-id="<?php echo $id_post; ?>"
                  class="item-more modal-toggle hover-target modal-product-link" data-modal="modalService">
                  <?php esc_html_e('Read more', 'miffka'); ?>
                  <svg width="59" height="8" viewBox="0 0 59 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M58.3536 3.64645C58.5488 3.84171 58.5488 4.15829 58.3536 4.35355L55.1716 7.53553C54.9763 7.7308 54.6597 7.7308 54.4645 7.53553C54.2692 7.34027 54.2692 7.02369 54.4645 6.82843L57.2929 4L54.4645 1.17157C54.2692 0.976311 54.2692 0.659728 54.4645 0.464466C54.6597 0.269204 54.9763 0.269204 55.1716 0.464466L58.3536 3.64645ZM58 4.5H0V3.5H58V4.5Z"
                        fill="white" />
                  </svg>
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
   </div>
</section>