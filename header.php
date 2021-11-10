<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package miffka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="https://gmpg.org/xfn/11"> <?php /* this is SEO FOAF */ ?>
      <?php wp_head(); ?>
   </head>

   <body <?php body_class(); ?>>
      <?php wp_body_open(); ?>
      <header class="header">
         <div class="container">
            <div class="wrapper">
               <?php 
               $logo = '';
               $logo_mobile  = '';
               if(get_field('logotype', 'option')){
                  $logo = get_field('logotype', 'option');
                  $logo_mobile  = get_field('logotype_mobile', 'option');
               } 
               ?>
               <a href="javascript:;" class="logo hover-target desc" <?php if($logo) { ?>
                  style="background-image:url(<?php echo $logo ?>);" <?php } ?>>
               </a>
               <a href="javascript:;" class="logo hover-target mob" <?php if($logo_mobile) { ?>
                  style="background-image:url(<?php echo $logo_mobile ?>);" <?php } ?>>
               </a>
               <div class="right-block">
                  <a href="tel:<?php the_field('phone_opt', 'option') ?>" class="phone-link hover-target">
                     <?php the_field('phone_opt', 'option') ?>
                  </a>
                  <?php	wp_nav_menu( array( 'theme_location' => 'menu-lang', ) ); ?>
                  <button class="hamburger hover-target"
                     onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened')); body.classList.toggle('open-menu');">
                     <span class="span-1"></span>
                     <span class="span-2"></span>
                     <span class="span-3"></span>
                  </button>
               </div>
            </div>
         </div>
         <nav class="header-menu">
            <div class="container">
               <ul class="header-navbar-menu">
                  <?php if (have_rows('menu_rep', 'option')) :
                  while (have_rows('menu_rep', 'option')) : the_row(); ?>
                  <li class="menu-item <?php if(get_sub_field('menu_2_rep')) { echo 'menu-item-has-children'; } ?> 
                     hover-target">
                     <a href="javascript:;"
                        <?php if(get_sub_field('data_atribut')) {echo 'class=" js-anchor-block" data-scroll="'. get_sub_field('data_atribut') .'"';} ?>>
                        <?php the_sub_field('punkt_menyu') ?>
                     </a>
                     <?php if (have_rows('menu_2_rep')) : ?>
                     <ul class="sub-menu">
                        <?php  while (have_rows('menu_2_rep')) : the_row(); 
                           $id_post = get_sub_field('serv');
                           
                           if ($id_post) :
                           setup_postdata($id_post);?>
                        <li class="menu-item hover-target"><a href="javascript:;"
                              data-product-id="<?php echo $id_post->ID; ?>" class="modal-toggle modal-product-link"
                              data-modal="modalService">
                              <?php echo get_the_title( $id_post ); ?></a></li>
                        <?php endif;  
                              endwhile; ?>
                     </ul>
                     <?php else :
                        // no rows found
                        endif;
                     wp_reset_query(); ?>
                  </li>
                  <?php  
                           endwhile;
                        else :
                        // no rows found
                        endif;
                     wp_reset_query();
                     ?>
               </ul>
               <div class="mob_lang">
                  <?php	wp_nav_menu( array( 'theme_location' => 'menu-lang', ) ); ?>
               </div>
               <div class="soc-block">
                  <a href="<?php the_field('instagram', 'option') ?>" class="soc-link inst hover-target"></a>
                  <a href="<?php the_field('facebook', 'option') ?>" class="soc-link fb hover-target"></a>
                  <a href="<?php the_field('youtube', 'option') ?>" class="soc-link yt hover-target"></a>
               </div>
            </div>
         </nav>
      </header>