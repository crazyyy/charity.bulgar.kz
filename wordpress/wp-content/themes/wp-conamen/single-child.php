<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="article-slide-right">
        <div class="owl-carousel-single">
          <?php $images = get_field('gallery'); if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <div class="item"><img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>"></div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div><!-- /.article-slide-right -->
      <h2 class="title-red"><?php the_title(); ?></h2>
      <?php
      if( get_field('needhelp') ) {
        $title_text = 'POMOC PRO ';
        $aftermoney = ',-';
      } else {
        $title_text = 'SOBRALI JSME PRO ';
        $aftermoney = ' KČ';
      }?>
      <h3 class="title-subtitle"><?php echo $title_text; ?><?php the_field('name'); ?> <span><?php if( have_rows('donations') ): $sum = 0; while ( have_rows('donations') ) : the_row(); $number = get_sub_field('сontributions'); $sum += $number; endwhile; echo $sum; else : echo '0'; endif; ?><?php echo $aftermoney; ?></span></h3>
      <?php the_content(); ?>
      <?php if( get_field('needhelp') ) { ?>
        <a href="" class="btn btn-red">POMOCI DÍTĚTE</a>
      <?php } ?>

    </article>
  <?php endwhile; else: ?>
    <article>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>

<?php get_footer(); ?>
