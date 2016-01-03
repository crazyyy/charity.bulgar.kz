<?php get_header(); ?>
<?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
  <article>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>
  </article>
<?php get_footer(); ?>
