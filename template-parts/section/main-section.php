<section class="main-section">
   <video id="video" autoplay muted loop preload="auto" poster="<?php the_field('poster_video'); ?>" playsinline>
      <source src="<?php the_field('link_on_video'); ?>" type="video/mp4">
      Your browser does not support the video tag.
   </video>
   <div class="container">
      <div class="wrapper">
         <h1 class="h1 wow animate__animated animate__fadeInUp"><?php the_field('title_sec_1'); ?></h1>
         <a href="javascript:;" class="f_button hover-target wow animate__animated animate__fadeInUp modal-toggle"
            data-modal="modalForm"><span><?php the_field('title_popup_sec_1') ?></span></a>
         <span class="rotate-title">
            <span>Scroll down</span>
         </span>
         <a href="tel:<?php the_field('phone_opt', 'option') ?>"
            class="phone-link hover-target"><?php the_field('phone_opt', 'option') ?></a>
      </div>
   </div>
</section>