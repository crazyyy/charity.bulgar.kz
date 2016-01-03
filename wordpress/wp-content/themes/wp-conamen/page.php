<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <h1 class="title-bordered"><?php the_title(); ?></h1>
      <?php the_content(); ?>

    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
<?php get_footer(); ?>
