<?php /* Template Name: Page Gray */ get_header(); ?>
  </div><!-- /.inner -->
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <?php include(TEMPLATEPATH.'/includes/our-parners.php'); ?>

    <article class="be-partners">
      <div class="inner">
        <h5 class="be-partners-red">Stante naším partnerem</h5>
        <h5 class="be-partners-blue">DĚTI JE NALÉHAVÉ  V VÁŠÍ ZAPOTŘEBÍ</h5>
        <span class="be-partners-phone">TEL. <a href="tel:+420776260478" class="">+420 776 260 478</a></span>
      </div><!-- /.inner -->
    </article><!-- /.be-partners -->
  <?php endwhile; else: // If 404 page error ?>
    <article>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
  <div class="inner">
<?php get_footer(); ?>
