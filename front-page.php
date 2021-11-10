<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package miffka
 */

get_header();
?>


<!-- BEGIN CONTENT -->

<main class="content">
   <?php get_template_part('template-parts/section/main', 'section'); ?>
   <?php get_template_part('template-parts/section/about-us', 'section'); ?>
   <?php get_template_part('template-parts/section/service', 'section'); ?>
   <?php get_template_part('template-parts/section/shop', 'section'); ?>
   <?php get_template_part('template-parts/section/custom-logo', 'section'); ?>
   <?php get_template_part('template-parts/section/portfolio', 'section'); ?>
   <?php get_template_part('template-parts/section/why-we', 'section'); ?>
   <?php get_template_part('template-parts/section/specialist', 'section'); ?>
   <?php get_template_part('template-parts/section/contact', 'section'); ?>
</main>
<!-- CONTENT EOF   -->
<?php
get_footer();